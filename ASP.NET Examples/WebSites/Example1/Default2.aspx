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

<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default2.aspx.cs" Inherits="Default2" %>

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
        <canvas id="canvas1" width="500" height="500" tabindex="0"></canvas>
        <script type="text/javascript">
            registerCanvasElementId('canvas1');
            createComboBox('canvas1', 'cb1', 10, 10, 150, 20, highestDepth, ['Bombay', 'Pune', 'Madras', 'Delhi'], null, null, drawListAreaCustom, null,
                listAreaCustomClickFunction, '#364635', 10, '10pt Ariel', '#1b213b', 10, '10pt Ariel');
            invalidateRect('canvas1', null, 0, 0, 500, 500);
            function drawListAreaCustom(canvasid, windowid) {
                var comboboxProps = getComboboxPropsByListAreaWindowId(canvasid, windowid);
                var vscrollBarProps = getScrollBarProps(canvasid, comboboxProps.VScrollBarWindowID);
                var ctx = getCtx(canvasid);
                ctx.fillStyle = '#FFFFFF';
                ctx.beginPath();
                ctx.rect(comboboxProps.X, comboboxProps.Y + comboboxProps.Height, comboboxProps.Width - 15, 100);
                ctx.fill();
                ctx.fillStyle = comboboxProps.ListAreaTextColor;
                ctx.font = comboboxProps.ListAreaFontString;
                for (var i = vscrollBarProps.SelectedID; i < comboboxProps.Data.length && ((comboboxProps.ListAreaTextHeight + 10) *
                    (i - vscrollBarProps.SelectedID + 1)) + 4 < 100; i++) {
                    switch (comboboxProps.Data[i]) {
                        case 'Bombay':
                            drawCustomImage(ctx, comboboxProps.X, comboboxProps.Y + 4 +
                                ((comboboxProps.ListAreaTextHeight + 10) * (i - vscrollBarProps.SelectedID + 1)), 16, 16, 'Bombay.png');
                            break;
                        case 'Pune':
                            drawCustomImage(ctx, comboboxProps.X, comboboxProps.Y + 4 +
                                ((comboboxProps.ListAreaTextHeight + 10) * (i - vscrollBarProps.SelectedID + 1)), 16, 16, 'Pune.png');
                            break;
                        case 'Madras':
                            drawCustomImage(ctx, comboboxProps.X, comboboxProps.Y + 4 +
                                ((comboboxProps.ListAreaTextHeight + 10) * (i - vscrollBarProps.SelectedID + 1)), 16, 16, 'Madras.png');
                            break;
                        case 'Delhi':
                            drawCustomImage(ctx, comboboxProps.X, comboboxProps.Y + 4 +
                                ((comboboxProps.ListAreaTextHeight + 10) * (i - vscrollBarProps.SelectedID + 1)), 16, 16, 'Delhi.png');
                            break;
                    }
                    ctx.fillText(comboboxProps.Data[i], comboboxProps.X + 20, comboboxProps.Y + 17 +
                                ((comboboxProps.ListAreaTextHeight + 10) * (i - vscrollBarProps.SelectedID + 1)));
                }
                ctx.strokeStyle = '#b7bfc8';
                ctx.beginPath();
                ctx.rect(comboboxProps.X, comboboxProps.Y + comboboxProps.Height, comboboxProps.Width - 15, 100);
                ctx.stroke();
            }
            var preloadedImages = new Array();
            function drawCustomImage(ctx, x, y, width, height, src) {
                for (var i = 0; i < preloadedImages.length; i++) {
                    if (preloadedImages[i].Src == src) {
                        ctx.drawImage(preloadedImages[i].Image, x, y);
                        return;
                    }
                }
                var image = new Image(width, height);
                image.src = src;
                image.onload = function () {
                    preloadedImages.push({ Src: src, Image: image });
                    ctx.drawImage(image, x, y);
                };
            }
            function listAreaCustomClickFunction(canvasid, windowid, e) {
                var comboboxProps = getComboboxPropsByListAreaWindowId(canvasid, windowid);
                var vscrollBarProps = getScrollBarProps(canvasid, comboboxProps.VScrollBarWindowID);
                var vscrollBarWindowProps = getWindowProps(canvasid, comboboxProps.VScrollBarWindowID);
                var canvas = getCanvas(canvasid);
                var x = e.calcX;
                var y = e.calcY;
                for (var i = vscrollBarProps.SelectedID; i < comboboxProps.Data.length && ((comboboxProps.ListAreaTextHeight + 10) * (i - vscrollBarProps.SelectedID + 1)) < 100; i++) {
                    if (x > comboboxProps.X && y > comboboxProps.Y + 4 + comboboxProps.Height + ((comboboxProps.ListAreaTextHeight + 10) * (i - vscrollBarProps.SelectedID)) &&
                        x < comboboxProps.X + comboboxProps.Width - 15 && y < comboboxProps.Y + comboboxProps.Height + 4 + ((comboboxProps.ListAreaTextHeight + 10) *
                        (i - vscrollBarProps.SelectedID + 1))) {
                        comboboxProps.SelectedID = i;
                        setHiddenWindowStatus(canvasid, comboboxProps.VScrollBarWindowID, 1);
                        setHiddenWindowStatus(canvasid, comboboxProps.ListAreaWindowID, 1);
                        invalidateRect(canvasid, null, comboboxProps.X, comboboxProps.Y, comboboxProps.Width + vscrollBarWindowProps.Width, comboboxProps.Height + vscrollBarWindowProps.Height);
                        return;
                    }
                }
            }
        </script>
    </div>
    </form>
</body>
</html>
