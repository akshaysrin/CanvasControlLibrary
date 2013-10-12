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
    public class CCLGaugeChartProps
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
        public String H;
        public String CenterX;
        public String CenterY;
        public String GaugeRadius;
        public String GaugeLabelTextColor;
        public String GaugeLabelTextHeight;
        public String GaugeLabelTextFontString;
        public String AlreadyUnregisteredAnimation;
        public Object Tag;
        public String TabStopIndex;

        CCLGaugeChartProps()
        {
            Data = new ArrayList<Object>();
        }
    }
