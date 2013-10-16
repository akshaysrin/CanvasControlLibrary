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

<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default5.aspx.cs" Inherits="Default5" %>

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
        <canvas id="canvas" width="1000" height="500" tabindex="0" draggable="true"></canvas>
        <script type="text/javascript">
            var elemId = 'canvas';
            registerCanvasElementId(elemId);
            var panelwindowid = createPanel(elemId, 'p1', 0, 0, 200, 200, highestDepth, 1, '#c8c8c8', 1, '#d1ddff', '#a7afc6');
            registerChildWindow(elemId, createProgressBar(elemId, 'pg1', 10, 100, 200, 20, highestDepth, '#33ec25', 100, 0, 60), panelwindowid);
            registerChildWindow(elemId, createSlider(elemId, 's1', 10, 150, 200, 20, highestDepth, 10, 100, 0, 50), panelwindowid);
            var panelwindowid2 = createPanel(elemId, 'p2', 0, 205, 200, 200, highestDepth, 1, '#c8c8c8', 1, '#d1ddff', '#a7afc6',
                1, 150, 0, 'Test Panel', '#000000', 12, '12pt Ariel', '#cfcfcf', '#ababab', 20, '#495be5', 1, 7);
            registerChildWindow(elemId, createProgressBar(elemId, 'pg2', 0, 300, 200, 20, highestDepth, '#33ec25', 100, 0, 60), panelwindowid2);
            registerChildWindow(elemId, createSlider(elemId, 's2', 10, 350, 350, 20, highestDepth, 10, 100, 0, 50), panelwindowid2);
            createSplitter(elemId, 'spl1', 0, 201, 200, 3, highestDepth, '#D0D0D0');
            createLabel(elemId, 'l1', 150, 10, 100, 20, 'Label 1', '#000000', 12, '12pt Ariel', null, highestDepth);
            createImage(elemId, 'i1', 10, 400, 64, 64, highestDepth, 'test.png', function (canvasid, windowid) { alert('You clicked the image'); });
            createButton(elemId, 'b8', 500, 74, 250, 56, 'Custom Click Function', '#0000FF', 12, '12pt Ariel', 7, highestDepth + 1, 2, 1,
                function (canvasid, windowid) {
                    invokeServerSideFunction('AjaxEx1.aspx', 'ClickMe', elemId, windowid, function (params) { alert(params); }, ['test1', 'test2']);
                }, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1');
            invalidateRect(elemId, null, 0, 0, 1000, 500);
        </script>
    </div>
    </form>
</body>
</html>
