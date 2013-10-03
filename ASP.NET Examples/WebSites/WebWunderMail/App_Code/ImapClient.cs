using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Net.Sockets;
using System.IO;
using System.Net.Security;
using System.Threading;
using System.Text;
using System.Text.RegularExpressions;


/// <summary>
/// Summary description for ImapClient
/// </summary>
public class ImapClient
{
    int tag = 0;
    Stream stream;
    string hostname;
    string username;
    string password;
    int port;
    bool ssl;

    public ImapClient(string hostname, string username, string password, int port, bool ssl)
    {
        this.hostname = hostname;
        this.username = username;
        this.password = password;
        this.port = port;
        this.ssl = ssl;
    }

    public ImapClient(string hostname, int port, string username, string password, bool ssl = false)
    {
        this.hostname = hostname;
        this.username = username;
        this.password = password;
        this.port = port;
        this.ssl = ssl;
        RemoteCertificateValidationCallback validate = null;
        TcpClient client = new TcpClient(hostname, port);
        stream = client.GetStream();
        SslStream sslStream = new SslStream(stream, false, validate ??
            ((sender, cert, chain, err) => true));
        sslStream.AuthenticateAsClient(hostname);
        stream = sslStream;
        List<string> str = readstreamdata("* OK");
        string tagStr = GetTag();
        writestreamdata(tagStr + "LOGIN " + QuoteString(username) + " " + QuoteString(password) + "\r\n");
        readstreamdata(tagStr + "OK");
    }

    void writestreamdata(string data)
    {
        byte[] bytes = System.Text.ASCIIEncoding.UTF8.GetBytes(data);
        stream.Write(bytes, 0, bytes.Length);
    }

    List<string> readstreamdata(string tagstr)
    {
        int b;
        bool stop = false;
        List<string> lines = new List<string>();
        StringBuilder currentLine = new StringBuilder();
        while (!stop)
        {
            b = stream.ReadByte();
            if (b == 10)
            {
                currentLine.Append(Convert.ToChar(b));
                lines.Add(currentLine.ToString());
                string line = currentLine.ToString();
                currentLine.Clear();
                if (line.StartsWith(tagstr))
                {
                    return lines;
                }
            }
            else
            {
                currentLine.Append(Convert.ToChar(b));
            }
        }
        return lines;
    }

    string QuoteString(string value)
    {
        return "\"" + value
            .Replace("\\", "\\\\")
            .Replace("\r", "\\r")
            .Replace("\n", "\\n")
            .Replace("\"", "\\\"") + "\"";
    }

    public List<string> GetAllFolders()
    {
        string tagStr = GetTag();
        writestreamdata(tagStr + "LIST \"\" \"*\"\r\n");
        List<string> data = readstreamdata(tagStr + "OK");
        Regex r = new Regex("[*] LIST [(][^)]+[)] [\"]/[\"] [\"](?<FolderName>.+)[\"]");
        List<string> foldernames = new List<string>();
        foreach (string str in data)
        {
            //* LIST (\HasNoChildren) "/" "Appointments"
            Match m = r.Match(str);
            if (m.Groups["FolderName"] != null && m.Groups["FolderName"].Value != null && m.Groups["FolderName"].Value.Length > 0)
            {
                foldernames.Add(m.Groups["FolderName"].Value);
            }
        }
        return foldernames;
    }

    //tag + "SELECT " + Util.UTF7Encode(mailbox).QuoteString()
    public void SelectMailbox(string mailboxname)
    {
        string tagStr = GetTag();
        writestreamdata(tagStr + "SELECT " + QuoteString(mailboxname) + "\r\n");
        readstreamdata(tagStr + "OK");
    }

    public class Message
    {
        public string ID;
        public string UID;
        public DateTime Date;
        public string To;
        public string From;
        public string Subject;
    }

    public List<Message> GetAllHeaders(string mailbox, bool seen = true)
    {
        SelectMailbox(mailbox);
        string tagStr = GetTag();
        writestreamdata(tagStr + "FETCH 1:* (BODY" + (seen ? "" : ".PEEK") + "[HEADER])\r\n");
        List<string> headerdata = readstreamdata(tagStr + "OK");
        List<Message> headers = new List<Message>();
        Message currentMsg = null;
        foreach (string header in headerdata)
        {
            Regex r = new Regex("[*] [0-9]+ FETCH [(]BODY[\\[]HEADER[\\]] [{](?<UID>[0-9]+)[}]\r\n");
            Match m = r.Match(header);
            if (m.Groups["UID"] != null && m.Groups["UID"].Value != null && m.Groups["UID"].Value.Length > 0)
            {
                if (currentMsg != null)
                {
                    headers.Add(currentMsg);
                }
                currentMsg = new Message();
                currentMsg.UID = m.Groups["UID"].Value;
                Regex r1 = new Regex("[*] (?<ID>[0-9]+) FETCH .+");
                Match m1 = r1.Match(header);
                if (m1.Groups["ID"] != null && m1.Groups["ID"].Value != null && m1.Groups["ID"].Value.Length > 0)
                {
                    currentMsg.ID = m1.Groups["ID"].Value;
                }
            }
            else
            {
                r = new Regex("Date[:] (?<Date>[A-z]+, [0-9]+ [A-z]+ [0-9]+ [0-9]+[:][0-9]+[:][0-9]+) .+\r\n");
                m = r.Match(header);
                if (m.Groups["Date"] != null && m.Groups["Date"].Value != null && m.Groups["Date"].Value.Length > 0)
                {
                    currentMsg.Date = DateTime.Parse(m.Groups["Date"].Value);
                }
                else
                {
                    if (header.StartsWith("From: "))
                    {
                        currentMsg.From = header.Substring(6, header.Length - 8);
                    }
                    else
                    {
                        if (header.StartsWith("To: "))
                        {
                            currentMsg.To = header.Substring(4, header.Length - 6);
                        }
                        else
                        {
                            if (header.StartsWith("Subject: "))
                            {
                                currentMsg.Subject = header.Substring(9, header.Length - 11);
                            }
                        }
                    }
                }
            }
        }
        headers.Add(currentMsg);
        return headers;
    }

    public string GetMessageBody(string id, string mailbox)
    {
        SelectMailbox(mailbox);
        string tagStr = GetTag();
        writestreamdata(tagStr + "FETCH " + id + " BODY[TEXT]\r\n");
        List<string> headerdata = readstreamdata(tagStr + "OK");
        StringBuilder sb = new StringBuilder();
        for (int i = 1; i < headerdata.Count - 1; i++)
        {
            sb.Append(headerdata[i]);
        }
        return sb.ToString();
    }

    string GetTag()
    {
        Interlocked.Increment(ref tag);
        return string.Format("xm{0:000} ", tag);
    }

    public void Logout()
    {
        stream.Close();
    }
}