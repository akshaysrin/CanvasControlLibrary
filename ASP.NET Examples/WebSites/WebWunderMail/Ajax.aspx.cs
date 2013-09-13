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
using S22.Imap;

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
        ImapClient imp = new ImapClient(ccl.InputParams[2].ToString(), 993, true, null);
        imp.Login(ccl.InputParams[0].ToString(), ccl.InputParams[1].ToString(), AuthMethod.Login);
        string[] mailboxes = imp.ListMailboxes();
        foreach(string mb in mailboxes){
            parameters.Add(mb);
        }
        imp.Logout();
        imp.Dispose();
    }

    public void getEmailHeaders(string canvasid, int windowid)
    {
        ImapClient imp = new ImapClient(ccl.InputParams[2].ToString(), 993, true, null);
        imp.Login(ccl.InputParams[0].ToString(), ccl.InputParams[1].ToString(), AuthMethod.Login);
        uint[] ids = imp.Search(SearchCondition.All(), "Inbox");
        int count = 0;
        foreach (int id in ids)
        {
            System.Net.Mail.MailMessage msg = imp.GetMessage(Convert.ToUInt32(id), FetchOptions.HeadersOnly, true, "Inbox");
            List<object> arlmsg = new List<object>();
            arlmsg.Add(msg.From);
            arlmsg.Add(msg.Subject);
            arlmsg.Add("");
            arlmsg.Add("");
            arlmsg.Add("");
            arlmsg.Add(id);
            parameters.Add(arlmsg);
            count++;
            if (count > 30)
            {
                break;
            }
        }
        imp.Logout();
        imp.Dispose();
    }

    public void getMailMessage(string canvasid, int windowid)
    {
        ImapClient imp = new ImapClient(ccl.InputParams[2].ToString(), 993, true, null);
        imp.Login(ccl.InputParams[0].ToString(), ccl.InputParams[1].ToString(), AuthMethod.Login);
        System.Net.Mail.MailMessage msg = imp.GetMessage(Convert.ToUInt32(ccl.InputParams[3]), true, "Inbox");
        List<object> arlmsg = new List<object>();
        arlmsg.Add(msg.From);
        arlmsg.Add(msg.Subject);
        arlmsg.Add(msg.CC);
        arlmsg.Add(XmlEscape(msg.Body.ToString()));
        parameters.Add(arlmsg);
        imp.Logout();
        imp.Dispose();
    }

    public static string XmlEscape(string unescaped)
    {
        XmlDocument doc = new XmlDocument();
        var node = doc.CreateElement("root");
        node.InnerText = unescaped;
        return node.InnerXml;
    }
}