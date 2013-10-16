<%@ Page Language="C#" AutoEventWireup="true" CodeFile="FormsBased.aspx.cs" Inherits="Default5" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Book a ticket at Fake Cinemas</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=EmulateIE9" />
    <script src="CanvasControlLibrary.js" type="text/javascript"></script>
</head>
<body style="background-color:#000000">
    <form id="form1" runat="server">
    <div>
        <table style="width:100%;height:100%"><col width="50%" /><col width="1024px" /><col width="50%" /><tr><td>&nbsp;</td><td>
                <canvas id="canvas" width="1024" height="768" tabindex="0"></canvas>
        </td><td>&nbsp;</td></tr></table>
    <script type="text/javascript">
        var elemId = 'canvas';
        var selecteCinemaWindowID;
        registerCanvasElementId(elemId);
        function cityChanged(canvasid, windowid, index) {
            invokeServerSideFunction('AjaxEx1.aspx', 'onSelectCityChanged', canvasid, windowid, function () { 
                var wprops = getWindowProps(elemId, selecteCinemaWindowID);
                invalidateRect(elemId, null, wprops.X, wprops.Y, wprops.Width, wprops.Height);
            }, new Array());
        }
        function onSelectCinema(canvasid, windowid, index) {
            invokeServerSideFunction('AjaxEx1.aspx', 'onSelectCinemaChanged', canvasid, windowid, showMoviesForCinema, new Array());
        }
        function selectMovieTime(canvasid, windowid) {
            var labelProps = getLabelProps(canvasid, windowid);
            var labelWindowProps = getWindowProps(canvasid, windowid);
            labelProps.BackGroundColor = '#899b0d';
            var labelWindowIDS = new Array();
            labelWindowIDS.push(createLabel(elemId, 'numTicketsLabel', 630, 220, 160, 30, 'Number of Tickets:', '#131aa3', 16, '16pt Ariel', null, highestDepth));
            labelWindowIDS.push(createTextBox(elemId, 'numTicketsTextBox', 800, 220, 50, 30, highestDepth, 'No.', '#F0F0F0', 12, '12pt Ariel', '#051329', 12,
                '12pt Ariel', 2, '[0-9]', 0, null, 1, '#2e3642', 1, 0, '#000000', 3, 3, 20, 1, 10, 1, '#9bacc6', '#d6e4f9', 0, null, 0, null, 0, 0,
                '#D0D000', 12, '12pt Ariel', '', '#0d2952', 'rgba(0, 0, 240, 0.2)', 1, null, null, 3));
            labelWindowIDS.push(createButton(elemId, 'PaymentButton', 875, 220, 100, 30, 'Book Tickets', '#0000FF', 12, '12pt Ariel', 2, highestDepth, 1, 1,
                function (canvasid, windowid) {
                    invokeServerSideFunction('AjaxEx1.aspx', 'DoPaymentForTickets', elemId, windowid, afterPayment, new Array());
                }, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', labelWindowProps.ControlNameID));
            for (var i = 0; i < controlNameIDs.length; i++) {
                var window = getWindowByControlNameID(controlNameIDs[i]);
                if (window.ControlType == 'Label' && window.WindowCount != windowid) {
                    var labelProps2 = getLabelProps(canvasid, window.WindowCount);
                    labelProps2.BackGroundColor = null;
                    labelWindowIDS.push(window.WindowCount);
                }
            }
            for (var i = 0; i < labelWindowIDS.length; i++) {
                var wprops = getWindowProps(elemId, labelWindowIDS[i]);
                invalidateRect(elemId, null, wprops.X, wprops.Y, wprops.Width, wprops.Height);
            }
        }
        function afterPayment(params) {
            suspendDraw = 1;
            for (var i = 0; i < controlNameIDs.length; i++) {
                destroyControlByNameID(controlNameIDs[i]);
            }
            controlNameIDs = new Array();
            destroyControlByNameID('numTicketsLabel');
            destroyControlByNameID('numTicketsTextBox');
            destroyControlByNameID('PaymentButton');
            destroyControlByNameID('label1');
            destroyControlByNameID('label2');
            destroyControlByNameID('selectCityComboBoxComboBoxTextArea');
            destroyControlByNameID('selectCinemaComboBoxComboBoxTextArea');
            suspendDraw = 0;
            createLabel(elemId, 'PaymentMessageLabel', 10, 220, 1024, 30, params[0], '#131aa3', 16, '16pt Ariel', null, highestDepth);
            invalidateRect(elemId, null, 0, 0, 1024, 768);
        }
        var controlNameIDs = new Array();
        function showMoviesForCinema(params) {
            suspendDraw = 1;
            for (var i = 0; i < controlNameIDs.length; i++) {
                destroyControlByNameID(controlNameIDs[i]);
            }
            controlNameIDs = new Array();
            suspendDraw = 0;
            var xoffset = 0;
            var labelWindowIDS = new Array();
            for (var i = 0; i < params.length; i++) {
                var windowid = createImage(elemId, 'Poster' + i.toString(), 10 + xoffset, 300, 266, 200, highestDepth, params[i][0]);
                controlNameIDs.push('Poster' + i.toString());
                var timesoffset = 0;
                for (var j = 1; j < params[i].length; j++) {
                    labelWindowIDS.push(createLabel(elemId, 'MovieTimeLabel' + j.toString() + 'Poster' + i.toString(), 10 + xoffset + timesoffset, 510,
                        50, 20, params[i][j], '#cdc833', 12, '12pt Ariel', null, highestDepth, null, selectMovieTime, null, 1));
                    controlNameIDs.push('MovieTimeLabel' + j.toString() + 'Poster' + i.toString());
                    timesoffset += 70;
                }
                xoffset += 296;
            }
            for (var i = 0; i < labelWindowIDS.length; i++) {
                var wprops = getWindowProps(elemId, labelWindowIDS[i]);
                invalidateRect(elemId, null, wprops.X, wprops.Y, wprops.Width, wprops.Height);
            }
        }
        function form1() {
            createImage(elemId, 'imgTitle', 312, 10, 400, 100, highestDepth + 1, 'Title.png');
            createMenuBarControl(elemId, 'menuBar1', 0, 120, 1024, 60, highestDepth, [['HOME', '#000000', 20, '20pt Ariel', 0, null, null],
                ['TICKETS', '#000000', 20, '20pt Ariel', 0, null, null],
                ['MOVIES', '#000000', 20, '20pt Ariel', 0, null, null], ['CINEMAS', '#000000', 20, '20pt Ariel', 0, null, null],
                ['TRAILERS', '#000000', 20, '20pt Ariel', 0, null, null],
                ['CONTACT US', '#000000', 20, '20pt Ariel', 0, null, null]], '#fdf2c0', '#f0cc75', '#d99839', '#e3e7ff', '#c5cdff', 0);
            createLabel(elemId, 'label1', 10, 220, 50, 30, 'City', '#131aa3', 16, '16pt Ariel', null, highestDepth);
            createComboBox(elemId, 'selectCityComboBox', 75, 220, 200, 30, highestDepth, ['Cities'], null, null, null, null, null, '#131aa3', 16,
                '16pt Ariel', '#131aa3', 16, '16pt Ariel', cityChanged, null, 1);
            createLabel(elemId, 'label2', 300, 220, 120, 30, 'Multiplex', '#131aa3', 16, '16pt Ariel', null, highestDepth);
            selecteCinemaWindowID = createComboBox(elemId, 'selectCinemaComboBox', 400, 220, 200, 30, highestDepth, ['Select a city first'], null,
                null, null, null, null, '#131aa3', 16, '16pt Ariel', '#131aa3', 16, '16pt Ariel', onSelectCinema, null, 2);
            return selecteCinemaWindowID;
        }
        var windowid = form1();
        invokeServerSideFunction('AjaxEx1.aspx', 'InitializeForm1', elemId, windowid, null, new Array());
        invalidateRect(elemId, null, 0, 0, 1024, 768);
    </script>
    </div>
    </form>
</body>
</html>
