using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLRadarGraphProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<float> Data { get; set; }
        public int MaxValue { get; set; }
        public string ColorStr { get; set; }
        public int NumMarks { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public int TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public int H { get; set; }
        public string MarkLabelTextColor { get; set; }
        public int MarkLabelTextHeight { get; set; }
        public string MarkLabelTextFontString { get; set; }
        public int AlreadyUnregisteredAnimation { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLRadarGraphProps()
        {
            Data = new List<float>();
        }
    }
}