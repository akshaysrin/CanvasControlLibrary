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
<body>
        <canvas id="canvas" width="1500" height="1500" tabindex="0"></canvas>
        <script type="text/javascript">
            var elemId = 'canvas';
            registerCanvasElementId(elemId);
            createButton(elemId, 'b1', 10, 10, 100, 40, 'Google Search', '#0000FF', 12, '12pt Ariel', 2, highestDepth,
                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null, 1, 'http://www.google.com', 1);
            createButton(elemId, 'b2', 50, 38, 100, 40, 'CodeProject', '#0000FF', 12, '12pt Ariel', 2, highestDepth + 1,
                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,
                1, 'http://www.codeproject.com', 0, 1, 'CodeProject', '600', '400', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no');
            createButton(elemId, 'b3', 400, 300, 100, 40, 'Example 2', '#0000FF', 12, '12pt Ariel', 2, highestDepth + 1,
                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,
                1, 'http://114.143.28.50/Default2.aspx');
            createButton(elemId, 'b4', 400, 350, 100, 40, 'Example 3', '#0000FF', 12, '12pt Ariel', 2, highestDepth + 1,
                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,
                1, 'http://114.143.28.50/Default3.aspx');
            createButton(elemId, 'b5', 400, 390, 100, 40, 'Example 4', '#0000FF', 12, '12pt Ariel', 2, highestDepth + 1,
                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,
                1, 'http://114.143.28.50/Default4.aspx');
            createButton(elemId, 'b6', 400, 430, 200, 40, 'Calenders Example', '#0000FF', 12, '12pt Ariel', 2, highestDepth + 1,
                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,
                1, 'http://114.143.28.50/Calenders.aspx');
            createButton(elemId, 'b7', 400, 480, 300, 40, 'New Forms Based System Example', '#0000FF', 12, '12pt Ariel', 2, highestDepth + 1,
                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,
                1, 'http://114.143.28.50/FormsBased.aspx');
            createButton(elemId, 'b8', 30, 74, 250, 40, 'Custom Click Function', '#0000FF', 12, '12pt Ariel', 2, highestDepth + 1,
                function (canvasid, windowid) {
                    invokeServerSideFunction('http://localhost:8080/PhpExample1/public/AjaxEx1.php', 'ClickMe', elemId, windowid, function () { alert('Did Postback'); });
                }, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1');
            createLabel(elemId, 'l1', 150, 10, 100, 20, 'Label 1', '#000000', 12, '12pt Ariel', null, highestDepth);
            createGrid(elemId, 'g1', 10, 150, 400, 90, highestDepth, [['123567891011121314', 'abcdefghijklmnopqrst', '000-89843-8983459'], ['2356789101112131415', 'bcdefghijklmnopqrstu', '000-89843-8983459'],
                ['35678910111213141516', 'cdefghijklmnopqrstuv', '000-89843-8983459'], ['45678910111213141516', 'defghijklmnopqrstuv', '000-89843-8983459'],
                ['5678910111213141516', 'efghijklmnopqrstuv', '000-89843-8983459'], ['678910111213141516', 'fghijklmnopqrstuv', '000-89843-8983459']],
                ['Numbers', 'Alphabets', 'GUIDS'], '#000000', 12, '12pt Ariel', '#000000', 14, '14pt Ariel', null, null, function (canvasid, windowid, c, r) {
                    alert('you clicked cell number ' + c + ' at row number ' + r);
                }, 20, 30, [150, 150, 200], 1, '#b7bfc8', 1, '#fbfbfb', '#d9dde1', '#f6f8fb', '#e7e7e7', '#eaf1ff', '#d7e5ff');
            createComboBox(elemId, 'cb1', 10, 280, 200, 20, highestDepth, ['Mumbai','Pune','Juhu','Phoenix','London','New York','San Fransisco','Los Angeles','Houston','Boston'], null, null, null, null,
                null, '#364635', 10, '10pt Ariel', '#1b213b', 10, '10pt Ariel');
            createCheckbox(elemId, 'chk1', 150, 320, highestDepth, 0);
            createRadioButtonGroup(elemId, 'rg1', 10, 350, 0, highestDepth, 'test1', ['Dog', 'Cat', 'Horse', 'Cow', 'Giraffe'], 0, '#000000', '10pt Ariel', 10, 10);
            createImage(elemId, 'i1', 10, 400, 64, 64, highestDepth, 'test.png', function (canvasid, windowid) { alert('You clicked the image'); });
            createTreeView(elemId, 'tv1', 10, 500, 200, 200, highestDepth, [[1, 0, 'One', 1], [2, 1, 'Two', 1], [3, 2, 'Three', 1], [4, 1, 'Four', 1], [5, 0, 'Five', 1]
                , [6, 5, 'Six', 1], [7, 6, 'Seven', 1], [8, 6, 'Eight', 1], [9, 8, 'Nine', 1]], 0, 1, 3, 2, '#00FF00', '10pt Ariel', 10, 
                function (canvasid, windowid, selectedNodeIndex) { alert(selectedNodeIndex); });
            createTextBox(elemId, 'textbox1', 400, 10, 300, 60, highestDepth, 'Type your name here', '#F0F0F0', 18, '18pt Ariel', '#051329', 18, '18pt Ariel', 50, '[a-zA-Z ]', 0, null, 1, '#2e3642',
                1, 0, '#000000', 3, 3, 20, 1, 10, 1, '#9bacc6', '#d6e4f9', 0, 'Title.png', 0, null, 0, 0, 0, null, '', '#0d2952', 'rgba(0, 0, 240, 0.2)', 1);
            alert(navigator.userAgent);
            draw(elemId);
        </script>
</body>
</html>
