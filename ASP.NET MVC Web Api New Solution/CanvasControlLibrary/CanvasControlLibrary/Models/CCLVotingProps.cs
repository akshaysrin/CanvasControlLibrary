using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLVotingProps
    {
        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public int Height { get; set; }
        public int NumStars { get; set; }
        public int MaxValueOfAllStars { get; set; }
        public int StarColorRed { get; set; }
        public int StarColorGreen { get; set; }
        public int StarColorBlue { get; set; }
        public float StarColorAlpha { get; set; }
        public int SpacingInPixelsBetweenStars { get; set; }
        public int HasPartialStars { get; set; }
        public int Editable { get; set; }
        public int HasValueLabel { get; set; }
        public int LabelXPos { get; set; }
        public int LabelYPos { get; set; }
        public int StarsStartingPosOffsetWhenLabel { get; set; }
        public int StarsYPosWhenLabel { get; set; }
        public float InitialValue { get; set; }
        public int OutlineThicknessOfEmptyStar { get; set; }
        public int StarsOrientation { get; set; }
        public int FillOrientation { get; set; }
        public int IsCustomPattern { get; set; }
        public string OutLineImgURL { get; set; }
        public List<int> CustomFillPoint { get; set; }
        public int ImgWidth { get; set; }
        public int ImgHeight { get; set; }
        public int StarSizeInPixels { get; set; }
        public int HasMouseOverLabel { get; set; }
        public int StarOutlineBgColorRed { get; set; }
        public int StarOutlineBgColorGreen { get; set; }
        public int StarOutlineBgColorBlue { get; set; }
        public float StarOutlineBgColorAlpha { get; set; }
        public string LabelTextColor { get; set; }
        public string LabelTextFontString { get; set; }
        public int LabelTextHeight { get; set; }
        public int RoundDisplayedValueToNumOfDecimals { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLVotingProps()
        {
            CustomFillPoint = new List<int>();
        }
    }
}