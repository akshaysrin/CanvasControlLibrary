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
    public class CCLImageFaderProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> ImageURLs;
        public String FadeStartValue;
        public String FadeEndValue;
        public String FadeStepValue;
        public String HoldForTicks;
        public String ClickFunction;
        public String HoldCountDown;
        public String CurrentImageIndex;
        public String CurrentGlobalAlphaValue;
        public String OverlayImages;
        public String TabStopIndex;

        CCLImageFaderProps()
        {
            ImageURLs = new ArrayList<Object>();
        }
    }
