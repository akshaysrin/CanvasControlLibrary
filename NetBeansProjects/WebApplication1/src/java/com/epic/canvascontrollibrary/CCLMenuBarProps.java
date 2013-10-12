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
    public class CCLMenuBarProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public String BarColorStart;
        public String BarColorMiddle;
        public String BarColorEnd;
        public String DropDownColorStart;
        public String DropDownColorEnd;
        public List<Object> ChildMenuWindowIDs;
        public Object Tag;
        public String TabStopIndex;

        CCLMenuBarProps()
        {
            Data = new ArrayList<Object>();
            ChildMenuWindowIDs = new ArrayList<Object>();
        }
    }
