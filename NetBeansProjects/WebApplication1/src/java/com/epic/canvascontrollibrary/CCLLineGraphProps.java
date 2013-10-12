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
    public class CCLLineGraphProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public String XMaxValue;
        public String NumMarksX;
        public String YMaxValue;
        public String NumMarksY;
        public String Title;
        public String TitleTextColor;
        public String TitleTextHeight;
        public String TitleTextFontString;
        public String AxisLabelsTextColor;
        public String AxisLabelsTextHeight;
        public String AxisLabelsTextFontString;
        public String H;
        public String HMax;
        public List<Object> LineXYs;
        public String ClickFunction;
        public String AlreadyUnregisteredAnimation;
        public String MarginLeft;
        public String IsLabeledXValues;
        public Object Tag;
        public String TabStopIndex;

        CCLLineGraphProps()
        {
            Data = new ArrayList<Object>();
            LineXYs = new ArrayList<Object>();
        }
    }
