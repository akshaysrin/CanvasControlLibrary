using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLPanelProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public int ExpandedWidth { get; set; }
        public int ExpandedHeight { get; set; }
        public int CollapsedWidth { get; set; }
        public int CollapsedHeight { get; set; }
        public int IsCollapsable { get; set; }
        public int HasBorder { get; set; }
        public string BorderColor { get; set; }
        public int HasBackgroundGradient { get; set; }
        public string BackgroundStartColor { get; set; }
        public string BackgroundEndColor { get; set; }
        public int HeaderHeight { get; set; }
        public string HeaderBackgroundStartColor { get; set; }
        public string HeaderBackgroundEndColor { get; set; }
        public string ExpandCollapseButtonColor { get; set; }
        public int IsExpanded { get; set; }
        public int ExpandCollapseButtonRadius { get; set; }
        public string PanelLabel { get; set; }
        public string PanelLabelTextColor { get; set; }
        public int PanelLabelTextHeight { get; set; }
        public string PanelLabelTextFontString { get; set; }
        public int OriginalWidth { get; set; }
        public int OriginalHeight { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }
    }
}