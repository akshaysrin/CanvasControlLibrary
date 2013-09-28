package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import com.epic.canvascontrollibrary.CanvasControlLibrary;

public final class index_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <title></title>\n");
      out.write("        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0\" />\n");
      out.write("        <meta http-equiv=\"X-UA-Compatible\" content=\"chrome=1,IE=EmulateIE9\" />\n");
      out.write("        <script src=\"CanvasControlLibrary.js\" type=\"text/javascript\"></script>\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        <div>\n");
      out.write("                <canvas id=\"canvas\" width=\"1500\" height=\"1500\" tabindex=\"0\"></canvas>\n");
      out.write("        <script type=\"text/javascript\">\n");
      out.write("            var elemId = 'canvas';\n");
      out.write("            registerCanvasElementId(elemId);\n");
      out.write("            createButton(elemId, 'b1', 10, 10, 100, 30, 'Google Search', '#0000FF', 12, '12pt Ariel', 5, highestDepth, 1, 0,\n");
      out.write("                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null, 1, 'http://www.google.com');\n");
      out.write("            createButton(elemId, 'b2', 50, 25, 100, 40, 'CodeProject', '#0000FF', 12, '12pt Ariel', 10, highestDepth++, 1, 1,\n");
      out.write("                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,\n");
      out.write("                1, 'http://www.codeproject.com', 0, 1, 'CodeProject', '600', '400', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no');\n");
      out.write("            createButton(elemId, 'b3', 400, 300, 100, 40, 'Example 2', '#0000FF', 12, '12pt Ariel', 2, highestDepth, 0, 0,\n");
      out.write("                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,\n");
      out.write("                1, 'http://114.143.28.50/Default2.aspx');\n");
      out.write("            createButton(elemId, 'b4', 400, 350, 100, 40, 'Example 3', '#0000FF', 12, '12pt Ariel', 2, highestDepth, 0, 0,\n");
      out.write("                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,\n");
      out.write("                1, 'http://114.143.28.50/Default3.aspx');\n");
      out.write("            createButton(elemId, 'b5', 400, 390, 100, 40, 'Example 4', '#0000FF', 12, '12pt Ariel', 2, highestDepth, 0, 0,\n");
      out.write("                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,\n");
      out.write("                1, 'http://114.143.28.50/Default4.aspx');\n");
      out.write("            createButton(elemId, 'b6', 400, 430, 200, 40, 'Calenders Example', '#0000FF', 12, '12pt Ariel', 2, highestDepth, 0, 0,\n");
      out.write("                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,\n");
      out.write("                1, 'http://114.143.28.50/Calenders.aspx');\n");
      out.write("            createButton(elemId, 'b7', 400, 480, 300, 40, 'New Forms Based System Example', '#0000FF', 12, '12pt Ariel', 2, highestDepth, 0, 0,\n");
      out.write("                null, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null,\n");
      out.write("                1, 'http://114.143.28.50/FormsBased.aspx');\n");
      out.write("            createButton(elemId, 'b8', 500, 74, 250, 56, 'Custom Click Function', '#0000FF', 12, '12pt Ariel', 7, highestDepth, 2, 1,\n");
      out.write("                function (canvasid, windowid) {\n");
      out.write("                    invokeServerSideFunction('ajax.jsp', 'ClickMe', elemId, windowid, function (params) { alert(params); }, ['test1', 'test2']);\n");
      out.write("                }, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1');\n");
      out.write("            createLabel(elemId, 'l1', 150, 10, 100, 20, 'Label 1', '#000000', 12, '12pt Ariel', null, highestDepth);\n");
      out.write("            createGrid(elemId, 'g1', 10, 150, 400, 90, highestDepth, [['123567891011121314', 'abcdefghijklmnopqrst', '000-89843-8983459'], ['2356789101112131415', 'bcdefghijklmnopqrstu', '000-89843-8983459'],\n");
      out.write("                ['35678910111213141516', 'cdefghijklmnopqrstuv', '000-89843-8983459'], ['45678910111213141516', 'defghijklmnopqrstuv', '000-89843-8983459'],\n");
      out.write("                ['5678910111213141516', 'efghijklmnopqrstuv', '000-89843-8983459'], ['678910111213141516', 'fghijklmnopqrstuv', '000-89843-8983459']],\n");
      out.write("                ['Numbers', 'Alphabets', 'GUIDS'], '#000000', 12, '12pt Ariel', '#000000', 14, '14pt Ariel', null, null, function (canvasid, windowid, c, r) {\n");
      out.write("                    alert('you clicked cell number ' + c + ' at row number ' + r);\n");
      out.write("                }, 20, 30, [150, 150, 200], 1, '#b7bfc8', 1, '#fbfbfb', '#d9dde1', '#f6f8fb', '#e7e7e7', '#eaf1ff', '#d7e5ff');\n");
      out.write("            createComboBox(elemId, 'cb1', 10, 280, 200, 20, highestDepth, ['Mumbai','Pune','Juhu','Phoenix','London','New York','San Fransisco','Los Angeles','Houston','Boston'], null, null, null, null,\n");
      out.write("                null, '#364635', 10, '10pt Ariel', '#1b213b', 10, '10pt Ariel');\n");
      out.write("            createCheckbox(elemId, 'chk1', 150, 320, highestDepth, 0);\n");
      out.write("            createRadioButtonGroup(elemId, 'rg1', 10, 350, 0, highestDepth, 'test1', ['Dog', 'Cat', 'Horse', 'Cow', 'Giraffe'], 0, '#000000', '10pt Ariel', 10, 10);\n");
      out.write("            createImage(elemId, 'i1', 10, 400, 64, 64, highestDepth, 'test.png', function (canvasid, windowid) { alert('You clicked the image'); });\n");
      out.write("            createSimpleXMLViewer(elemId, 'sxmlvr1', 10, 500, 200, 250, highestDepth,\n");
      out.write("                '<root><Databases><Employees><Tables><Employee><Column ColumnName=\"id\">1</Column><Column ColumnName=\"FirstName\">Akshay</Column><Column ColumnName=\"MiddleName\"></Column><Column ColumnName=\"LastName\">Srinivasan</Column><Column ColumnName=\"EmpId\">42312345672892</Column></Employee></Tables></Employees></Databases></root>',\n");
      out.write("                '#000000', '12pt Ariel', 12, null, null, 1, 16, 16, 'Node.png', 'Value.png', 'Attribute.png');\n");
      out.write("            createTextBox(elemId, 'textbox1', 400, 10, 300, 60, highestDepth, 'Type your name here', '#F0F0F0', 18, '18pt Ariel', '#051329', 18, '18pt Ariel', 50, '[a-zA-Z ]', 0, null, 1, '#2e3642',\n");
      out.write("                1, 0, '#000000', 3, 3, 20, 1, 10, 1, '#9bacc6', '#d6e4f9', 0, 'Title.png', 1, ['India', 'America', 'China', 'Russia', 'Brazil'], 0, 0, '#D0D000', 12, '12pt Ariel', '', '#0d2952', 'rgba(0, 0, 240, 0.2)', 1);\n");
      out.write("            createVirtualKeyboard(elemId, 'vkb1', 300, 600, 360, 180, highestDepth, null, function (c, w, l) { alert(l); }, 5, 5, 1, 12, '12pt Ariel');\n");
      out.write("            createBoundaryFillableMap(elemId, 'bfm1', 800, 10, 500, 389, highestDepth, [[95, 155, 40, 130, 160, 185, 255, 255, 255, 255, 0, 0, 255, 255],\n");
      out.write("                [338, 180, 320, 160, 360, 205, 255, 255, 255, 255, 0, 255, 0, 255]], 'WorldMap.png', 500, 389);\n");
      out.write("            createBoundaryFillableMap(elemId, 'bfm1', 800, 10, 500, 389, highestDepth, [[95, 155, 40, 130, 160, 185, 255, 255, 255, 255, 0, 0, 255, 255],\n");
      out.write("                [338, 180, 320, 160, 360, 205, 255, 255, 255, 255, 0, 255, 0, 255]], 'WorldMap.png', 500, 389);\n");
      out.write("            createBoundaryFillableMap(elemId, 'bfm1', 800, 400, 500, 389, highestDepth, [[95, 155, 40, 130, 160, 185, 255, 255, 255, 255, 0, 0, 255, 255, 0, 40, 100],\n");
      out.write("                [338, 180, 320, 160, 360, 205, 255, 255, 255, 255, 0, 255, 0, 255]], 'WorldMap.png', 500, 389);\n");
      out.write("            createBoundaryFillableMap(elemId, 'bfm1', 800, 800, 500, 389, highestDepth, [[95, 155, 40, 130, 160, 185, 255, 255, 255, 255, 0, 0, 255, 255, 0, 100, 160],\n");
      out.write("                [338, 180, 320, 160, 360, 205, 255, 255, 255, 255, 0, 255, 0, 255]], 'WorldMap.png', 500, 389);\n");
      out.write("            //59,172,53\n");
      out.write("            createVotingControl(elemId, 'vc1', 450, 150, 300, 30, highestDepth, 5, 10, 59, 172, 53, 255, 0, 5, 1, 0, 1, 180, 21, '#000000', '12pt Ariel', 12, 0,\n");
      out.write("                0, 6.7, 1, 0, 0, 1, 'duckoutline.png', [15, 13, 0, 0, 30, 26, 255, 255, 255, 255, 59, 172, 53, 255], 30, 26, 0, 255, 255, 255, 255);\n");
      out.write("            createVotingControl(elemId, 'vc2', 450, 200, 300, 30, highestDepth, 5, 5, 213, 210, 0, 255, 30, 5, 1, 1, 1, 180, 21, '#000000', '12pt Ariel', 12, 0, 0,\n");
      out.write("                3.5, 1, 0, 0, 0, null, null, 30, 30, 0, 0, 0, 0, 0, function (canvasid, windowid, votingProps, clickx, clicky, value) {\n");
      out.write("                    votingProps.InitialValue = value;\n");
      out.write("                    invalidateRect(canvasid, null, votingProps.X, votingProps.Y, votingProps.Width, votingProps.Height);\n");
      out.write("                });\n");
      out.write("            createVotingControl(elemId, 'vc3', 450, 250, 300, 30, highestDepth, 5, 5, 59, 172, 53, 255, 0, 5, 1, 1, 1, 180, 21, '#000000', '12pt Ariel', 12, 0,\n");
      out.write("                0, 0.5, 1, 0, 0, 1, 'staroutline.png', [8, 8, 0, 0, 30, 26, 255, 255, 255, 255, 59, 172, 53, 255], 17, 17, 0, 255, 255, 255, 255, function (canvasid, windowid, votingProps, clickx, clicky, value) {\n");
      out.write("                    votingProps.InitialValue = value;\n");
      out.write("                    invalidateRect(canvasid, null, votingProps.X, votingProps.Y, votingProps.Width, votingProps.Height);\n");
      out.write("                }, 1);\n");
      out.write("            invalidateRect(elemId, null, 0, 0, 1500, 1500);\n");
      out.write("            alert(navigator.userAgent);\n");
      out.write("        </script>\n");
      out.write("        ");
      out.print( CanvasControlLibrary.StartSession() );
      out.write("\n");
      out.write("        </div>\n");
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
