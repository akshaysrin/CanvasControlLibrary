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
    public class CCLRadioButtonGroupProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public String Alignment;
        public String GroupName;
        public List<Object> Labels;
        public String SelectedID;
        public String LabelTextColor;
        public String LabelFontString;
        public String Radius;
        public List<Object> ButtonExtents;
        public String LabelTextHeight;
        public Object Tag;
        public String TabStopIndex;

        CCLRadioButtonGroupProps()
        {
            Labels = new ArrayList<Object>();
            ButtonExtents = new ArrayList<Object>();
        }
    }
