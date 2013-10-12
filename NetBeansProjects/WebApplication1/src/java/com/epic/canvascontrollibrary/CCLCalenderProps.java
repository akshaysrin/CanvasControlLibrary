/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.epic.canvascontrollibrary;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Gilgamesh
 */
    public class CCLCalenderProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public String VisibleMonth;
        public String VisibleYear;
        public String SelectedDay;
        public String DayCellWidth;
        public String DayCellHeight;
        public String HeaderHeight;
        public String TextHeaderColor;
        public String TextHeaderHeight;
        public String TextHeaderFontString;
        public String DayDateActiveColor;
        public String DayDateActiveTextHeight;
        public String DayDateActiveTextFontString;
        public String DayDateInactiveTextColor;
        public String DayDateInactiveTextHeight;
        public String DayDateInactiveTextFontString;
        public String SelectedDayTextColor;
        public String SelectedDayTextHeight;
        public String SelectedDayTextFontString;
        public String SelectedDayHighLightColor;
        public String TodayTextColor;
        public String TodayTextHeight;
        public String TodayTextFontString;
        public String TodayHighLightColor;
        public String OnDayClickFunction;
        public String HeaderBackgroundColor;
        public String BodyBackgroundColor;
        public String MouseOverHightLightColor;
        public String MouseHoverDate;
        public List<Object> ButtonClickExtents;
        public List<Object> DateClickExtents;
        public String DayLabelTextColor;
        public String DayLabelTextHeight;
        public String DayLabelTextFontString;
        public Object Tag;
        public String TabStopIndex;

        CCLCalenderProps()
        {
            ButtonClickExtents = new ArrayList<Object>();
            DateClickExtents = new ArrayList<Object>();
        }
    }
