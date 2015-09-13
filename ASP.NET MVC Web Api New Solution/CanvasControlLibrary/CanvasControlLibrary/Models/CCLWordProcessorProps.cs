using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLWordProcessorProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public int HasMarkup { get; set; }
        public string Text { get; set; }
        public string TextColor { get; set; }
        public int TextHeight { get; set; }
        public string TextFontString { get; set; }
        public int LineSpacingInPixels { get; set; }
        public int WordSensitive { get; set; }
        public string WaterMarkText { get; set; }
        public string WaterMarkTextColor { get; set; }
        public int WaterMarkTextHeight { get; set; }
        public string WaterMarkTextFontString { get; set; }
        public int MaxChars { get; set; }
        public int HasShadow { get; set; }
        public string ShadowColor { get; set; }
        public int ShadowOffsetX { get; set; }
        public int ShadowOffsetY { get; set; }
        public int HasRoundedEdges { get; set; }
        public int EdgeRadius { get; set; }
        public int HasBgGradient { get; set; }
        public string BgGradientStartColor { get; set; }
        public string BgGradientEndColor { get; set; }
        public int HasBgImage { get; set; }
        public string BgImageUrl { get; set; }
        public int Margin { get; set; }
        public int HasBorder { get; set; }
        public string BorderColor { get; set; }
        public int BorderLineWidth { get; set; }
        public string UserInputText { get; set; }
        public int VScrollBarWindowID { get; set; }
        public int CaretPosIndex { get; set; }
        public int ShowCaret { get; set; }
        public string CaretColor { get; set; }
        public List<int> LineBreakIndexes { get; set; }
        public int SelectedTextStartIndex { get; set; }
        public int SelectedTextEndIndex { get; set; }
        public int MouseDown { get; set; }
        public int WasSelecting { get; set; }
        public string AllowedCharsRegEx { get; set; }
        public int CaretTime { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLWordProcessorProps()
        {
            LineBreakIndexes = new List<int>();
        }
    }
}