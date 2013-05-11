<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default6.aspx.cs" Inherits="Default6" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <canvas id="canvas" width="1500" height="1500"></canvas>
    <script>
        var canvas = document.getElementById("canvas");
        var ctx     = canvas.getContext("2d");
        var angle = 0;
        window.setInterval(function () {
            angle = angle + 1;
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            ctx.save();
            ctx.fillStyle = "#FF0000";

            // first image
            ctx.translate(150, 200);
            ctx.rotate(angle * Math.PI / 180);  // rotate 90 degrees
            ctx.translate(-150, -200);

            ctx.fillStyle = "black";
            ctx.fillRect(100, 150, 100, 100);
            ctx.fill();

            ctx.restore();
        }, 5);
    </script>
    </div>
    </form>
</body>
</html>
