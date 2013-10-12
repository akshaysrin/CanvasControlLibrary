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
    public class CCLImageMapProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public String ImgUrl;
        public List<Object> PinXYs;
        public String PinClickFunction;
        public String HasZoom;
        public String ImageTopLeftXOffset;
        public String ImageTopLeftYOffset;
        public String MovingMap;
        public String LastMovingX;
        public String LastMovingY;
        public String Scale;
        public String ScaleIncrementFactor;
        public Object Tag;
        public String TabStopIndex;

        CCLImageMapProps()
        {
            PinXYs = new ArrayList<Object>();
        }
    }
