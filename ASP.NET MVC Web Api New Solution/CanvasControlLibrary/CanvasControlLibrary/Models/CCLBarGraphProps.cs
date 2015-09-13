using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLBarGraphProps
    {
        public class DataItem
        {
            public string Label { get; set; }
            public float Value { get; set; }
            public string Color { get; set; }
        }

        public class BoundingBox
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
        public List<DataItem> Data { get; set; }
        public int MaxValue { get; set; }
        public int NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public int TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public int BarWidth { get; set; }
        public List<BoundingBox> BarLabelsWithBoundingBoxes { get; set; }
        public int H { get; set; }
        public int AxisLabelsTextHeight { get; set; }
        public string AxisLabelsTextFontString { get; set; }
        public string AxisLabelsTextColor { get; set; }
        public int MarginLeft { get; set; }
        public int GapBetweenBars { get; set; }
        public int AlreadyUnregisteredAnimation { get; set; }
        public int HasLegend { get; set; }
        public int MarginRight { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLBarGraphProps()
        {
            Data = new List<DataItem>();
            BarLabelsWithBoundingBoxes = new List<BoundingBox>();
        }
    }
}