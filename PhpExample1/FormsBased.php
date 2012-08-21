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

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge" />
    <script src="CanvasControlLibrary.js" type="text/javascript"></script>
</head>
<body style="background-color:#000000">
    <div>
        <table style="width:100%;height:100%"><col width="50%" /><col width="1024px" /><col width="50%" /><tr><td>&nbsp;</td><td>
                <canvas id="canvas" width="1024" height="768" tabindex="0"></canvas>
        </td><td>&nbsp;</td></tr></table>
    <script type="text/javascript">
        var elemId = 'canvas';
        registerCanvasElementId(elemId);
        function cityChanged(canvasid, windowid, index) {
            invokeServerSideFunction('http://114.143.28.50:8080/PhpExample1/public/AjaxEx2.php', 'onSelectCityChanged', canvasid, windowid, null);
        }
        function onSelectCinema(canvasid, windowid, index) {
            invokeServerSideFunction('http://114.143.28.50:8080/PhpExample1/public/AjaxEx2.php', 'onSelectCinemaChanged', canvasid, windowid, showMoviesForCinema);
        }
        function selectMovieTime(canvasid, windowid) {
            var labelProps = getLabelProps(canvasid, windowid);
            var labelWindowProps = getWindowProps(canvasid, windowid);
            labelProps.BackGroundColor = '#899b0d';
            createLabel(elemId, 'numTicketsLabel', 630, 220, 160, 30, 'Number of Tickets:', '#131aa3', 16, '16pt Ariel', null, highestDepth);
            createTextBox(elemId, 'numTicketsTextBox', 800, 220, 50, 30, highestDepth, 'No.', '#F0F0F0', 12, '12pt Ariel', '#051329', 12, '12pt Ariel', 2, '[0-9]', 0, null, 1, '#2e3642',
                1, 0, '#000000', 3, 3, 20, 1, 10, 1, '#9bacc6', '#d6e4f9', 0, null, 0, null, 0, 0, 0, null, '', '#0d2952', 'rgba(0, 0, 240, 0.2)', 1, ['test', 'this', 'out']);
            createButton(elemId, 'PaymentButton', 875, 220, 100, 30, 'Book Tickets', '#0000FF', 12, '12pt Ariel', 2, highestDepth + 1,
                function (canvasid, windowid) {
                    invokeServerSideFunction('http://114.143.28.50:8080/PhpExample1/public/AjaxEx2.php', 'DoPaymentForTickets', elemId, windowid, afterPayment);
                }, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', labelWindowProps.ControlNameID);
            for (var i = 0; i < controlNameIDs.length; i++) {
                var window = getWindowByControlNameID(controlNameIDs[i]);
                if (window.ControlType == 'Label' && window.WindowCount != windowid) {
                    var labelProps2 = getLabelProps(canvasid, window.WindowCount);
                    labelProps2.BackGroundColor = null;
                }
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
            for (var i = 0; i < params.length; i++) {
                var windowid = createImage(elemId, 'Poster' + i.toString(), 10 + xoffset, 300, 266, 200, highestDepth, params[i][0]);
                controlNameIDs.push('Poster' + i.toString());
                var timesoffset = 0;
                for (var j = 1; j < params[i].length; j++) {
                    createLabel(elemId, 'MovieTimeLabel' + j.toString() + 'Poster' + i.toString(), 10 + xoffset + timesoffset, 510, 50, 20, params[i][j], '#cdc833', 
                        12, '12pt Ariel', null, highestDepth, null, selectMovieTime, null, 1);
                    controlNameIDs.push('MovieTimeLabel' + j.toString() + 'Poster' + i.toString());
                    timesoffset += 70;
                }
                xoffset += 296;
            }
            draw(elemId);
        }
        function form1() {
            createImage(elemId, 'imgTitle', 312, 10, 400, 100, highestDepth, 'Title.png');
            createMenuBarControl(elemId, 'menuBar1', 0, 120, 1024, 60, highestDepth, [['HOME', '#000000', 20, '20pt Ariel', 0, null, null], ['TICKETS', '#000000', 20, '20pt Ariel', 0, null, null],
                ['MOVIES', '#000000', 20, '20pt Ariel', 0, null, null], ['CINEMAS', '#000000', 20, '20pt Ariel', 0, null, null], ['TRAILERS', '#000000', 20, '20pt Ariel', 0, null, null],
                ['CONTACT US', '#000000', 20, '20pt Ariel', 0, null, null]], '#fdf2c0', '#f0cc75', '#d99839', '#e3e7ff', '#c5cdff', 0);
            createLabel(elemId, 'label1', 10, 220, 50, 30, 'City', '#131aa3', 16, '16pt Ariel', null, highestDepth);
            createComboBox(elemId, 'selectCityComboBox', 75, 220, 200, 30, highestDepth, ['Cities'], null, null, null, null, null, '#131aa3', 16, '16pt Ariel', '#131aa3', 16, '16pt Ariel', cityChanged);
            createLabel(elemId, 'label2', 300, 220, 120, 30, 'Multiplex', '#131aa3', 16, '16pt Ariel', null, highestDepth);
            return createComboBox(elemId, 'selectCinemaComboBox', 400, 220, 200, 30, highestDepth, ['Select a city first'], null, null, null, null, null, '#131aa3', 16, '16pt Ariel', '#131aa3', 16, '16pt Ariel', onSelectCinema);
        }
        var windowid = form1();
        invokeServerSideFunction('http://114.143.28.50:8080/PhpExample1/public/AjaxEx2.php', 'InitializeForm1', elemId, windowid, null);
        draw(elemId);
    </script>
    </div>
</body>
</html>
