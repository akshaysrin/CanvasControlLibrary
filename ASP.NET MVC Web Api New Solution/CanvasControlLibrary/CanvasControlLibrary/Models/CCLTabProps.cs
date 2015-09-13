using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLTabProps
    {
        public class TabLabelHitArea
        {
            public int XStart { get; set; }
            public int XEnd { get; set; }
            public int YStart { get; set; }
            public int YEnd { get; set; }
            public int PanelWindowID { get; set; }
            public int TabID { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<string> TabLabels { get; set; }
        public string TabLabelColor { get; set; }
        public int TabLabelHeight { get; set; }
        public string TabLabelFontString { get; set; }
        public List<int> PanelWindowIDs { get; set; }
        public int SelectedTabID { get; set; }
        public string TabLabelGradientStartColor { get; set; }
        public string TabLabelGradientEndColor { get; set; }
        public List<TabLabelHitArea> TabLabelHitAreas { get; set; }
        public int GapBetweenTabs { get; set; }
        public string SelectedTabBorderColor { get; set; }
        public int SelectedTabBorderLineWidth { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLTabProps()
        {
            TabLabels = new List<string>();
            PanelWindowIDs = new List<int>();
            TabLabelHitAreas = new List<TabLabelHitArea>();
        }
    }
}