using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLLabelProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public string Text { get; set; }
        public int TextHeight { get; set; }
        public string TextFontString { get; set; }
        public string TextColor { get; set; }
        public int IsHyperlink { get; set; }
        public string URL { get; set; }
        public int NoBrowserHistory { get; set; }
        public int IsNewBrowserWindow { get; set; }
        public string NameOfNewBrowserWindow { get; set; }
        public int WidthOfNewBrowserWindow { get; set; }
        public int HeightOfNewBrowserWindow { get; set; }
        public int NewBrowserWindowIsResizable { get; set; }
        public int NewBrowserWindowHasScrollBars { get; set; }
        public int NewBrowserWindowHasToolbar { get; set; }
        public int NewBrowserWindowHasLocationOrURLOrAddressBox { get; set; }
        public int NewBrowserWindowHasDirectoriesOrExtraButtons { get; set; }
        public int NewBrowserWindowHasStatusBar { get; set; }
        public int NewBrowserWindowHasMenuBar { get; set; }
        public int NewBrowserWindowCopyHistory { get; set; }
        public string BackGroundColor { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }
    }
}