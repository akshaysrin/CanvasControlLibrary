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
    public class CCLImageSliderProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> ImageURLs;
        public String Direction;
        public String StepIncrement;
        public String ClickFunction;
        public String HoldForTicks;
        public String CurrentImageIndex;
        public String Slide;
        public String HoldCountDown;
        public String TabStopIndex;

        CCLImageSliderProps()
        {
            ImageURLs = new ArrayList<Object>();
        }
    }
