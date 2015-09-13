using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLBoundaryFillableMapProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<List<int>> FillPoints { get; set; }
        public string ImgURL { get; set; }
        public int ImageWidth { get; set; }
        public int ImageHeight { get; set; }
        public int TabStopIndex { get; set; }

        public CCLBoundaryFillableMapProps()
        {
            FillPoints = new List<List<int>>();
        }
    }
}