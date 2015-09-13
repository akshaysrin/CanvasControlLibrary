using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLGaugeChartProps
    {
        public class GaugeData
        {
            public float MinimumValue { get; set; }
            public float MaximumValue { get; set; }
            public Range First { get; set; }
            public Range Second { get; set; }
            public Range Third { get; set; }
            public int NumberOfMajorDivisions { get; set; }
            public int NumberOfMinorDivisions { get; set; }
            public float Value { get; set; }
        }

        public class Range
        {
            public float StartValue { get; set; }
            public float EndValue { get; set; }
            public string Color { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public GaugeData Data { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public int TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public int H { get; set; }
        public int CenterX { get; set; }
        public int CenterY { get; set; }
        public int GaugeRadius { get; set; }
        public string GaugeLabelTextColor { get; set; }
        public int GaugeLabelTextHeight { get; set; }
        public string GaugeLabelTextFontString { get; set; }
        public int AlreadyUnregisteredAnimation { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }
    }
}