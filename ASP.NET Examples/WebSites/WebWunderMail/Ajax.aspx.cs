/*
    Canvas Control Library Copyright 2012
    Created by Akshay Srinivasan [akshay.srin@gmail.com]
    This javascript code is provided as is with no warranty implied.
    Akshay Srinivasan are not liable or responsible for any consequence of 
    using this code in your applications.
    You are free to use it and/or change it for both commercial and non-commercial
    applications as long as you give credit to Akshay Srinivasan the creator 
    of this code.
*/

using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Text;
using System.IO.Compression;
using System.IO;
using System.Text.RegularExpressions;
using System.Xml;
using System.Reflection;
using System.Collections;

using MailBee;
using MailBee.Mime;
using MailBee.Security;
using MailBee.SmtpMail;

using MailBee.DnsMX;
using MailBee.Pop3Mail;
using MailBee.ImapMail;

public partial class Ajax : System.Web.UI.Page
{
    CanvasControlLibrary ccl;
    List<object> parameters = new List<object>();

    protected void Page_Load(object sender, EventArgs e)
    {
        ccl = new CanvasControlLibrary(Request.InputStream);
        ccl.InvokeServerSideFunction(this.Page);
        ccl.SendVars(Response.OutputStream, parameters);
    }

    protected override void Render(HtmlTextWriter writer)
    {
    }

    public void getFolders(string canvasid, int windowid)
    {
        Imap imp = new Imap();
        imp.Connect(((List<object>)ccl.InputParams[0])[2].ToString());
        imp.Login(((List<object>)ccl.InputParams[0])[0].ToString(), ((List<object>)ccl.InputParams[0])[1].ToString());
        FolderCollection fc = imp.DownloadFolders();
        foreach (Folder fcx in fc)
        {
            parameters.Add(fcx.Name);
        }
        imp.Disconnect();
    }

    public void getEmailHeaders(string canvasid, int windowid)
    {
        Imap imp = new Imap();
        imp.Connect(((List<object>)ccl.InputParams[0])[2].ToString());
        imp.Login(((List<object>)ccl.InputParams[0])[0].ToString(), ((List<object>)ccl.InputParams[0])[1].ToString());
        imp.SelectFolder("Inbox");
        MailMessageCollection msgs = imp.DownloadMessageHeaders(Imap.AllMessages, false);
        for (int i = msgs.Count - 1; i > -1; i--)
        {
            MailMessage msg = msgs[i] as MailMessage;
            List<object> arlmsg = new List<object>();
            arlmsg.Add(msg.From);
            arlmsg.Add(msg.Subject);
            arlmsg.Add(msg.DateSent.ToString());
            arlmsg.Add(msg.DateReceived.ToString());
            arlmsg.Add(msg.Attachments.Count > 0 ? 1 : 0);
            arlmsg.Add(msg.UidOnServer);
            parameters.Add(arlmsg);
        }
        imp.Disconnect();
    }

    public void getMailMessage(string canvasid, int windowid)
    {
        Imap imp = new Imap();
        imp.Connect(((List<object>)ccl.InputParams[0])[2].ToString());
        imp.Login(((List<object>)ccl.InputParams[0])[0].ToString(), ((List<object>)ccl.InputParams[0])[1].ToString());
        imp.SelectFolder("Inbox");
        MailMessage msg = imp.DownloadEntireMessage((long)Convert.ToInt32(((List<object>)ccl.InputParams[0])[3]), true);
        List<object> arlmsg = new List<object>();
        arlmsg.Add(msg.From);
        arlmsg.Add(msg.Subject);
        arlmsg.Add(msg.Cc);
        arlmsg.Add(XmlEscape(msg.BodyPlainText));
        parameters.Add(arlmsg);
        imp.Disconnect();
    }

    public static string XmlEscape(string unescaped)
    {
        XmlDocument doc = new XmlDocument();
        var node = doc.CreateElement("root");
        node.InnerText = unescaped;
        return node.InnerXml;
    }
}