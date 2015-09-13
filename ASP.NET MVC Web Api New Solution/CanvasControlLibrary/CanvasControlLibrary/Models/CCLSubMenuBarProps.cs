using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLSubMenuBarProps
    {
        public class MenuItem
        {
            public string Name { get; set; }
            public string FontColor { get; set; }
            public int FontHeight { get; set; }
            public string FontName { get; set; }
            public int HasSubMenu { get; set; }
            public string Function { get; set; }
            public List<MenuItem> MenuItems { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<MenuItem> Data { get; set; }
        public int ParentMenuWindowID { get; set; }
        public int ParentIndexInParentMenu { get; set; }
        public List<int> ChildMenuWindowIDs { get; set; }
        public string DropDownColorStart { get; set; }
        public string DropDownColorEnd { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLSubMenuBarProps()
        {
            Data = new List<MenuItem>();
            ChildMenuWindowIDs = new List<int>();
        }
    }
}