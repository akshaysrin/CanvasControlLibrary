/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.epic.canvascontrollibrary;

import java.util.UUID;

/**
 *
 * @author Gilgamesh
 */
    public class Session
    {
        public UUID ID;
        public LightWeightDictionary Data;

        Session()
        {
            ID = UUID.randomUUID();
            Data = new LightWeightDictionary();
        }
    }
