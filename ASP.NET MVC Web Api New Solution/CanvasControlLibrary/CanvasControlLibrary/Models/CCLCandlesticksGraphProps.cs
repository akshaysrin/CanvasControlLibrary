using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLCandlesticksGraphProps
    {
        public class XMarkLabel
        {
            public int Value { get; set; }
            public string Label { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<List<int>> Data { get; set; }
        public List<XMarkLabel> XMarksLabelData { get; set; }
        public int XMarksWidth { get; set; }
        public int YMaxValue { get; set; }
        public int NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleColor { get; set; }
        public int TitleHeight { get; set; }
        public string TitleFontString { get; set; }
        public string CandleBodyWidth { get; set; }
        public string CandleBodyColor { get; set; }
        public string CandleLineColor { get; set; }
        public int MarginLeft { get; set; }
        public string AxisLabelsColor { get; set; }
        public int AxisLabelsHeight { get; set; }
        public string AxisLabelsFontString { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLCandlesticksGraphProps()
        {
            Data = new List<List<int>>();
            XMarksLabelData = new List<XMarkLabel>();
        }
    }
}