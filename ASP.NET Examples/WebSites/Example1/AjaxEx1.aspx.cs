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
using System.Text.RegularExpressions;

public partial class Default2 : System.Web.UI.Page
{
    CanvasControlLibrary ccl;
    ArrayList parameters = new ArrayList();
    ArrayList movieIndexes = new ArrayList();

    protected void Page_Load(object sender, EventArgs e)
    {
        ArrayList al = new ArrayList();
        al.Add("Phoenix Mills");
        ArrayList indexs = new ArrayList();
        indexs.Add("Fantastic Four");
        indexs.Add("Ferris Bueller's Day Off");
        indexs.Add("Incredible Hulk");
        al.Add(indexs);
        movieIndexes.Add(al);
        ccl = new CanvasControlLibrary(Request.InputStream);
        ccl.InvokeServerSideFunction(this.Page);
        ccl.SendVars(Response.OutputStream, parameters);
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
        selectCityComboBox.Data.Add("Select a city");
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
                selectCinemaComboBox.Data.Add("Select a Theater");
                selectCinemaComboBox.Data.Add("Juhu");
                selectCinemaComboBox.Data.Add("Phoenix Mills");
                selectCinemaComboBox.Data.Add("Nariman Point");
                break;
            case "Delhi":
                selectCinemaComboBox.Data.Add("Select a Theater");
                selectCinemaComboBox.Data.Add("Chitrapur");
                selectCinemaComboBox.Data.Add("Khari Baoli");
                selectCinemaComboBox.Data.Add("Lakshmi Garden");
                break;
            case "Bangalore":
                selectCinemaComboBox.Data.Add("Select a Theater");
                selectCinemaComboBox.Data.Add("Gandhi Nagar");
                selectCinemaComboBox.Data.Add("Lake City");
                selectCinemaComboBox.Data.Add("Rajaji Nagar");
                break;
            case "Chennai":
                selectCinemaComboBox.Data.Add("Select a Theater");
                selectCinemaComboBox.Data.Add("Harrington Road");
                selectCinemaComboBox.Data.Add("Boat Club");
                selectCinemaComboBox.Data.Add("Chetpet");
                break;
            default:
                selectCinemaComboBox.Data.Add("Select a city");
                break;
        }
    }

    public void DoPaymentForTickets(string canvasid, int windowid)
    {
        CanvasControlLibrary.CCLTextBox textbox = ccl.getControlPropsByControlNameID("numTicketsTextBox") as CanvasControlLibrary.CCLTextBox;
        CanvasControlLibrary.CCLComboBoxProps selectCinemaComboBox = ccl.getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        string labelname = "";
        CanvasControlLibrary.CCLLabelProps lp = null;
        for (int i = 0; i < ccl.Windows.Count; i++)
        {
            if (ccl.Windows[i].ControlType == "Label")
            {
                lp = ccl.getControlPropsByWindowID(canvasid, ccl.Windows[i].WindowCount) as CanvasControlLibrary.CCLLabelProps;
                if (lp.BackGroundColor != null && lp.BackGroundColor.Length > 0)
                {
                    labelname = ccl.Windows[i].ControlNameID;
                    break;
                }
            }
        }
        Regex regex = new System.Text.RegularExpressions.Regex("MovieTimeLabel[0-9]+Poster(?<PosterIndex>[0-9]+)");
        Match m = regex.Match(labelname);
        int movieIndex = Convert.ToInt32(m.Groups["PosterIndex"].Value);
        string movieName = "";
        for (int i = 0; i < movieIndexes.Count; i++)
        {
            if (((ArrayList)movieIndexes[i])[0].ToString() == selectCinemaComboBox.Data[Convert.ToInt32(selectCinemaComboBox.SelectedID)].ToString())
            {
                movieName = ((ArrayList)((ArrayList)movieIndexes[i])[1])[movieIndex].ToString();
            }
        }
        parameters.Add("The payment was successful.  You have " + textbox.UserInputText + " tickets to see " + movieName + " at " + selectCinemaComboBox.Data[Convert.ToInt32(selectCinemaComboBox.SelectedID)].ToString() +
            " showing at time " + lp.Text);
    }

    public void onSelectCinemaChanged(string canvasid, int windowid)
    {
        ArrayList pictures = new ArrayList();
        CanvasControlLibrary.CCLComboBoxProps selectCinemaComboBox = ccl.getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        switch (selectCinemaComboBox.Data[Convert.ToInt32(selectCinemaComboBox.SelectedID)].ToString())
        {
            case "Phoenix Mills":
                pictures.Add("fantastic_four.jpg");
                pictures.Add("1:30 pm");
                pictures.Add("5:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("ferrisbuellersdayoff.jpg");
                pictures.Add("9:00 pm");
                pictures.Add("11:30 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("IncredibleHulk.jpg");
                pictures.Add("6:00 pm");
                pictures.Add("8:30 pm");
                parameters.Add(pictures);
                break;
            case "Juhu":
                pictures.Add("ironman.jpg");
                pictures.Add("4:30 pm");
                pictures.Add("9:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("pointbreak.jpg");
                pictures.Add("6:00 pm");
                pictures.Add("7:30 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("Spider-Man-2.jpg");
                pictures.Add("5:00 pm");
                pictures.Add("10:30 pm");
                parameters.Add(pictures);
                break;
            case "Nariman Point":
                pictures.Add("spider-man4.jpg");
                pictures.Add("7:30 pm");
                pictures.Add("8:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("spider_man3.jpg");
                pictures.Add("2:00 pm");
                pictures.Add("5:30 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("The-Avengers.jpg");
                pictures.Add("9:00 pm");
                pictures.Add("9:30 pm");
                pictures.Add("10:30 pm");
                pictures.Add("11:30 pm");
                parameters.Add(pictures);
                break;
            case "Chitrapur":
                pictures.Add("thor.jpg");
                pictures.Add("8:30 pm");
                pictures.Add("10:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("wolverine.jpg");
                pictures.Add("2:00 pm");
                pictures.Add("5:30 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("xmen_first_class.jpg");
                pictures.Add("9:00 pm");
                pictures.Add("11:30 pm");
                parameters.Add(pictures);
                break;
            case "Khari Baoli":
                pictures.Add("gijoeriseofcobra.jpg");
                pictures.Add("2:30 pm");
                pictures.Add("5:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("The-Avengers.jpg");
                pictures.Add("8:00 pm");
                pictures.Add("9:15 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("wolverine.jpg");
                pictures.Add("7:30 pm");
                pictures.Add("10:15 pm");
                parameters.Add(pictures);
                break;
            case "Lakshmi Garden":
                pictures.Add("Thor.jpg");
                pictures.Add("8:30 pm");
                pictures.Add("10:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("pointbreak.jpg");
                pictures.Add("3:00 pm");
                pictures.Add("4:15 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("ironman.jpg");
                pictures.Add("8:45 pm");
                pictures.Add("9:15 pm");
                parameters.Add(pictures);
                break;
            case "Gandhi Nagar":
                pictures.Add("Spider-Man-2.jpg");
                pictures.Add("4:30 pm");
                pictures.Add("6:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("IncredibleHulk.jpg");
                pictures.Add("7:00 pm");
                pictures.Add("9:15 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("gijoeriseofcobra.jpg");
                pictures.Add("3:45 pm");
                pictures.Add("4:15 pm");
                parameters.Add(pictures);
                break;
            case "Lake City":
                pictures.Add("The-Avengers.jpg");
                pictures.Add("9:30 pm");
                pictures.Add("9:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("xmen_first_class.jpg");
                pictures.Add("6:00 pm");
                pictures.Add("8:15 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("ironman.jpg");
                pictures.Add("8:45 pm");
                pictures.Add("10:15 pm");
                parameters.Add(pictures);
                break;
            case "Rajaji Nagar":
                pictures.Add("fantastic_four.jpg");
                pictures.Add("9:30 pm");
                pictures.Add("11:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("wolverine.jpg");
                pictures.Add("8:00 pm");
                pictures.Add("9:15 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("Thor.jpg");
                pictures.Add("6:45 pm");
                pictures.Add("10:15 pm");
                parameters.Add(pictures);
                break;
            case "Harrington Road":
                pictures.Add("The-Avengers.jpg");
                pictures.Add("10:30 pm");
                pictures.Add("10:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("xmen_first_class.jpg");
                pictures.Add("9:00 pm");
                pictures.Add("10:15 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("ironman.jpg");
                pictures.Add("8:45 pm");
                pictures.Add("11:15 pm");
                parameters.Add(pictures);
                break;
            case "Boat Club":
                pictures.Add("gijoeriseofcobra.jpg");
                pictures.Add("8:30 pm");
                pictures.Add("8:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("spider_man3.jpg");
                pictures.Add("10:00 pm");
                pictures.Add("11:15 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("IncredibleHulk.jpg");
                pictures.Add("8:45 pm");
                pictures.Add("9:15 pm");
                parameters.Add(pictures);
                break;
            case "Chetpet":
                pictures.Add("Thor.jpg");
                pictures.Add("7:30 pm");
                pictures.Add("8:45 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("fantastic_four.jpg");
                pictures.Add("5:00 pm");
                pictures.Add("6:15 pm");
                parameters.Add(pictures);
                pictures = new ArrayList();
                pictures.Add("The-Avengers.jpg");
                pictures.Add("10:45 pm");
                pictures.Add("11:15 pm");
                parameters.Add(pictures);
                break;
        }
    }
}