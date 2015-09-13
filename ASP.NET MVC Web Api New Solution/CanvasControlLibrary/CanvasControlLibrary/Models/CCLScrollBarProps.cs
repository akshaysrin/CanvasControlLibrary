using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLScrollBarProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Len { get; set; }
        public int SelectedID { get; set; }
        public int MaxItems { get; set; }
        public string Alignment { get; set; }
        public int MouseDownState { get; set; }
        public int OwnedByWindowID { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }
    }
}