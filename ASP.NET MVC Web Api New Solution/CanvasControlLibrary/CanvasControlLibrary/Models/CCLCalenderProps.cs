using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLCalenderProps
    {
        public class DateClickExtent
        {
            public int X { get; set; }
            public int Y { get; set; }
            public DateTime Date { get; set; }
        }

        public class ButtonClickExtent
        {
            public int X { get; set; }
            public int Y { get; set; }
            public int Width { get; set; }
            public int Height { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public string VisibleMonth { get; set; }
        public string VisibleYear { get; set; }
        public string SelectedDay { get; set; }
        public int DayCellWidth { get; set; }
        public int DayCellHeight { get; set; }
        public int HeaderHeight { get; set; }
        public string TextHeaderColor { get; set; }
        public int TextHeaderHeight { get; set; }
        public string TextHeaderFontString { get; set; }
        public string DayDateActiveColor { get; set; }
        public int DayDateActiveTextHeight { get; set; }
        public string DayDateActiveTextFontString { get; set; }
        public string DayDateInactiveTextColor { get; set; }
        public int DayDateInactiveTextHeight { get; set; }
        public string DayDateInactiveTextFontString { get; set; }
        public string SelectedDayTextColor { get; set; }
        public int SelectedDayTextHeight { get; set; }
        public string SelectedDayTextFontString { get; set; }
        public string SelectedDayHighLightColor { get; set; }
        public string TodayTextColor { get; set; }
        public int TodayTextHeight { get; set; }
        public string TodayTextFontString { get; set; }
        public string TodayHighLightColor { get; set; }
        public string HeaderBackgroundColor { get; set; }
        public string BodyBackgroundColor { get; set; }
        public string MouseOverHightLightColor { get; set; }
        public string MouseHoverDate { get; set; }
        public List<ButtonClickExtent> ButtonClickExtents { get; set; }
        public List<DateClickExtent> DateClickExtents { get; set; }
        public string DayLabelTextColor { get; set; }
        public int DayLabelTextHeight { get; set; }
        public string DayLabelTextFontString { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLCalenderProps()
        {
            ButtonClickExtents = new List<ButtonClickExtent>();
            DateClickExtents = new List<DateClickExtent>();
        }
    }
}