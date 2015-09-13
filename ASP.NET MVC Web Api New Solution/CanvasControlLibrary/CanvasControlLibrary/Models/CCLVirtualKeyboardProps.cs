using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLVirtualKeyboardProps
    {
        public class Keyboard
        {
            public class Key
            {
                public string KeyLabel { get; set; }
                public string Width { get; set; }
                public string Height { get; set; }
                public int ReferencingKeyboardIndex { get; set; }
            }
            public List<Key> Keys { get; set; }
        }

        public class KeyExtent
        {
            public int X { get; set; }
            public int Y { get; set; }
            public int Width { get; set; }
            public int Height { get; set; }
            public string KeyLabel { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public List<Keyboard> Keys { get; set; }
        public int GapBetweenButtons { get; set; }
        public int GapBetweenRows { get; set; }
        public int CurrentKeyboardIndex { get; set; }
        public List<KeyExtent> KeyExtents { get; set; }
        public int TextHeight { get; set; }
        public string TextFontString { get; set; }
        public string CustomKeys { get; set; }
        public int HasGloss { get; set; }
        public int ShiftKeyPressed { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLVirtualKeyboardProps()
        {
            Keys = new List<Keyboard>();
            KeyExtents = new List<KeyExtent>();
        }
    }
}