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
        function form1() {
            createImage(elemId, 'imgTitle', 312, 10, 400, 100, highestDepth, 'Title.png', null);
            createMenuBarControl(elemId, 'menuBar1', 0, 120, 1024, 60, highestDepth, [['HOME', '#000000', 20, '20pt Ariel', 0, null, null], ['TICKETS', '#000000', 20, '20pt Ariel', 0, null, null],
                ['MOVIES', '#000000', 20, '20pt Ariel', 0, null, null], ['CINEMAS', '#000000', 20, '20pt Ariel', 0, null, null], ['TRAILERS', '#000000', 20, '20pt Ariel', 0, null, null],
                ['CONTACT US', '#000000', 20, '20pt Ariel', 0, null, null]], '#fdf2c0', '#f0cc75', '#d99839', '#e3e7ff', '#c5cdff', 0);
            createLabel(elemId, 'label1', 10, 220, 100, 30, 'Select City', '#131aa3', 16, '16pt Ariel', null, highestDepth);
            createComboBox(elemId, 'selectCityComboBox', 150, 220, 200, 30, highestDepth, ['junk1'], null, null, null, null, null, '#131aa3', 16, '16pt Ariel', '#131aa3', 16, '16pt Ariel', cityChanged);
            createLabel(elemId, 'label2', 10, 300, 150, 30, 'Select Cinema', '#131aa3', 16, '16pt Ariel', null, highestDepth);
            return createComboBox(elemId, 'selectCinemaComboBox', 170, 300, 200, 30, highestDepth, ['Select a city first'], null, null, null, null, null, '#131aa3', 16, '16pt Ariel', '#131aa3', 16, '16pt Ariel', null);
        }
        var windowid = form1();
        invokeServerSideFunction('AjaxEx1.aspx', 'InitializeForm1', elemId, windowid, null);
        draw(elemId);
    </script>
    </div>
    </form>
</body>
</html>
