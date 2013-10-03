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
        ImapClient imp = new ImapClient(ccl.InputParams[2].ToString(), 993, ccl.InputParams[0].ToString(), ccl.InputParams[1].ToString(), true);
        List<string> mailboxes = imp.GetAllFolders();
        foreach(string mb in mailboxes){
            parameters.Add(mb);
        }
        imp.Logout();
    }

    public void getEmailHeaders(string canvasid, int windowid)
    {
        ImapClient imp = new ImapClient(ccl.InputParams[2].ToString(), 993, ccl.InputParams[0].ToString(), ccl.InputParams[1].ToString(), true);
        List<ImapClient.Message> headers = imp.GetAllHeaders(ccl.InputParams[3].ToString());
        int count = 0;
        foreach (ImapClient.Message msg in headers)
        {
            List<object> arlmsg = new List<object>();
            arlmsg.Add(msg.From);
            arlmsg.Add(msg.Subject);
            arlmsg.Add("");
            arlmsg.Add(msg.Date.ToString());
            arlmsg.Add("");
            arlmsg.Add(msg.ID);
            parameters.Add(arlmsg);
            count++;
        }
        imp.Logout();
    }

    public void getMailMessage(string canvasid, int windowid)
    {
        ImapClient imp = new ImapClient(ccl.InputParams[2].ToString(), 993, ccl.InputParams[0].ToString(), ccl.InputParams[1].ToString(), true);
        List<object> arlmsg = new List<object>();
        arlmsg.Add("");
        arlmsg.Add("");
        arlmsg.Add("");
        arlmsg.Add(XmlEscape(imp.GetMessageBody(ccl.InputParams[3].ToString(), ccl.InputParams[4].ToString())));
        parameters.Add(arlmsg);
    }

    public static string XmlEscape(string unescaped)
    {
        XmlDocument doc = new XmlDocument();
        var node = doc.CreateElement("root");
        node.InnerText = unescaped;
        return node.InnerXml;
    }
}