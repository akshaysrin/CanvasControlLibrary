using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLPieChartProps
    {
        public class DataItem
        {
            public string Label { get; set; }
            public float Value { get; set; }
            public string Color { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<DataItem> Data { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public int TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public int CurrentRadius { get; set; }
        public int TotalValue { get; set; }
        public string LabelTextColor { get; set; }
        public int LabelTextHeight { get; set; }
        public string LabelTextFontString { get; set; }
        public int AlreadyUnregisteredAnimation { get; set; }
        public int DeltaI { get; set; }
        public int DeltaX { get; set; }
        public int DeltaY { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLPieChartProps()
        {
            Data = new List<DataItem>();
        }
    }
}