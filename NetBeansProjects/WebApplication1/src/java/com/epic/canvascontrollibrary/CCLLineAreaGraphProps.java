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
    public class CCLLineAreaGraphProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public String XMaxValue;
        public String YMaxValue;
        public String NumMarksX;
        public String NumMarksY;
        public String Title;
        public String TitleTextColor;
        public String TitleTextHeight;
        public String TitleTextFontString;
        public String AxisLabelsColor;
        public String AxisLabelsHeight;
        public String AxisLabelsFontString;
        public String H;
        public String MarginLeft;
        public String AlreadyUnregisteredAnimation;
        public String IsLabledOnXAxis;
        public Object Tag;
        public String TabStopIndex;

        CCLLineAreaGraphProps()
        {
            Data = new ArrayList<Object>();
        }
    }
