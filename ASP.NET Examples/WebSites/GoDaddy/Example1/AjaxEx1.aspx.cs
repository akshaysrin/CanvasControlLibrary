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

public partial class AjaxEx1 : System.Web.UI.Page
{
    CanvasControlLibrary ccl;
    List<object> parameters = new List<object>();
    ArrayList movieIndexes = new ArrayList();

    protected void Page_Load(object sender, EventArgs e)
    {
        movieIndexes = new ArrayList { new ArrayList { "Phoenix Mills", new ArrayList { "Fantastic Four", "Ferris Bueller's Day Off", "Incredible Hulk" } }, 
            new ArrayList { "Juhu", new ArrayList { "Iron Man", "Point Break", "Spider Man 2" } }, new ArrayList {"Nariman Point", new ArrayList{"Spider Man 4", "Spider Man 3", "The Avengers"}},
            new ArrayList{"Chitrapur", new  ArrayList{"Thor", "Wolverine", "X-Men First Class"}}, new ArrayList{"Khari Baoli", new ArrayList{"GI Joe Rise of Cobra", "The Avengers", "Wolverine"}},
        new ArrayList{"Lakshmi Garden", new ArrayList{"Thor", "Point Break", "Iron Man"}}, new ArrayList{"Gandhi Nagar", new ArrayList{"Spider Man 2", "Incredible Hulk", "GI Joe Rise of Cobra"}},
        new ArrayList{"Lake City", new ArrayList{"The Avengers", "X-Men First Class", "Iron Man"}}, new ArrayList{"Rajaji Nagar", new ArrayList{"Fantastic Four", "Wolverine", "Thor"}},
        new ArrayList{"Harrington Road", new ArrayList{"The Avengers", "X-Men First Class", "Iron Man"}}, new ArrayList{"Boat Club", new ArrayList{"GI Joe Rise of Cobra", "Spider Man 3", "Incredible Hulk"}},
        new ArrayList{"Chetpet", new ArrayList{"Thor", "Fantastic Four", "The Avengers"}}};
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
        if (Convert.ToInt32(ccl.CurrentSessionObj.Data.GetValue("Count")) == 0)
        {
            ccl.CurrentSessionObj.Data.Add("Counter", 1);
        }
        else
        {
            ccl.CurrentSessionObj.Data.SetValue("Counter", (Convert.ToInt32(ccl.CurrentSessionObj.Data.GetValue("Counter")) + 1).ToString());
        }
        lp.Text = ccl.CurrentSessionObj.Data.GetValue("Counter").ToString();
        CanvasControlLibrary.CCLImageProps i1 = ccl.getControlPropsByControlNameID("i1") as CanvasControlLibrary.CCLImageProps;
        i1.ImageURL = "Bombay.png";
        parameters.Add(ccl.InputParams);
    }

    public void ClickMe2(string canvasid, int windowid)
    {
    }

    public void InitializeForm1(string canvasid, int windowid)
    {
        CanvasControlLibrary.CCLComboBoxProps selectCityComboBox = ccl.getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        selectCityComboBox.Data = new List<object>();
        selectCityComboBox.Data.Add("Select a city");
        selectCityComboBox.Data.Add("Mumbai");
        selectCityComboBox.Data.Add("Delhi");
        selectCityComboBox.Data.Add("Bangalore");
        selectCityComboBox.Data.Add("Chennai");
        ((CanvasControlLibrary.CCLScrollBarProps)ccl.getControlPropsByWindowID(canvasid, selectCityComboBox.VScrollBarWindowID)).MaxItems = selectCityComboBox.Data.Count.ToString();
    }

    public void onSelectCityChanged(string canvasid, int windowid)
    {
        CanvasControlLibrary.CCLComboBoxProps selectCityComboBox = ccl.getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        CanvasControlLibrary.CCLComboBoxProps selectCinemaComboBox = ccl.getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        selectCinemaComboBox.Data = new List<object>();
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
        ((CanvasControlLibrary.CCLScrollBarProps)ccl.getControlPropsByWindowID(canvasid, selectCinemaComboBox.VScrollBarWindowID)).MaxItems = selectCinemaComboBox.Data.Count.ToString();
    }

