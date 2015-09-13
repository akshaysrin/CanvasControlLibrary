using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLRadioButtonGroupProps
    {
        public class ButtonExtent
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
        public string Alignment { get; set; }
        public string GroupName { get; set; }
        public List<string> Labels { get; set; }
        public int SelectedID { get; set; }
        public string LabelTextColor { get; set; }
        public string LabelFontString { get; set; }
        public int Radius { get; set; }
        public List<ButtonExtent> ButtonExtents { get; set; }
        public int LabelTextHeight { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLRadioButtonGroupProps()
        {
            Labels = new List<string>();
            ButtonExtents = new List<ButtonExtent>();
        }
    }
}