using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLImageMapProps
    {
        public class PinXY
        {
            public int X { get; set; }
            public int Y { get; set; }
            public int Radius { get; set; }
            public string Color { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public string ImgUrl { get; set; }
        public List<PinXY> PinXYs { get; set; }
        public int HasZoom { get; set; }
        public int ImageTopLeftXOffset { get; set; }
        public int ImageTopLeftYOffset { get; set; }
        public int MovingMap { get; set; }
        public int LastMovingX { get; set; }
        public int LastMovingY { get; set; }
        public int Scale { get; set; }
        public int ScaleIncrementFactor { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLImageMapProps()
        {
            PinXYs = new List<PinXY>();
        }
    }
}