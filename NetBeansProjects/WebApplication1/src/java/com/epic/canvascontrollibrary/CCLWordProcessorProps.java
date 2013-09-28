/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.epic.canvascontrollibrary;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Gilgamesh
 */
    public class CCLWordProcessorProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public String HasMarkup;
        public String Text;
        public String TextColor;
        public String TextHeight;
        public String TextFontString;
        public String LineSpacingInPixels;
        public String WordSensitive;
        public String WaterMarkText;
        public String WaterMarkTextColor;
        public String WaterMarkTextHeight;
        public String WaterMarkTextFontString;
        public String MaxChars;
        public String HasShadow;
        public String ShadowColor;
        public String ShadowOffsetX;
        public String ShadowOffsetY;
        public String HasRoundedEdges;
        public String EdgeRadius;
        public String HasBgGradient;
        public String BgGradientStartColor;
        public String BgGradientEndColor;
        public String HasBgImage;
        public String BgImageUrl;
        public String Margin;
        public String HasBorder;
        public String BorderColor;
        public String BorderLineWidth;
        public String UserInputText;
        public String VScrollBarWindowID;
        public String CaretPosIndex;
        public String ShowCaret;
        public String CaretColor;
        public List<Object> LineBreakIndexes;
        public String SelectedTextStartIndex;
        public String SelectedTextEndIndex;
        public String MouseDown;
        public String WasSelecting;
        public String AllowedCharsRegEx;
        public String CaretTime;

        CCLWordProcessorProps()
        {
            LineBreakIndexes = new ArrayList<Object>();
        }
    }
