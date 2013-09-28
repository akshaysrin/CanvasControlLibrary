/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.epic.canvascontrollibrary;

import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 *
 * @author Gilgamesh
 */
    public class MyPage {
        public CanvasControlLibrary ccl;
        public List<Object> parameters;
        public List<Object> movieIndexes;
        public List<Object> theater;
        public List<Object> movies;

        public MyPage(){
            parameters = new ArrayList<Object>();
            movieIndexes = new ArrayList<Object>();
            theater = new ArrayList<Object>();
            movies = new ArrayList<Object>();
        }

        public void ClickMe(String canvasid, int windowid)
        {
            try {
                CCLLabelProps lp = (CCLLabelProps) ccl.getControlPropsByControlNameID("l1");
                if (ccl.CurrentSessionObj.Data.KeyValuePairs.size() == 0)
                {
                    ccl.CurrentSessionObj.Data.Add("Counter", 1);
                }
                else
                {
                    int x = Integer.parseInt(ccl.CurrentSessionObj.Data.GetValue("Counter").toString());
                    ++x;
                    String str = String.valueOf(x);
                    ccl.CurrentSessionObj.Data.SetValue("Counter", str);
                }
                lp.Text = ccl.CurrentSessionObj.Data.GetValue("Counter").toString();
                CCLImageProps i1 = (CCLImageProps) ccl.getControlPropsByControlNameID("i1");
                i1.ImageURL = "Bombay.png";
                parameters = ccl.InputParams;
            } catch(Exception ex){
                Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
            }
        }

        public void ClickMe2(String canvasid, int windowid)
        {
        }

        public void InitializeForm1(String canvasid, int windowid)
        {
            CCLComboBoxProps selectCityComboBox = (CCLComboBoxProps) ccl.getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea");
            selectCityComboBox.Data = new ArrayList<Object>();
            selectCityComboBox.Data.add("Select a city");
            selectCityComboBox.Data.add("Mumbai");
            selectCityComboBox.Data.add("Delhi");
            selectCityComboBox.Data.add("Bangalore");
            selectCityComboBox.Data.add("Chennai");
            ((CCLScrollBarProps)ccl.getControlPropsByWindowID(canvasid, selectCityComboBox.VScrollBarWindowID)).MaxItems = String.valueOf(selectCityComboBox.Data.size());
        }

        public void onSelectCityChanged(String canvasid, int windowid)
        {
            CCLComboBoxProps selectCityComboBox = (CCLComboBoxProps) ccl.getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea");
            CCLComboBoxProps selectCinemaComboBox = (CCLComboBoxProps) ccl.getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
            selectCinemaComboBox.Data = new ArrayList<Object>();
            String tmp = selectCityComboBox.Data.get(Integer.parseInt(selectCityComboBox.SelectedID)).toString();
                if("Mumbai".equals(tmp)) {
                    selectCinemaComboBox.Data.add("Select a Theater");
                    selectCinemaComboBox.Data.add("Juhu");
                    selectCinemaComboBox.Data.add("Phoenix Mills");
                    selectCinemaComboBox.Data.add("Nariman Point");
                }
                else if("Delhi".equals(tmp)) {
                    selectCinemaComboBox.Data.add("Select a Theater");
                    selectCinemaComboBox.Data.add("Chitrapur");
                    selectCinemaComboBox.Data.add("Khari Baoli");
                    selectCinemaComboBox.Data.add("Lakshmi Garden");
                    }
                else if("Bangalore".equals(tmp)) {
                    selectCinemaComboBox.Data.add("Select a Theater");
                    selectCinemaComboBox.Data.add("Gandhi Nagar");
                    selectCinemaComboBox.Data.add("Lake City");
                    selectCinemaComboBox.Data.add("Rajaji Nagar");
                    }
                else if("Chennai".equals(tmp)) {
                    selectCinemaComboBox.Data.add("Select a Theater");
                    selectCinemaComboBox.Data.add("Harrington Road");
                    selectCinemaComboBox.Data.add("Boat Club");
                    selectCinemaComboBox.Data.add("Chetpet");
                    }
                else {
                    selectCinemaComboBox.Data.add("Select a city");
                    }
            ((CCLScrollBarProps)ccl.getControlPropsByWindowID(canvasid, selectCinemaComboBox.VScrollBarWindowID)).MaxItems = String.valueOf(selectCinemaComboBox.Data.size());
        }

        public void DoPaymentForTickets(String canvasid, int windowid)
        {
            CCLButtonProps buttonProps = (CCLButtonProps) ccl.getControlPropsByWindowID(canvasid, String.valueOf(windowid));
            CCLLabelProps lp = (CCLLabelProps) ccl.getControlPropsByControlNameID((String)buttonProps.Tag);
            CCLTextBoxProps textbox = (CCLTextBoxProps) ccl.getControlPropsByControlNameID("numTicketsTextBox");
            CCLComboBoxProps selectCinemaComboBox = (CCLComboBoxProps) ccl.getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
            Pattern p = Pattern.compile("\\d+");
            Matcher m = p.matcher((String)buttonProps.Tag);
            m.find();
            m.find();
            int movieIndex = Integer.parseInt(m.group());
            String movieName = "";
            for (int i = 0; i < movieIndexes.size(); i++)
            {
                if (((ArrayList)movieIndexes.get(i)).get(0).toString().equals(selectCinemaComboBox.Data.get(Integer.parseInt(selectCinemaComboBox.SelectedID)).toString()))
                {
                    movieName = ((ArrayList)((ArrayList)movieIndexes.get(i)).get(1)).get(movieIndex).toString();
                }
            }
            parameters.add("The payment was successful.  You have " + textbox.UserInputText + " tickets to see " + movieName + " at " + selectCinemaComboBox.Data.get(Integer.parseInt(selectCinemaComboBox.SelectedID)).toString() +
                " showing at time " + lp.Text + ".");
        }

        public void onSelectCinemaChanged(String canvasid, int windowid)
        {
            CCLComboBoxProps selectCinemaComboBox = (CCLComboBoxProps) ccl.getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
            List<Object> movies;
            List<Object> timings;
            String tmp = selectCinemaComboBox.Data.get(Integer.parseInt(selectCinemaComboBox.SelectedID)).toString();
                if("Phoenix Mills".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("fantastic_four.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("ferrisbuellersdayoff.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("IncredibleHulk.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Juhu".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("ironman.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("pointbreak.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("Spider-Man-2.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Nariman Point".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("spider-man4.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("spider_man3.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("The-Avengers.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Chitrapur".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("thor.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("wolverine.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("xmen_first_class.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Khari Baoli".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("gijoeriseofcobra.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("The-Avengers.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("wolverine.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Lakshmi Garden".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("Thor.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("pointbreak.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("ironman.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Gandhi Nagar".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("Spider-Man-2.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("IncredibleHulk.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("gijoeriseofcobra.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Lake City".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("The-Avengers.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("xmen_first_class.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("ironman.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Rajaji Nagar".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("fantastic_four.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("wolverine.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("Thor.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Harrington Road".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("The-Avengers.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("xmen_first_class.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("ironman.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Boat Club".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("gijoeriseofcobra.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("spider_man3.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("IncredibleHulk.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
                else if("Chetpet".equals(tmp)) {
                    movies = new ArrayList<Object>();
                    timings = new ArrayList<Object>();
                    timings.add("Thor.jpg");
                    timings.add("1:30 pm");
                    timings.add("5:45 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("fantastic_four.jpg");
                    timings.add("9:00 pm");
                    timings.add("11:30 pm");
                    movies.add(timings);
                    timings = new ArrayList<Object>();
                    timings.add("The-Avengers.jpg");
                    timings.add("6:00 pm");
                    timings.add("8:30 pm");
                    movies.add(timings);
                    parameters = movies;
                    }
            ((CCLScrollBarProps)ccl.getControlPropsByWindowID(canvasid, selectCinemaComboBox.VScrollBarWindowID)).MaxItems = String.valueOf(selectCinemaComboBox.Data.size());
        }
    }
