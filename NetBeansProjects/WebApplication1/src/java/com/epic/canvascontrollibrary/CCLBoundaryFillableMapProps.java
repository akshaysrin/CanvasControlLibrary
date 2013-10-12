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
    public class CCLBoundaryFillableMapProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> FillPoints;
        public String ImgURL;
        public String ImageWidth;
        public String ImageHeight;
        public String TabStopIndex;

        CCLBoundaryFillableMapProps()
        {
            FillPoints = new ArrayList<Object>();
        }
    }
