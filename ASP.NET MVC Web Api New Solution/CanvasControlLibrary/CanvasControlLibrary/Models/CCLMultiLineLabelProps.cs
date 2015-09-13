using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLMultiLineLabelProps
    {
        public class MarkupTextExtent
        {
            public int OldMarkupTextLength { get; set; }
            public int NewMarkupTextLength { get; set; }
            public string FontColor { get; set; }
            public string FontName { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public int HasMarkup { get; set; }
        public string Text { get; set; }
        public string TextColor { get; set; }
        public int TextHeight { get; set; }
        public string TextFontString { get; set; }
        public int LineSpacingInPixels { get; set; }
        public List<int> LineBreakIndexes { get; set; }
        public List<MarkupTextExtent> MarkupTextExtents { get; set; }
        public string MarkupText { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLMultiLineLabelProps()
        {
            LineBreakIndexes = new List<int>();
            MarkupTextExtents = new List<MarkupTextExtent>();
        }
    }
}