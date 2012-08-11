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
<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default3.aspx.cs" Inherits="Default3" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge" />
    <script src="CanvasControlLibrary.js" type="text/javascript"></script>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <canvas id="canvas" width="1000" height="1200" tabindex="0"></canvas>
        <script type="text/javascript">
            var elemId = 'canvas';
            registerCanvasElementId(elemId);
            var panelwindowid = createPanel(elemId, 'p1', 5, 50, 150, 140, highestDepth, 1, '#c8c8c8', 1, '#d1ddff', '#a7afc6');
            registerChildWindow(elemId, createProgressBar(elemId, 'pg1', 10, 100, 200, 20, highestDepth, '#33ec25', 100, 0, 60), panelwindowid);
            registerChildWindow(elemId, createSlider(elemId, 's1', 10, 150, 200, 20, highestDepth, 10, 100, 0, 50), panelwindowid);
            var panelwindowid2 = createPanel(elemId, 'p2', 5, 250, 150, 140, highestDepth, 1, '#c8c8c8', 1, '#d1ddff', '#a7afc6',
                1, 150, 0, 'Test Panel', '#000000', 12, '12pt Ariel',
                '#cfcfcf', '#ababab', 20, '#495be5', 1, 7);
            registerChildWindow(elemId, createProgressBar(elemId, 'pg2', 10, 290, 200, 20, highestDepth, '#33ec25', 100, 0, 60), panelwindowid2);
            registerChildWindow(elemId, createSlider(elemId, 's2', 10, 350, 200, 20, highestDepth, 10, 100, 0, 50), panelwindowid2);
            var panelwindowid3 = createPanel(elemId, 'p3', 5, 400, 150, 140, highestDepth, 1, '#c8c8c8', 1, '#d1ddff', '#a7afc6',
                1, 150, 0, 'Test Panel', '#000000', 12, '12pt Ariel',
                '#cfcfcf', '#ababab', 20, '#495be5', 0, 7);
            registerChildWindow(elemId, createProgressBar(elemId, 'pg3', 10, 430, 200, 20, highestDepth, '#33ec25', 100, 0, 60), panelwindowid3);
            registerChildWindow(elemId, createSlider(elemId, 's3', 10, 470, 200, 20, highestDepth, 10, 100, 0, 50), panelwindowid3);
            var tabwindowid = createTabControl(elemId, 'tab1', 200, 60, 250, 100, highestDepth, ['Tab 1', 'Tab 2', 'Tab 3'], '#000000', 10, '10pt Ariel',
                '#C0C0C0', '#D0D0D0', 1, '#6c6cde', 1, '#C0C0C0', '#D0D0D0', 0, 3, '#6c6cde', 1);
            var tabp = getTabProps(elemId, tabwindowid);
            registerChildWindow(elemId, createImage(elemId, 'i1', 250, 90, 50, 50, highestDepth, 'Madras.png', function () { alert('You clicked Madras.png'); }), tabp.PanelWindowIDs[0]);
            registerChildWindow(elemId, createImage(elemId, 'i2', 250, 90, 50, 50, highestDepth, 'Bombay.png', function () { alert('You clicked Bombay.png'); }), tabp.PanelWindowIDs[1]);
            registerChildWindow(elemId, createImage(elemId, 'i3', 250, 90, 50, 50, highestDepth, 'Pune.png', function () { alert('You clicked Pune.png'); }), tabp.PanelWindowIDs[2]);
            createImageMapControl(elemId, 'im1', 250, 200, 200, 150, highestDepth, 'indiamap.gif', [[134, 261, 10, '#00FF00'], [219, 291, 7, '#FF0000'], [248, 361, 10, '#0000FF']],
                function (c, w, i) { alert("You clicked on " + (i == 0 ? "Mumbai" : (i == 1 ? "Hyderabad" : "Chennai"))); }, 1, 90, 240, 1, 0.1);
            createMenuBarControl(elemId, 'mb1', 0, 0, 800, 20, highestDepth, [['File', '#000000', 10, '10pt Ariel', 0, null, [['Save', '#000000', 10, '10pt Ariel', 0, function () {
                alert('You choose Save from the menu.');
            }, null], ['Save As', '#000000', 10, '10pt Ariel', 0, function () { alert('You choose Sava As from the menu'); }, null],
                ['Options', '#000000', 10, '10pt Ariel', 0, null, [['Advanced', '#000000', 10, '10pt Ariel', 0, function () { alert('You choose Advanced from the menu'); }, null],
                ['Configuration', '#000000', 10, '10pt Ariel', 0, function () { alert('You choose Configuration from the menu'); }, null]]]]], ['Help', '#000000', 10, '10pt Ariel', 0,
                function () { alert('You choose Help from the menu'); }, null]], '#bec7ff', '#848ec9', '#515eac', '#e3e7ff', '#c5cdff', 0);
            draw(elemId);
        </script>
    </div>
    </form>
</body>
</html>
