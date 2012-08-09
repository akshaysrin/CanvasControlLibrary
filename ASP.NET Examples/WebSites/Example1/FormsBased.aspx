<%@ Page Language="C#" AutoEventWireup="true" CodeFile="FormsBased.aspx.cs" Inherits="Default5" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Book a ticket at Fake Cinemas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <script src="CanvasControlLibrary.js" type="text/javascript"></script>
</head>
<body style="background-color:#000000">
    <form id="form1" runat="server">
    <div>
    <canvas id="canvas" width="1024" height="768" tabindex="0"></canvas>
    <script type="text/javascript">
        var elemId = 'canvas';
        registerCanvasElementId(elemId);
        function cityChanged(canvasid, windowid, index) {
            invokeServerSideFunction('AjaxEx1.aspx', 'onSelectCityChanged', canvasid, windowid, null);
        }
        function onSelectCinema(canvasid, windowid, index) {
            invokeServerSideFunction('AjaxEx1.aspx', 'onSelectCinemaChanged', canvasid, windowid, showMoviesForCinema);
        }
        function selectMovieTime(canvasid, windowid) {
        }
        var controlNameIDs = new Array();
        function showMoviesForCinema(params) {
            for (var i = 0; i < controlNameIDs.length; i++) {
                destroyControlByNameID(controlNameIDs[i]);
            }
            var xoffset = 0;
            for (var i = 0; i < params.length; i++) {
                var windowid = createImage(elemId, 'Poster' + i.toString(), 10 + xoffset, 300, 266, 200, highestDepth, params[i][0]);
                controlNameIDs.push('Poster' + i.toString());
                var timesoffset = 0;
                for (var j = 1; j < params[i].length; j++) {
                    createLabel(elemId, 'MoveTimeLabel' + j.toString(), 10 + xoffset + timesoffset, 510, 75, 20, params[i][j], '#cdc833', 12, '12pt Ariel', null, highestDepth, null, null, null,
                         null, null, null, null, null, null, null, null, null, null, null, null, null, selectMovieTime);
                    controlNameIDs.push('MoveTimeLabel' + j.toString());
                    timesoffset += 70;
                }
                var imageProps = getImageControlProps(elemId, windowid);
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
        invokeServerSideFunction('AjaxEx1.aspx', 'InitializeForm1', elemId, windowid, null);
        draw(elemId);
    </script>
    </div>
    </form>
</body>
</html>
