using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLDoughnutChartProps
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
        public string TitleColor { get; set; }
        public int TitleTextHeight { get; set; }
        public string TitleFontString { get; set; }
        public int InnerRadius { get; set; }
        public int CurrentRadius { get; set; }
        public int TotalValue { get; set; }
        public int MarginSides { get; set; }
        public string LabelColor { get; set; }
        public int LabelHeight { get; set; }
        public string LabelFontString { get; set; }
        public int LegendWidth { get; set; }
        public int LegendHeight { get; set; }
        public string LegendFontString { get; set; }
        public string AnimationCompleted { get; set; }
        public int DeltaI { get; set; }
        public int DeltaX { get; set; }
        public int DeltaY { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLDoughnutChartProps()
        {
            Data = new List<DataItem>();
        }
    }
}