<%@page import="com.epic.canvascontrollibrary.MyPage"%>
<%@page import="com.epic.canvascontrollibrary.CCLImageProps"%>
<%@page import="com.epic.canvascontrollibrary.CCLTextBoxProps"%>
<%@page import="com.epic.canvascontrollibrary.CCLButtonProps"%>
<%@page import="com.epic.canvascontrollibrary.CCLComboBoxProps"%>
<%@page import="com.epic.canvascontrollibrary.CCLScrollBarProps"%>
<%@page import="com.epic.canvascontrollibrary.CCLLabelProps"%>
<%@page import="java.io.OutputStreamWriter"%>
<%@page import="java.io.BufferedWriter"%>
<%@page import="java.util.regex.Matcher"%>
<%@page import="java.util.regex.Pattern"%>
<%@page import="java.io.InputStreamReader"%>
<%@page import="java.io.BufferedReader"%>
<%@page import="java.util.ArrayList"%>
<%@page import="java.util.List"%>
<%@page import="java.io.ByteArrayInputStream"%>
<%@page import="java.io.IOException"%>
<%@page import="java.lang.reflect.Field"%>
<%@page import="java.lang.reflect.InvocationTargetException"%>
<%@page import="java.util.UUID"%>
<%@page import="java.util.logging.Level"%>
<%@page import="java.util.logging.Logger"%>
<%@page import="javax.servlet.ServletOutputStream"%>
<%@page import="javax.xml.parsers.DocumentBuilder"%>
<%@page import="javax.xml.parsers.DocumentBuilderFactory"%>
<%@page import="javax.xml.parsers.ParserConfigurationException"%>
<%@page import="org.w3c.dom.Document"%>
<%@page import="org.w3c.dom.Node"%>
<%@page import="org.xml.sax.SAXException"%>
<%@page import="com.epic.canvascontrollibrary.CanvasControlLibrary"%>


<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%
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

    %>
