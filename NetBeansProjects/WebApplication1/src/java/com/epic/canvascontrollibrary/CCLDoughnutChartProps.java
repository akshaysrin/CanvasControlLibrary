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
    public class CCLDoughnutChartProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public String Title;
        public String TitleColor;
        public String TitleTextHeight;
        public String TitleFontString;
        public String InnerRadius;
        public String CurrentRadius;
        public String TotalValue;
        public String MarginSides;
        public String LabelColor;
        public String LabelHeight;
        public String LabelFontString;
        public String LegendWidth;
        public String LegendHeight;
        public String LegendFontString;
        public String AnimationCompleted;
        public String DeltaI;
        public String DeltaX;
        public String DeltaY;
        public String SliceClickFunction;
        public Object Tag;
        public String TabStopIndex;

        CCLDoughnutChartProps()
        {
            Data = new ArrayList<Object>();
        }
    }
