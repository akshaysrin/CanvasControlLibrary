using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLLineGraphProps
    {
        public class DataItem
        {
            public class DataPoint
            {
                public object XValue { get; set; }
                public float YValue { get; set; }
            }
            public List<DataPoint> DataPoints { get; set; }
            public string Color { get; set; }
            public DataItem()
            {
                DataPoints = new List<DataPoint>();
            }
        }

        public class LineXY
        {
            public int X { get; set; }
            public int Y { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<DataItem> Data { get; set; }
        public int XMaxValue { get; set; }
        public int NumMarksX { get; set; }
        public int YMaxValue { get; set; }
        public int NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public int TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public string AxisLabelsTextColor { get; set; }
        public int AxisLabelsTextHeight { get; set; }
        public string AxisLabelsTextFontString { get; set; }
        public int H { get; set; }
        public int HMax { get; set; }
        public List<List<LineXY>> LineXYs { get; set; }
        public int AlreadyUnregisteredAnimation { get; set; }
        public int MarginLeft { get; set; }
        public int IsLabeledXValues { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLLineGraphProps()
        {
            Data = new List<DataItem>();
            LineXYs = new List<List<LineXY>>();
        }
    }
}