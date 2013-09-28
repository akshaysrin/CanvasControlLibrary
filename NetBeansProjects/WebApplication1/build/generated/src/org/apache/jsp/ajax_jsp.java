package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import com.epic.canvascontrollibrary.MyPage;
import com.epic.canvascontrollibrary.CCLImageProps;
import com.epic.canvascontrollibrary.CCLTextBoxProps;
import com.epic.canvascontrollibrary.CCLButtonProps;
import com.epic.canvascontrollibrary.CCLComboBoxProps;
import com.epic.canvascontrollibrary.CCLScrollBarProps;
import com.epic.canvascontrollibrary.CCLLabelProps;
import java.io.OutputStreamWriter;
import java.io.BufferedWriter;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import java.io.InputStreamReader;
import java.io.BufferedReader;
import java.util.ArrayList;
import java.util.List;
import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.lang.reflect.Field;
import java.lang.reflect.InvocationTargetException;
import java.util.UUID;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.ServletOutputStream;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.ParserConfigurationException;
import org.w3c.dom.Document;
import org.w3c.dom.Node;
import org.xml.sax.SAXException;
import com.epic.canvascontrollibrary.CanvasControlLibrary;

public final class ajax_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");

    MyPage myPage = new MyPage();
    myPage.theater.add("Phoenix Mills");
    myPage.movies.add("Fantastic Four");
    myPage.movies.add("Ferris Bueller's Day Off");
    myPage.movies.add("Incredible Hulk");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Juhu");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("Iron Man");
    myPage.movies.add("Point Break");
    myPage.movies.add("Spider Man 2");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Nariman Point");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("Spider Man 4");
    myPage.movies.add("Spider Man 3");
    myPage.movies.add("The Avengers");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Chitrapur");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("Thor");
    myPage.movies.add("Wolverine");
    myPage.movies.add("X-Men First Class");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Khari Baoli");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("GI Joe Rise of Cobra");
    myPage.movies.add("The Avengers");
    myPage.movies.add("Wolverine");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Lakshmi Garden");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("Thor");
    myPage.movies.add("Point Break");
    myPage.movies.add("Iron Man");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Gandhi Nagar");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("Spider Man 2");
    myPage.movies.add("Incredible Hulk");
    myPage.movies.add("GI Joe Rise of Cobra");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Lake City");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("The Avengers");
    myPage.movies.add("X-Men First Class");
    myPage.movies.add("Iron Man");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Rajaji Nagar");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("Fantastic Four");
    myPage.movies.add("Wolverine");
    myPage.movies.add("Thor");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Harrington Road");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("The Avengers");
    myPage.movies.add("X-Men First Class");
    myPage.movies.add("Iron Man");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Boat Club");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("GI Joe Rise of Cobra");
    myPage.movies.add("Spider Man 3");
    myPage.movies.add("Incredible Hulk");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.theater = new ArrayList<Object>();
    myPage.theater.add("Chetpet");
    myPage.movies = new ArrayList<Object>();
    myPage.movies.add("Thor");
    myPage.movies.add("Fantastic Four");
    myPage.movies.add("The Avengers");
    myPage.theater.add(myPage.movies);
    myPage.movieIndexes.add(myPage.theater);
    myPage.ccl = new CanvasControlLibrary(new BufferedReader(new InputStreamReader(request.getInputStream())));
    myPage.ccl.InvokeServerSideFunction((Object)myPage);
    myPage.ccl.SendVars(new BufferedWriter(new OutputStreamWriter(response.getOutputStream())), myPage.parameters);

    
      out.write('\n');
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
