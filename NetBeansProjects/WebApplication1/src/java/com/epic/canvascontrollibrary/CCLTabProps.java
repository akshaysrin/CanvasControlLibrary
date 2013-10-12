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
    public class CCLTabProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> TabLabels;
        public String TabLabelColor;
        public String TabLabelHeight;
        public String TabLabelFontString;
        public List<Object> PanelWindowIDs;
        public String SelectedTabID;
        public String TabLabelGradientStartColor;
        public String TabLabelGradientEndColor;
        public List<Object> TabLabelHitAreas;
        public String GapBetweenTabs;
        public String SelectedTabBorderColor;
        public String SelectedTabBorderLineWidth;
        public Object Tag;
        public String TabStopIndex;

        CCLTabProps()
        {
            TabLabels = new ArrayList<Object>();
            PanelWindowIDs = new ArrayList<Object>();
            TabLabelHitAreas = new ArrayList<Object>();
        }
    }
