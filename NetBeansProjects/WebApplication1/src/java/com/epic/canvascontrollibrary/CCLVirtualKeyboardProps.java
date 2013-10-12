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
    public class CCLVirtualKeyboardProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> Keys;
        public String KeyPressFunction;
        public String GapBetweenButtons;
        public String GapBetweenRows;
        public String CurrentKeyboardIndex;
        public List<Object> KeyExtents;
        public String TextHeight;
        public String TextFontString;
        public String CustomKeys;
        public String CustomDrawLetterFunction;
        public String HasGloss;
        public String ShiftKeyPressed;
        public String TabStopIndex;

        CCLVirtualKeyboardProps()
        {
            Keys = new ArrayList<Object>();
            KeyExtents = new ArrayList<Object>();
        }
    }
