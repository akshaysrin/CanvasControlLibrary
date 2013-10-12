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
    public class CCLSubMenuBarProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public String ParentMenuWindowID;
        public String ParentIndexInParentMenu;
        public List<Object> ChildMenuWindowIDs;
        public String DropDownColorStart;
        public String DropDownColorEnd;
        public Object Tag;
        public String TabStopIndex;

        CCLSubMenuBarProps()
        {
            Data = new ArrayList<Object>();
            ChildMenuWindowIDs = new ArrayList<Object>();
        }
    }
