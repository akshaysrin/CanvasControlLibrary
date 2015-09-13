using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLSimpleXMLViewerProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public string XML { get; set; }
        public string TextColor { get; set; }
        public string TextFontString { get; set; }
        public int TextHeight { get; set; }
        public int HasIcons { get; set; }
        public int IconWidth { get; set; }
        public int IconHeight { get; set; }
        public string ImgURLNode { get; set; }
        public string ImgURLValue { get; set; }
        public string ImgURLAttribute { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }
    }
}