    public void DoPaymentForTickets(string canvasid, int windowid)
    {
        CanvasControlLibrary.CCLButtonProps buttonProps = ccl.getControlPropsByWindowID(canvasid, windowid.ToString()) as CanvasControlLibrary.CCLButtonProps;
        CanvasControlLibrary.CCLLabelProps lp = ccl.getControlPropsByControlNameID((string)buttonProps.Tag) as CanvasControlLibrary.CCLLabelProps;
        CanvasControlLibrary.CCLTextBoxProps textbox = ccl.getControlPropsByControlNameID("numTicketsTextBox") as CanvasControlLibrary.CCLTextBoxProps;
        CanvasControlLibrary.CCLComboBoxProps selectCinemaComboBox = ccl.getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        Regex regex = new System.Text.RegularExpressions.Regex("MovieTimeLabel[0-9]+Poster(?<PosterIndex>[0-9]+)");
        Match m = regex.Match((string)buttonProps.Tag);
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
            " showing at time " + lp.Text + ".");
    }

    public void onSelectCinemaChanged(string canvasid, int windowid)
    {
        CanvasControlLibrary.CCLComboBoxProps selectCinemaComboBox = ccl.getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea") as CanvasControlLibrary.CCLComboBoxProps;
        switch (selectCinemaComboBox.Data[Convert.ToInt32(selectCinemaComboBox.SelectedID)].ToString())
        {
            case "Phoenix Mills":
                parameters = new List<object> { new List<object> { "fantastic_four.jpg", "1:30 pm", "5:45 pm" }, 
                    new List<object> { "ferrisbuellersdayoff.jpg", "9:00 pm", "11:30 pm" },
                    new List<object> { "IncredibleHulk.jpg", "6:00 pm", "8:30 pm" } };
                break;
            case "Juhu":
                parameters = new List<object> { new List<object> { "ironman.jpg", "4:30 pm", "9:45 pm" }, 
                    new List<object> { "pointbreak.jpg", "6:00 pm", "7:30 pm" }, 
                    new List<object> { "Spider-Man-2.jpg", "5:00 pm", "10:30 pm" } };
                break;
            case "Nariman Point":
                parameters = new List<object> { new List<object> { "spider-man4.jpg", "7:30 pm", "8:45 pm" }, 
                    new List<object> { "spider_man3.jpg", "2:00 pm", "5:30 pm" }, 
                    new List<object> { "The-Avengers.jpg", "9:00 pm", "9:30 pm", "10:30 pm", "11:30 pm" } };
                break;
            case "Chitrapur":
                parameters = new List<object> { new List<object> { "thor.jpg", "8:30 pm", "10:45 pm" }, 
                    new List<object> { "wolverine.jpg", "2:00 pm", "5:30 pm" }, 
                    new List<object> { "xmen_first_class.jpg", "9:00 pm", "11:30 pm" } };
                break;
            case "Khari Baoli":
                parameters = new List<object> { new List<object> { "gijoeriseofcobra.jpg", "2:30 pm", "5:45 pm" },
                    new List<object> { "The-Avengers.jpg", "8:00 pm", "9:15 pm" },
                    new List<object> { "wolverine.jpg", "7:30 pm", "10:15 pm" } };
                break;
            case "Lakshmi Garden":
                parameters = new List<object> { new List<object> { "Thor.jpg", "8:30 pm", "10:45 pm" }, 
                    new List<object> { "pointbreak.jpg", "3:00 pm", "4:15 pm" }, 
                    new List<object> { "ironman.jpg", "8:45 pm", "9:15 pm" } };
                break;
            case "Gandhi Nagar":
                parameters = new List<object> { new List<object> { "Spider-Man-2.jpg", "4:30 pm", "6:45 pm" }, 
                    new List<object> { "IncredibleHulk.jpg", "7:00 pm", "9:15 pm" }, 
                    new List<object> { "gijoeriseofcobra.jpg", "3:45 pm", "4:15 pm" } };
                break;
            case "Lake City":
                parameters = new List<object> { new List<object> { "The-Avengers.jpg", "9:30 pm", "9:45 pm" }, 
                    new List<object> { "xmen_first_class.jpg", "6:00 pm", "8:15 pm" },
                    new List<object> { "ironman.jpg", "8:45 pm", "10:15 pm" } };
                break;
            case "Rajaji Nagar":
                parameters = new List<object> { new List<object> { "fantastic_four.jpg", "9:30 pm", "11:45 pm" }, 
                    new List<object> { "wolverine.jpg", "8:00 pm", "9:15 pm" }, 
                    new List<object> { "Thor.jpg", "6:45 pm", "10:15 pm" } };
                break;
            case "Harrington Road":
                parameters = new List<object> { new List<object> { "The-Avengers.jpg", "10:30 pm", "10:45 pm" }, 
                    new List<object> { "xmen_first_class.jpg", "9:00 pm", "10:15 pm" }, 
                    new List<object> { "ironman.jpg", "8:45 pm", "11:15 pm" } };
                break;
            case "Boat Club":
                parameters = new List<object> { new List<object> { "gijoeriseofcobra.jpg", "8:30 pm", "8:45 pm" }, 
                    new List<object> { "spider_man3.jpg", "10:00 pm", "11:15 pm" }, 
                    new List<object> { "IncredibleHulk.jpg", "8:45 pm", "9:15 pm" } };
                break;
            case "Chetpet":
                parameters = new List<object> { new List<object> { "Thor.jpg", "7:30 pm", "8:45 pm" }, 
                    new List<object> { "fantastic_four.jpg", "5:00 pm", "6:15 pm" }, 
                    new List<object> { "The-Avengers.jpg", "10:45 pm", "11:15 pm" } };
                break;
        }
        ((CanvasControlLibrary.CCLScrollBarProps)ccl.getControlPropsByWindowID(canvasid, selectCinemaComboBox.VScrollBarWindowID)).MaxItems = selectCinemaComboBox.Data.Count.ToString();
    }
}