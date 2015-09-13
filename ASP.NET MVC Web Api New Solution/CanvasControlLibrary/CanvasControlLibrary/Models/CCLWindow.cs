using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLWindow
    {
        public int WindowCount { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public int Depth { get; set; }
        public string CanvasID { get; set; }
        public int ParentWindowID { get; set; }
        public List<int> ChildWindowIDs { get; set; }
        public string ControlType { get; set; }
        public string ControlNameID { get; set; }
        public int MultiWindowControlsMainWindowId { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLWindow()
        {
            ChildWindowIDs = new List<int>();
        }
    }
}