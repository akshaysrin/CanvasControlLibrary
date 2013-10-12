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
    public class CCLCandlesticksGraphProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public List<Object> XMarksLabelData;
        public String XMarksWidth;
        public String YMaxValue;
        public String NumMarksY;
        public String Title;
        public String TitleColor;
        public String TitleHeight;
        public String TitleFontString;
        public String CandleBodyWidth;
        public String CandleBodyColor;
        public String CandleLineColor;
        public String MarginLeft;
        public String AxisLabelsColor;
        public String AxisLabelsHeight;
        public String AxisLabelsFontString;
        public Object Tag;
        public String TabStopIndex;

        CCLCandlesticksGraphProps()
        {
            Data = new ArrayList<Object>();
            XMarksLabelData = new ArrayList<Object>();
        }
    }
