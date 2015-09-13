using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLImageSliderProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<string> ImageURLs { get; set; }
        public int Direction { get; set; }
        public int StepIncrement { get; set; }
        public string HoldForTicks { get; set; }
        public int CurrentImageIndex { get; set; }
        public int Slide { get; set; }
        public int HoldCountDown { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLImageSliderProps()
        {
            ImageURLs = new List<string>();
        }
    }
}