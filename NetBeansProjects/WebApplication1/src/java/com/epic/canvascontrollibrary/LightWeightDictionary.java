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
    public class LightWeightDictionary
    {
        public class KeyValuePair{
            public String Key;
            public Object Value;

            public KeyValuePair(String key, Object value)
            {
                Key = key;
                Value = value;
            }
        }

        List<KeyValuePair> KeyValuePairs;

        public void Add(String key, Object value)
        {
            KeyValuePair kvp = new KeyValuePair(key, value);
            KeyValuePairs.add(kvp);
        }

        public Object GetValue(String key)
        {
            for (KeyValuePair kvp : KeyValuePairs)
            {
                if (kvp.Key.equals(key))
                {
                    return kvp.Value;
                }
            }
            return null;
        }

        public void SetValue(String key, Object value)
        {
            for (KeyValuePair kvp : KeyValuePairs)
            {
                if (kvp.Key.equals(key))
                {
                    kvp.Value = value;
                }
            }
        }

        public List<String> GetAllKeys()
        {
            List<String> keys = new ArrayList<String>();
            for (KeyValuePair kvp : KeyValuePairs)
            {
                keys.add(kvp.Key);
            }
            return keys;
        }

        LightWeightDictionary()
        {
            KeyValuePairs = new ArrayList<KeyValuePair>();
        }
    }
