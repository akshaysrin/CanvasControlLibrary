package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class FormsBased_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
      out.write("        <title>Book a ticket at Fake Cinemas</title>\n");
      out.write("        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0\" />\n");
      out.write("        <meta http-equiv=\"X-UA-Compatible\" content=\"chrome=1,IE=EmulateIE9\" />\n");
      out.write("        <script src=\"CanvasControlLibrary.js\" type=\"text/javascript\"></script>\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        <table style=\"width:100%;height:100%\"><col width=\"50%\" /><col width=\"1024px\" /><col width=\"50%\" /><tr><td>&nbsp;</td><td>\n");
      out.write("                <canvas id=\"canvas\" width=\"1024\" height=\"768\" tabindex=\"0\"></canvas>\n");
      out.write("        </td><td>&nbsp;</td></tr></table>\n");
      out.write("    <script type=\"text/javascript\">\n");
      out.write("        var elemId = 'canvas';\n");
      out.write("        var selecteCinemaWindowID;\n");
      out.write("        registerCanvasElementId(elemId);\n");
      out.write("        function cityChanged(canvasid, windowid, index) {\n");
      out.write("            invokeServerSideFunction('ajax.jsp', 'onSelectCityChanged', canvasid, windowid, function () { \n");
      out.write("                var wprops = getWindowProps(elemId, selecteCinemaWindowID);\n");
      out.write("                invalidateRect(elemId, null, wprops.X, wprops.Y, wprops.Width, wprops.Height);\n");
      out.write("            }, new Array());\n");
      out.write("        }\n");
      out.write("        function onSelectCinema(canvasid, windowid, index) {\n");
      out.write("            invokeServerSideFunction('ajax.jsp', 'onSelectCinemaChanged', canvasid, windowid, showMoviesForCinema, new Array());\n");
      out.write("        }\n");
      out.write("        function selectMovieTime(canvasid, windowid) {\n");
      out.write("            var labelProps = getLabelProps(canvasid, windowid);\n");
      out.write("            var labelWindowProps = getWindowProps(canvasid, windowid);\n");
      out.write("            labelProps.BackGroundColor = '#899b0d';\n");
      out.write("            var labelWindowIDS = new Array();\n");
      out.write("            labelWindowIDS.push(createLabel(elemId, 'numTicketsLabel', 630, 220, 160, 30, 'Number of Tickets:', '#131aa3', 16, '16pt Ariel', null, highestDepth));\n");
      out.write("            labelWindowIDS.push(createTextBox(elemId, 'numTicketsTextBox', 800, 220, 50, 30, highestDepth, 'No.', '#F0F0F0', 12, '12pt Ariel', '#051329', 12,\n");
      out.write("                '12pt Ariel', 2, '[0-9]', 0, null, 1, '#2e3642', 1, 0, '#000000', 3, 3, 20, 1, 10, 1, '#9bacc6', '#d6e4f9', 0, null, 0, null, 0, 0,\n");
      out.write("                '#D0D000', 12, '12pt Ariel', '', '#0d2952', 'rgba(0, 0, 240, 0.2)', 1, null, null, 3));\n");
      out.write("            labelWindowIDS.push(createButton(elemId, 'PaymentButton', 875, 220, 100, 30, 'Book Tickets', '#0000FF', 12, '12pt Ariel', 2, highestDepth, 1, 1,\n");
      out.write("                function (canvasid, windowid) {\n");
      out.write("                    invokeServerSideFunction('ajax.jsp', 'DoPaymentForTickets', elemId, windowid, afterPayment, new Array());\n");
      out.write("                }, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', labelWindowProps.ControlNameID));\n");
      out.write("            for (var i = 0; i < controlNameIDs.length; i++) {\n");
      out.write("                var window = getWindowByControlNameID(controlNameIDs[i]);\n");
      out.write("                if (window.ControlType == 'Label' && window.WindowCount != windowid) {\n");
      out.write("                    var labelProps2 = getLabelProps(canvasid, window.WindowCount);\n");
      out.write("                    labelProps2.BackGroundColor = null;\n");
      out.write("                    labelWindowIDS.push(window.WindowCount);\n");
      out.write("                }\n");
      out.write("            }\n");
      out.write("            for (var i = 0; i < labelWindowIDS.length; i++) {\n");
      out.write("                var wprops = getWindowProps(elemId, labelWindowIDS[i]);\n");
      out.write("                invalidateRect(elemId, null, wprops.X, wprops.Y, wprops.Width, wprops.Height);\n");
      out.write("            }\n");
      out.write("        }\n");
      out.write("        function afterPayment(params) {\n");
      out.write("            suspendDraw = 1;\n");
      out.write("            for (var i = 0; i < controlNameIDs.length; i++) {\n");
      out.write("                destroyControlByNameID(controlNameIDs[i]);\n");
      out.write("            }\n");
      out.write("            controlNameIDs = new Array();\n");
      out.write("            destroyControlByNameID('numTicketsLabel');\n");
      out.write("            destroyControlByNameID('numTicketsTextBox');\n");
      out.write("            destroyControlByNameID('PaymentButton');\n");
      out.write("            destroyControlByNameID('label1');\n");
      out.write("            destroyControlByNameID('label2');\n");
      out.write("            destroyControlByNameID('selectCityComboBoxComboBoxTextArea');\n");
      out.write("            destroyControlByNameID('selectCinemaComboBoxComboBoxTextArea');\n");
      out.write("            suspendDraw = 0;\n");
      out.write("            createLabel(elemId, 'PaymentMessageLabel', 10, 220, 1024, 30, params[0], '#131aa3', 16, '16pt Ariel', null, highestDepth);\n");
      out.write("            invalidateRect(elemId, null, 0, 0, 1024, 768);\n");
      out.write("        }\n");
      out.write("        var controlNameIDs = new Array();\n");
      out.write("        function showMoviesForCinema(params) {\n");
      out.write("            suspendDraw = 1;\n");
      out.write("            for (var i = 0; i < controlNameIDs.length; i++) {\n");
      out.write("                destroyControlByNameID(controlNameIDs[i]);\n");
      out.write("            }\n");
      out.write("            controlNameIDs = new Array();\n");
      out.write("            suspendDraw = 0;\n");
      out.write("            var xoffset = 0;\n");
      out.write("            var labelWindowIDS = new Array();\n");
      out.write("            for (var i = 0; i < params.length; i++) {\n");
      out.write("                var windowid = createImage(elemId, 'Poster' + i.toString(), 10 + xoffset, 300, 266, 200, highestDepth, params[i][0]);\n");
      out.write("                controlNameIDs.push('Poster' + i.toString());\n");
      out.write("                var timesoffset = 0;\n");
      out.write("                for (var j = 1; j < params[i].length; j++) {\n");
      out.write("                    labelWindowIDS.push(createLabel(elemId, 'MovieTimeLabel' + j.toString() + 'Poster' + i.toString(), 10 + xoffset + timesoffset, 510,\n");
      out.write("                        50, 20, params[i][j], '#cdc833', 12, '12pt Ariel', null, highestDepth, null, selectMovieTime, null, 1));\n");
      out.write("                    controlNameIDs.push('MovieTimeLabel' + j.toString() + 'Poster' + i.toString());\n");
      out.write("                    timesoffset += 70;\n");
      out.write("                }\n");
      out.write("                xoffset += 296;\n");
      out.write("            }\n");
      out.write("            for (var i = 0; i < labelWindowIDS.length; i++) {\n");
      out.write("                var wprops = getWindowProps(elemId, labelWindowIDS[i]);\n");
      out.write("                invalidateRect(elemId, null, wprops.X, wprops.Y, wprops.Width, wprops.Height);\n");
      out.write("            }\n");
      out.write("        }\n");
      out.write("        function form1() {\n");
      out.write("            createImage(elemId, 'imgTitle', 312, 10, 400, 100, highestDepth + 1, 'Title.png');\n");
      out.write("            createMenuBarControl(elemId, 'menuBar1', 0, 120, 1024, 60, highestDepth, [['HOME', '#000000', 20, '20pt Ariel', 0, null, null],\n");
      out.write("                ['TICKETS', '#000000', 20, '20pt Ariel', 0, null, null],\n");
      out.write("                ['MOVIES', '#000000', 20, '20pt Ariel', 0, null, null], ['CINEMAS', '#000000', 20, '20pt Ariel', 0, null, null],\n");
      out.write("                ['TRAILERS', '#000000', 20, '20pt Ariel', 0, null, null],\n");
      out.write("                ['CONTACT US', '#000000', 20, '20pt Ariel', 0, null, null]], '#fdf2c0', '#f0cc75', '#d99839', '#e3e7ff', '#c5cdff', 0);\n");
      out.write("            createLabel(elemId, 'label1', 10, 220, 50, 30, 'City', '#131aa3', 16, '16pt Ariel', null, highestDepth);\n");
      out.write("            createComboBox(elemId, 'selectCityComboBox', 75, 220, 200, 30, highestDepth, ['Cities'], null, null, null, null, null, '#131aa3', 16,\n");
      out.write("                '16pt Ariel', '#131aa3', 16, '16pt Ariel', cityChanged, null, 1);\n");
      out.write("            createLabel(elemId, 'label2', 300, 220, 120, 30, 'Multiplex', '#131aa3', 16, '16pt Ariel', null, highestDepth);\n");
      out.write("            selecteCinemaWindowID = createComboBox(elemId, 'selectCinemaComboBox', 400, 220, 200, 30, highestDepth, ['Select a city first'], null,\n");
      out.write("                null, null, null, null, '#131aa3', 16, '16pt Ariel', '#131aa3', 16, '16pt Ariel', onSelectCinema, null, 2);\n");
      out.write("            return selecteCinemaWindowID;\n");
      out.write("        }\n");
      out.write("        var windowid = form1();\n");
      out.write("        invokeServerSideFunction('ajax.jsp', 'InitializeForm1', elemId, windowid, null, new Array());\n");
      out.write("        invalidateRect(elemId, null, 0, 0, 1024, 768);\n");
      out.write("    </script>\n");
      out.write("    </body>\n");
      out.write("</html>\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
