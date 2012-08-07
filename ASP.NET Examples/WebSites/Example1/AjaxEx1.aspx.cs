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

public partial class Default2 : System.Web.UI.Page
{
    CanvasControlLibrary ccl;

    protected void Page_Load(object sender, EventArgs e)
    {
        ccl = new CanvasControlLibrary(Request.InputStream);
        ccl.InvokeServerSideFunction(this.Page);
        ccl.SendVars(Response.OutputStream);
    }

    protected override void Render(HtmlTextWriter writer)
    {
    }

    public void ClickMe(string canvasid, int windowid)
    {
        CanvasControlLibrary.CCLLabelProps lp = ccl.getControlPropsByControlNameID("l1") as CanvasControlLibrary.CCLLabelProps;
        lp.Text = "Did Postback";
    }

    public void InitializeForm1(string canvasid, int windowid)
    {
        CanvasControlLibrary.CCLComboBoxProps selectCityComboBox = ccl.getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        selectCityComboBox.Data = new System.Collections.ArrayList();
        selectCityComboBox.Data.Add("Mumbai");
        selectCityComboBox.Data.Add("Delhi");
        selectCityComboBox.Data.Add("Bangalore");
        selectCityComboBox.Data.Add("Chennai");
    }

    public void onSelectCityChanged(string canvasid, int windowid)
    {
        CanvasControlLibrary.CCLComboBoxProps selectCityComboBox = ccl.getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        CanvasControlLibrary.CCLComboBoxProps selectCinemaComboBox = ccl.getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        selectCinemaComboBox.Data = new System.Collections.ArrayList();
        switch (selectCityComboBox.Data[Convert.ToInt32(selectCityComboBox.SelectedID)].ToString())
        {
            case "Mumbai":
                selectCinemaComboBox.Data.Add("Phoenix Mills");
                selectCinemaComboBox.Data.Add("Juhu");
                selectCinemaComboBox.Data.Add("Nariman Point");
                break;
            case "Delhi":
                selectCinemaComboBox.Data.Add("Delhi Nagar 1");
                selectCinemaComboBox.Data.Add("Delhi Nagar 2");
                selectCinemaComboBox.Data.Add("Delhi Nagar 3");
                break;
            case "Bangalore":
                selectCinemaComboBox.Data.Add("Bangalore Nagar 1");
                selectCinemaComboBox.Data.Add("Bangalore Nagar 2");
                selectCinemaComboBox.Data.Add("Bangalore Nagar 3");
                break;
            case "Chennai":
                selectCinemaComboBox.Data.Add("Chennai Nagar 1");
                selectCinemaComboBox.Data.Add("Chennai Nagar 2");
                selectCinemaComboBox.Data.Add("Chennai Nagar 3");
                break;
        }
    }
}