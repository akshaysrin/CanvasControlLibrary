using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLDatePickerProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int TextBoxAreaWindowID { get; set; }
        public int ButtonWindowID { get; set; }
        public int CalenderWindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public string TextBoxAreaTextColor { get; set; }
        public int TextBoxAreaTextHeight { get; set; }
        public string TextBoxAreaTextFontString { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }
    }
}