using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLTextBoxProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public string WaterMarkText { get; set; }
        public string WaterMarkTextColor { get; set; }
        public string WaterMarkTextFontString { get; set; }
        public string TextColor { get; set; }
        public int TextHeight { get; set; }
        public string TextFontString { get; set; }
        public int MaxChars { get; set; }
        public string AllowedCharsRegEx { get; set; }
        public int IsPassword { get; set; }
        public string PasswordChar { get; set; }
        public int HasBorder { get; set; }
        public string BorderColor { get; set; }
        public int BorderLineWidth { get; set; }
        public int HasShadow { get; set; }
        public int ShadowOffsetX { get; set; }
        public int ShadowOffsetY { get; set; }
        public int ShadowBlurValue { get; set; }
        public int HasRoundedEdges { get; set; }
        public int EdgeRadius { get; set; }
        public int HasBgGradient { get; set; }
        public string BgGradientStartColor { get; set; }
        public string BgGradientEndColor { get; set; }
        public int HasBgImage { get; set; }
        public string BgImageUrl { get; set; }
        public int HasAutoComplete { get; set; }
        public List<string> ListPossibles { get; set; }
        public string DropDownPossiblesListIfThereIsInputText { get; set; }
        public int LimitToListPossibles { get; set; }
        public int ListPossiblesTextHeight { get; set; }
        public string ListPossiblesTextFontString { get; set; }
        public int CaretPosIndex { get; set; }
        public string UserInputText { get; set; }
        public string ShadowColor { get; set; }
        public int ShowCaret { get; set; }
        public string CaretColor { get; set; }
        public string CaretTime { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLTextBoxProps()
        {
            ListPossibles = new List<string>();
        }
    }
}