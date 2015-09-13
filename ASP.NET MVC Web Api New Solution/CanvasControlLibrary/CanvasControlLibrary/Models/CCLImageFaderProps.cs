using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLImageFaderProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<string> ImageURLs { get; set; }
        public int FadeStartValue { get; set; }
        public int FadeEndValue { get; set; }
        public int FadeStepValue { get; set; }
        public int HoldForTicks { get; set; }
        public int HoldCountDown { get; set; }
        public int CurrentImageIndex { get; set; }
        public float CurrentGlobalAlphaValue { get; set; }
        public int OverlayImages { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLImageFaderProps()
        {
            ImageURLs = new List<string>();
        }
    }
}