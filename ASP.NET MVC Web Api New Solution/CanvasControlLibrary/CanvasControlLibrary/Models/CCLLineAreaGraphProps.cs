using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLLineAreaGraphProps
    {
        public class LineAreaGraphData
        {
            public class DataPoint
            {
                public object XValue { get; set; }
                public List<float> YValues { get; set; }
                public DataPoint()
                {
                    YValues = new List<float>();
                }
            }
            public List<DataPoint> DataPoints { get; set; }
            public List<string> Colors { get; set; }
            public LineAreaGraphData()
            {
                DataPoints = new List<DataPoint>();
                Colors = new List<string>();
            }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public LineAreaGraphData Data { get; set; }
        public int XMaxValue { get; set; }
        public int YMaxValue { get; set; }
        public int NumMarksX { get; set; }
        public int NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public int TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public string AxisLabelsColor { get; set; }
        public int AxisLabelsHeight { get; set; }
        public string AxisLabelsFontString { get; set; }
        public int H { get; set; }
        public int MarginLeft { get; set; }
        public int AlreadyUnregisteredAnimation { get; set; }
        public int IsLabledOnXAxis { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }
    }
}