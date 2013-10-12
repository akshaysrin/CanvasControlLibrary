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
    public class CCLStackedBarGraphProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public String MaxValue;
        public String NumMarksY;
        public String Title;
        public String TitleColor;
        public String TitleHeight;
        public String TitleFontString;
        public String BarWidth;
        public String GapBetweenBarSets;
        public String H;
        public String AxisLabelsColor;
        public String AxisLabelsHeight;
        public String AxisLabelsFontString;
        public List<Object> BarLabelsWithBoundingBoxes;
        public String BarClickFunction;
        public String AlreadyUnregisteredAnimation;
        public String MarginLeft;
        public Object Tag;
        public String TabStopIndex;

        CCLStackedBarGraphProps()
        {
            BarLabelsWithBoundingBoxes = new ArrayList<Object>();
        }
    }
