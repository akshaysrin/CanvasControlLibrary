<!--
/*
    Canvas Control Library Copyright 2012
    Created by Akshay Srinivasan [akshay.srin@gmail.com]
    This javascript code is provided as is with no warranty implied.
    Akshay Srinivasan are not liable or responsible for any consequence of 
    using this code in your applications.
    You are free to use it and/or change it for both commercial and non-commercial
    applications as long as you give credit to Akshay Srinivasan the creator 
    of this code.
*/

-->

<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Calenders.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=EmulateIE9" />
    <script src="CanvasControlLibrary.js" type="text/javascript"></script>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <canvas id="canvas" width="1500" height="1500" tabindex="0"></canvas>
        <script type="text/javascript">
            var elemId = 'canvas';
            registerCanvasElementId(elemId);
            //Big Calender
            createCalendar(elemId, 'cal1', 10, 10, 358, 408, highestDepth, 'July', '2012', '3 July 2012', 50, 50, 50,
                '#7979AE', '#bbbbc8', '#202020', 16, '16pt Ariel', '#000000', 12, '12pt Ariel',
                '#D0D0D0', 12, '12pt Ariel', '#d2d2fd', 12, '12pt Ariel', '#9898b7', '#FFFFFF', 12, '12pt Ariel', '#b4b4ff', '#d3d3fb',
                function (canvasid, windowid, selectedDay) {
                    alert('You selected the date ' + selectedDay.toString());
                }, '#6f7791', 12, '12pt Ariel');
            //Small Calender
            createCalendar(elemId, 'cal2', 10, 500, 148, 168, highestDepth, 'July', '2012', '3 July 2012', 20, 20, 20,
                '#7979AE', '#bbbbc8', '#202020', 8, '8pt Ariel', '#000000', 8, '8pt Ariel',
                '#D0D0D0', 8, '8pt Ariel', '#d2d2fd', 8, '8pt Ariel', '#9898b7', '#FFFFFF', 8, '8pt Ariel', '#b4b4ff', '#d3d3fb',
                function (canvasid, windowid, selectedDay) {
                    alert('You selected the date ' + selectedDay.toString());
                }, '#6f7791', 8, '8pt Ariel');
            //Date Picker
            createDatePicker(elemId, 'cdp1', 10, 700, 148, 20, highestDepth, 'July', '2012', '3 July 2012', 20, 20, 20,
                '#7979AE', '#bbbbc8', '#202020', 8, '8pt Ariel', '#000000', 8, '8pt Ariel',
                '#D0D0D0', 8, '8pt Ariel', '#d2d2fd', 8, '8pt Ariel', '#9898b7', '#FFFFFF', 8, '8pt Ariel', '#b4b4ff', '#d3d3fb',
                null, '#6f7791', 8, '8pt Ariel', '#000000', 12, '12pt Ariel', 168);
            invalidateRect(elemId, null, 0, 0, 1500, 1500);
        </script>
    </div>
    </form>
</body>
</html>
