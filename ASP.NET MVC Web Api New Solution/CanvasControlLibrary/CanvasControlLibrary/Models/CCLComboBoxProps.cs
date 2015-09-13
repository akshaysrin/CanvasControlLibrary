using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLComboBoxProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int TextAreaWindowID { get; set; }
        public int ButtonWindowID { get; set; }
        public int ListAreaWindowID { get; set; }
        public int VScrollBarWindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<string> Data { get; set; }
        public int SelectedID { get; set; }
        public string TextAreaTextColor { get; set; }
        public int TextAreaTextHeight { get; set; }
        public string TextAreaFontString { get; set; }
        public string ListAreaTextColor { get; set; }
        public int ListAreaTextHeight { get; set; }
        public string ListAreaFontString { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLComboBoxProps()
        {
            Data = new List<string>();
        }
    }
}