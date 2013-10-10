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
    public class CCLComboBoxProps
    {
        public String CanvasID;
        public String WindowID;
        public String TextAreaWindowID;
        public String ButtonWindowID;
        public String ListAreaWindowID;
        public String VScrollBarWindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Data;
        public String SelectedID;
        public String TextAreaTextColor;
        public String TextAreaTextHeight;
        public String TextAreaFontString;
        public String ListAreaTextColor;
        public String ListAreaTextHeight;
        public String ListAreaFontString;
        public Object Tag;
        public String TabStopIndex; 

        CCLComboBoxProps()
        {
            Data = new ArrayList<Object>();
        }
    }
