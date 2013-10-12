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
    public class CCLMultiLineLabelProps
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
        public List<Object> LineBreakIndexes;
        public List<Object> MarkupTextExtents;
        public String MarkupText;
        public String TabStopIndex;

        CCLMultiLineLabelProps()
        {
            LineBreakIndexes = new ArrayList<Object>();
            MarkupTextExtents = new ArrayList<Object>();
        }
    }
