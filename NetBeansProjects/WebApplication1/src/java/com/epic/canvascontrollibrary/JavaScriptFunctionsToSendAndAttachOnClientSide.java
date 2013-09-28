/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.epic.canvascontrollibrary;

/**
 *
 * @author Gilgamesh
 */
    public class JavaScriptFunctionsToSendAndAttachOnClientSide
    {
        public String CanvasID;
        public String WindowID;
        public String JavaScriptCode;
        public String ClientSideArrayVarName;
        public String ClientSidePropertyName;
        public String GetPropsFunctionName;

        JavaScriptFunctionsToSendAndAttachOnClientSide(String canvasid, String windowid, String javascriptcode, String clientsidearrayvarname, String clientsidepropertyname, String getpropsfunctionname)
        {
            CanvasID = canvasid;
            WindowID = windowid;
            JavaScriptCode = javascriptcode;
            ClientSideArrayVarName = clientsidearrayvarname;
            ClientSidePropertyName = clientsidepropertyname;
            GetPropsFunctionName = getpropsfunctionname;
        }
    }
