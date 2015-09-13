using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLStackedBarGraphProps
    {
        public class DataItem
        {
            public class Item
            {
                public float Value { get; set; }
                public string Color { get; set; }
            }
            public string Label { get; set; }
            public Item Item1 { get; set; }
            public Item Item2 { get; set; }
            public Item Item3 { get; set; }
        }

        public class LabelBoundingBox
        {
            public string Label { get; set; }
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
        public List<DataItem> Data { get; set; }
        public int MaxValue { get; set; }
        public int NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleColor { get; set; }
        public int TitleHeight { get; set; }
        public string TitleFontString { get; set; }
        public int BarWidth { get; set; }
        public int GapBetweenBarSets { get; set; }
        public int H { get; set; }
        public string AxisLabelsColor { get; set; }
        public int AxisLabelsHeight { get; set; }
        public string AxisLabelsFontString { get; set; }
        public List<LabelBoundingBox> BarLabelsWithBoundingBoxes { get; set; }
        public int AlreadyUnregisteredAnimation { get; set; }
        public int MarginLeft { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLStackedBarGraphProps()
        {
            Data = new List<DataItem>();
            BarLabelsWithBoundingBoxes = new List<LabelBoundingBox>();
        }
    }
}