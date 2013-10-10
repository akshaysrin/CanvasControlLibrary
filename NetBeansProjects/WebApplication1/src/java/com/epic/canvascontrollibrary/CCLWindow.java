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
    public class CCLWindow
    {
        public String WindowCount;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public String Depth;
        public String CanvasID;
        public String ParentWindowID;
        public List<Object> ChildWindowIDs;
        public String ControlType;
        public String ControlNameID;
        public String MultiWindowControlsMainWindowId;
        public String TabStopIndex;


        CCLWindow()
        {
            ChildWindowIDs = new ArrayList<Object>();
        }
    }
