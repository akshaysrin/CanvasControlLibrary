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
    public class CCLPieChartProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public String Title;
        public String TitleTextColor;
        public String TitleTextHeight;
        public String TitleTextFontString;
        public String CurrentRadius;
        public String TotalValue;
        public String LabelTextColor;
        public String LabelTextHeight;
        public String LabelTextFontString;
        public String AlreadyUnregisteredAnimation;
        public String DeltaI;
        public String DeltaX;
        public String DeltaY;
        public String SliceClickFunction;
        public Object Tag;
        public String TabStopIndex;

        CCLPieChartProps()
        {
            Data = new ArrayList<Object>();
        }
    }
