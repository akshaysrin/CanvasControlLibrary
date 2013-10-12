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
    public class CCLRadarGraphProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public String MaxValue;
        public String ColorStr;
        public String NumMarks;
        public String Title;
        public String TitleTextColor;
        public String TitleTextHeight;
        public String TitleTextFontString;
        public String H;
        public String MarkLabelTextColor;
        public String MarkLabelTextHeight;
        public String MarkLabelTextFontString;
        public String AlreadyUnregisteredAnimation;
        public Object Tag;
        public String TabStopIndex;

        CCLRadarGraphProps()
        {
            Data = new ArrayList<Object>();
        }
    }
