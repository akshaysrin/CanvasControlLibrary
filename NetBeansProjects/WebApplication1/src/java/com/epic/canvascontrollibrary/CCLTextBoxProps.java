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
    public class CCLTextBoxProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public String WaterMarkText;
        public String WaterMarkTextColor;
        public String WaterMarkTextFontString;
        public String TextColor;
        public String TextHeight;
        public String TextFontString;
        public String MaxChars;
        public String AllowedCharsRegEx;
        public String IsPassword;
        public String PasswordChar;
        public String HasBorder;
        public String BorderColor;
        public String BorderLineWidth;
        public String HasShadow;
        public String ShadowOffsetX;
        public String ShadowOffsetY;
        public String ShadowBlurValue;
        public String HasRoundedEdges;
        public String EdgeRadius;
        public String HasBgGradient;
        public String BgGradientStartColor;
        public String BgGradientEndColor;
        public String HasBgImage;
        public String BgImageUrl;
        public String HasAutoComplete;
        public List<Object> ListPossibles;
        public String DropDownPossiblesListIfThereIsInputText;
        public String LimitToListPossibles;
        public String ListPossiblesTextHeight;
        public String ListPossiblesTextFontString;
        public String CaretPosIndex;
        public String UserInputText;
        public String ShadowColor;
        public String ShowCaret;
        public String CaretColor;
        public Object Tag;
        public String CaretTime;
        public String TabStopIndex;

        CCLTextBoxProps()
        {
            ListPossibles = new ArrayList<Object>();
        }
    }
