package com.epic.canvascontrollibrary;

import java.io.BufferedWriter;
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
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.ParserConfigurationException;
import org.w3c.dom.Document;
import org.w3c.dom.Node;
import org.xml.sax.SAXException;


public class CanvasControlLibrary
{
    public Session CurrentSessionObj;
    public List<Object> InputParams;
    public List<CCLWindow> Windows = new ArrayList<CCLWindow>();
    public List<CCLLabelProps> LabelPropsArray = new ArrayList<CCLLabelProps>();
    public List<CCLButtonProps> ButtonPropsArray = new ArrayList<CCLButtonProps>();
    public List<CCLScrollBarProps> ScrollBarPropsArray = new ArrayList<CCLScrollBarProps>();
    public List<CCLGridProps> GridPropsArray = new ArrayList<CCLGridProps>();
    List<CCLComboBoxProps> ComboBoxPropsArray = new ArrayList<CCLComboBoxProps>();
    public List<CCLCheckBoxProps> CheckBoxPropsArray = new ArrayList<CCLCheckBoxProps>();
    public List<CCLRadioButtonGroupProps> RadioButtonGroupPropsArray = new ArrayList<CCLRadioButtonGroupProps>();
    public List<CCLImageProps> ImagePropsArray = new ArrayList<CCLImageProps>();
    public List<CCLTreeViewProps> TreeViewPropsArray = new ArrayList<CCLTreeViewProps>();
    public List<CCLCalenderProps> CalenderPropsArray = new ArrayList<CCLCalenderProps>();
    public List<CCLProgressBarProps> ProgressBarPropsArray = new ArrayList<CCLProgressBarProps>();
    public List<CCLSliderProps> SliderPropsArray = new ArrayList<CCLSliderProps>();
    public List<CCLDatePickerProps> DatePrickerPropsArray = new ArrayList<CCLDatePickerProps>();
    public List<CCLPanelProps> PanelPropsArray = new ArrayList<CCLPanelProps>();
    public List<CCLBarGraphProps> BarGraphPropsArray = new ArrayList<CCLBarGraphProps>();
    public List<CCLPieChartProps> PieChartPropsArray = new ArrayList<CCLPieChartProps>();
    public List<CCLLineGraphProps> LineGraphPropsArray = new ArrayList<CCLLineGraphProps>();
    public List<CCLGaugeChartProps> GaugeChartPropsArray = new ArrayList<CCLGaugeChartProps>();
    public List<CCLRadarGraphProps> RadarGraphPropsArray = new ArrayList<CCLRadarGraphProps>();
    public List<CCLLineAreaGraphProps> LineAreaGraphPropsArray = new ArrayList<CCLLineAreaGraphProps>();
    public List<CCLCandlesticksGraphProps> CandlesticksGraphPropsArray = new ArrayList<CCLCandlesticksGraphProps>();
    public List<CCLDoughnutChartProps> DoughnutChartPropsArray = new ArrayList<CCLDoughnutChartProps>();
    public List<CCLBarsMixedWithLabeledLineGraphProps> BarsMixedWithLabeledLineGraphPropsArray = new ArrayList<CCLBarsMixedWithLabeledLineGraphProps>();
    public List<CCLStackedBarGraphProps> StackedBarGraphPropsArray = new ArrayList<CCLStackedBarGraphProps>();
    public List<CCLTabProps> TabPropsArray = new ArrayList<CCLTabProps>();
    public List<CCLImageMapProps> ImageMapPropsArray = new ArrayList<CCLImageMapProps>();
    public List<CCLMenuBarProps> MenuBarPropsArray = new ArrayList<CCLMenuBarProps>();
    public List<CCLSubMenuBarProps> SubMenuBarPropsArray = new ArrayList<CCLSubMenuBarProps>();
    public List<CCLTextBoxProps> TextBoxPropsArray = new ArrayList<CCLTextBoxProps>();
    public List<CCLImageFaderProps> ImageFaderPropsArray = new ArrayList<CCLImageFaderProps>();
    public List<CCLImageSliderProps> ImageSliderPropsArray = new ArrayList<CCLImageSliderProps>();
    public List<CCLMultiLineLabelProps> MultiLineLabelPropsArray = new ArrayList<CCLMultiLineLabelProps>();
    public List<CCLWordProcessorProps> WordProcessorPropsArray = new ArrayList<CCLWordProcessorProps>();
    public List<CCLVirtualKeyboardProps> VirtualKeyboardPropsArray = new ArrayList<CCLVirtualKeyboardProps>();
    public List<CCLSplitterProps> SplitterPropsArray = new ArrayList<CCLSplitterProps>();
    public List<CCLBoundaryFillableMapProps> BoundaryFillableMapProps = new ArrayList<CCLBoundaryFillableMapProps>();
    public List<CCLSimpleXMLViewerProps> SimpleXMLViewerProps = new ArrayList<CCLSimpleXMLViewerProps>();
    public List<CCLVotingProps> VotingProps = new ArrayList<CCLVotingProps>();
    public List<JavaScriptFunctionsToSendAndAttachOnClientSide> JavaScriptCodeToSendInThisCall = new ArrayList<JavaScriptFunctionsToSendAndAttachOnClientSide>();
    public String FunctionName;
    public String CanvasID;
    public String WindowID;

    public CanvasControlLibrary(BufferedReader inputStream) throws SAXException
    {
        try {
            InputParams = new ArrayList<Object>();
            StringBuilder sb = new StringBuilder();
            String data = inputStream.readLine();
            sb.append(data);
            while(data != null){
                data = inputStream.readLine();
                sb.append(data);
            }
            String strData = sb.toString();
            strData = strData.replace("[", "<");
            strData = strData.replace("]", ">");
            strData = strData.replace("&lb;", "[");
            strData = strData.replace("&rb;", "]");
            strData = "<root>" + strData + "</root>";
            DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
            DocumentBuilder db;
                db = dbf.newDocumentBuilder();
            Document vars;
            vars = db.parse(new ByteArrayInputStream(strData.getBytes()));
            FunctionName = vars.getFirstChild().getChildNodes().item(0).getTextContent();
            CanvasID = vars.getFirstChild().getChildNodes().item(1).getTextContent();
            WindowID = vars.getFirstChild().getChildNodes().item(2).getTextContent();
            UnwrapVars(vars.getFirstChild().getChildNodes().item(3));
            UnwrapParams(vars.getFirstChild().getChildNodes().item(5));
            if (vars.getFirstChild().getChildNodes().item(4).getTextContent() != null && 
                    !"null".equals(vars.getFirstChild().getChildNodes().item(4).getTextContent()))
            {
                UUID tmp = UUID.fromString(vars.getFirstChild().getChildNodes().item(4).getTextContent());
                for (Session s : Sessions.SessionsData)
                {
                    if (s.ID.equals(tmp))
                    {
                        CurrentSessionObj = s;
                        break;
                    }
                }
            }
            JavaScriptCodeToSendInThisCall = new ArrayList<JavaScriptFunctionsToSendAndAttachOnClientSide>();
        } catch (IOException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        } catch(ParserConfigurationException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    /**
     *
     * @param node
     */
    private void UnwrapParams(Node node)
    {
        for (int i=0;i<node.getChildNodes().getLength();i++)
        {
            if ("Array".equals(node.getChildNodes().item(i).getNodeName()))
            {
                AddArrayData(node.getChildNodes().item(i), InputParams);
            }
            else if (node.getChildNodes().item(i).getChildNodes().getLength() == 1)
            {
                InputParams.add(node.getChildNodes().item(i).getTextContent());
            }
        }
    }

    public void InvokeServerSideFunction(Object Page)
    {
        try {
            Class[] cArg = new Class[2];
            cArg[0] = String.class;
            cArg[1] = int.class;
            java.lang.reflect.Method method = Page.getClass().getMethod(FunctionName, cArg);
            method.invoke(Page, CanvasID, Integer.parseInt(WindowID));
        } catch (NoSuchMethodException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        } catch(SecurityException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        } catch(IllegalAccessException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        } catch(IllegalArgumentException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        } catch(InvocationTargetException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public String DecodeXML(String str)
    {
        return str.replace("&lb;", "[").replace("&rb;", "]").replace("&amp;", "&");
    }

    /**
     *
     */
    public boolean recursiveExceptionForTreeViews;

    /**
     *
     * @param node
     */
    private void UnwrapVars(Node node)
    {
        for (int i=0;i < node.getChildNodes().getLength(); i++)
        {
            String tmp = node.getChildNodes().item(i).getNodeName();
            if("Windows".equals(tmp)){
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLWindow w = new CCLWindow();
                        Windows.add(w);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), w);
                    }
            } else if("labelPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLLabelProps l = new CCLLabelProps();
                        LabelPropsArray.add(l);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), l);
                    }
            } else if("buttonPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLButtonProps b = new CCLButtonProps();
                        ButtonPropsArray.add(b);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), b);
                    }
            } else if("scrollBarPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLScrollBarProps s = new CCLScrollBarProps();
                        ScrollBarPropsArray.add(s);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), s);
                    }
            } else if("gridPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLGridProps g = new CCLGridProps();
                        GridPropsArray.add(g);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), g);
                    }
            } else if("comboboxPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLComboBoxProps c = new CCLComboBoxProps();
                        ComboBoxPropsArray.add(c);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), c);
                    }
            } else if("checkboxPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLCheckBoxProps chk = new CCLCheckBoxProps();
                        CheckBoxPropsArray.add(chk);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), chk);
                    }
                    }
                else if("radiobuttonPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLRadioButtonGroupProps rg = new CCLRadioButtonGroupProps();
                        RadioButtonGroupPropsArray.add(rg);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), rg);
                    }
                    }
                else if("imageControlPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLImageProps img = new CCLImageProps();
                        ImagePropsArray.add(img);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), img);
                    }
                    }
                else if("treeViewPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLTreeViewProps tv = new CCLTreeViewProps();
                        TreeViewPropsArray.add(tv);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), tv);
                    }
                    }
                else if("calenderPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLCalenderProps cal = new CCLCalenderProps();
                        CalenderPropsArray.add(cal);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), cal);
                    }
                    }
                else if("progressBarPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLProgressBarProps pb = new CCLProgressBarProps();
                        ProgressBarPropsArray.add(pb);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), pb);
                    }
                    }
                else if("sliderPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLSliderProps s = new CCLSliderProps();
                        SliderPropsArray.add(s);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), s);
                    }
                    }
                else if("datePickerPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLDatePickerProps dp = new CCLDatePickerProps();
                        DatePrickerPropsArray.add(dp);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), dp);
                    }
                    }
                else if("panelPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLPanelProps p = new CCLPanelProps();
                        PanelPropsArray.add(p);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), p);
                    }
                    }
                else if("barGraphsPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLBarGraphProps bg = new CCLBarGraphProps();
                        BarGraphPropsArray.add(bg);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), bg);
                    }
                    }
                else if("pieChartsPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLPieChartProps pc = new CCLPieChartProps();
                        PieChartPropsArray.add(pc);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), pc);
                    }
                    }
                else if("lineGraphsPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLLineGraphProps lg = new CCLLineGraphProps();
                        LineGraphPropsArray.add(lg);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), lg);
                    }
                    }
                else if("gaugeChartPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLGaugeChartProps g = new CCLGaugeChartProps();
                        GaugeChartPropsArray.add(g);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), g);
                    }
                    }
                else if("radarGraphPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLRadarGraphProps r = new CCLRadarGraphProps();
                        RadarGraphPropsArray.add(r);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), r);
                    }
                    }
                else if("lineAreaGraphPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLLineAreaGraphProps la = new CCLLineAreaGraphProps();
                        LineAreaGraphPropsArray.add(la);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), la);
                    }
                    }
                else if("candlesticksGraphPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLCandlesticksGraphProps c = new CCLCandlesticksGraphProps();
                        CandlesticksGraphPropsArray.add(c);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), c);
                    }
                    }
                else if("doughnutChartPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLDoughnutChartProps d = new CCLDoughnutChartProps();
                        DoughnutChartPropsArray.add(d);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), d);
                    }
                    }
                else if("barsMixedWithLabledLineGraphsPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLBarsMixedWithLabeledLineGraphProps b = new CCLBarsMixedWithLabeledLineGraphProps();
                        BarsMixedWithLabeledLineGraphPropsArray.add(b);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), b);
                    }
                    }
                else if("stackedBarGraphPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLStackedBarGraphProps s = new CCLStackedBarGraphProps();
                        StackedBarGraphPropsArray.add(s);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), s);
                    }
                    }
                else if("tabPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLTabProps t = new CCLTabProps();
                        TabPropsArray.add(t);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), t);
                    }
                    }
                else if("imageMapPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLImageMapProps t = new CCLImageMapProps();
                        ImageMapPropsArray.add(t);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), t);
                    }
                    }
                else if("menuBarPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLMenuBarProps m = new CCLMenuBarProps();
                        MenuBarPropsArray.add(m);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), m);
                    }
                    }
                else if("subMenuBarPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLSubMenuBarProps sm = new CCLSubMenuBarProps();
                        SubMenuBarPropsArray.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("textBoxPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLTextBoxProps sm = new CCLTextBoxProps();
                        TextBoxPropsArray.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("imageFaderPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLImageFaderProps sm = new CCLImageFaderProps();
                        ImageFaderPropsArray.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("imageSliderPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLImageSliderProps sm = new CCLImageSliderProps();
                        ImageSliderPropsArray.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("multiLineLabelPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLMultiLineLabelProps sm = new CCLMultiLineLabelProps();
                        MultiLineLabelPropsArray.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("wordProcessorPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLWordProcessorProps sm = new CCLWordProcessorProps();
                        WordProcessorPropsArray.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("virtualKeyboardPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLVirtualKeyboardProps sm = new CCLVirtualKeyboardProps();
                        VirtualKeyboardPropsArray.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("splitterPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLSplitterProps sm = new CCLSplitterProps();
                        SplitterPropsArray.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("boundaryFillableMapPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLBoundaryFillableMapProps sm = new CCLBoundaryFillableMapProps();
                        BoundaryFillableMapProps.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("simpleXMLViewerPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLSimpleXMLViewerProps sm = new CCLSimpleXMLViewerProps();
                        SimpleXMLViewerProps.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
                else if("votingPropsArray".equals(tmp)) {
                    for (int j=0;j<node.getChildNodes().item(i).getChildNodes().getLength(); j++)
                    {
                        CCLVotingProps sm = new CCLVotingProps();
                        VotingProps.add(sm);
                        FillClassObject(node.getChildNodes().item(i).getChildNodes().item(j), sm);
                    }
                    }
        }
    }

    public LightWeightDictionary FillObjectArray(Node child)
    {
        LightWeightDictionary dict = new LightWeightDictionary();
        for (int i=0;i<child.getChildNodes().getLength();i++)
        {
            if (child.getChildNodes().item(i).getChildNodes().getLength() > 0 && 
                    "Array".equals(child.getChildNodes().item(i).getChildNodes().item(0).getNodeName()))
            {
                List<Object> al = new ArrayList<Object>();
                for (int j=0; j<child.getChildNodes().item(i).getChildNodes().item(0).getChildNodes().getLength();j++)
                {
                    if ("Array".equals(child.getChildNodes().item(i).getChildNodes().item(0).getChildNodes().item(j).getNodeName()))
                    {
                        AddArrayData(child.getChildNodes().item(i).getChildNodes().item(0).getChildNodes().item(j), al);
                    }
                    else if (child.getChildNodes().item(i).getChildNodes().item(0).getChildNodes().item(j).getChildNodes().getLength() == 1)
                    {
                        if ("ObjectArray".equals(child.getChildNodes().item(i).getChildNodes().item(0).getChildNodes().item(j).getChildNodes().item(0).getNodeName()))
                        {
                            al.add(FillObjectArray(child.getChildNodes().item(i).getChildNodes().item(0).getChildNodes().item(j).getChildNodes().item(0)));
                        }
                        else
                        {
                            al.add(child.getChildNodes().item(i).getChildNodes().item(0).getChildNodes().item(j).getTextContent());
                        }
                    }
                }
                dict.Add(child.getChildNodes().item(i).getNodeName(), al);
            }
            else
            {
                dict.Add(child.getChildNodes().item(i).getNodeName(), child.getChildNodes().item(i).getTextContent());
            }
        }
        return dict;
    }

    public void FillClassObject(Node child2, Object g)
    {
            try {
        for (int i=0;i<child2.getChildNodes().getLength();i++)
        {
                Field f = g.getClass().getField(child2.getChildNodes().item(i).getNodeName());
                if (f != null)
                {
                    if (child2.getChildNodes().item(i).getChildNodes().getLength() > 0 && 
                            "ObjectArray".equals(child2.getChildNodes().item(i).getChildNodes().item(0).getNodeName()))
                    {
                        f.set(g, FillObjectArray(child2.getChildNodes().item(i).getChildNodes().item(0)));
                    }
                    else if (child2.getChildNodes().item(i).getChildNodes().getLength() == 1 && 
                            "Array".equals(child2.getChildNodes().item(i).getChildNodes().item(0).getNodeName()))
                    {
                        List<Object> al = new ArrayList<Object>();
                        AddArrayData(child2.getChildNodes().item(i).getChildNodes().item(0), al);
                        f.set(g, al);
                    }
                    else if (child2.getChildNodes().item(i).getChildNodes().getLength() > 1 || 
                            (child2.getChildNodes().item(i).getChildNodes().getLength() != 0 && 
                            "i".equals(child2.getChildNodes().item(i).getChildNodes().item(0).getNodeName())))
                    {
                        List<Object> al = new ArrayList<Object>();
                        for (int j=0;j<child2.getChildNodes().item(i).getChildNodes().getLength();j++)
                        {
                            if ("Array".equals(child2.getChildNodes().item(i).getChildNodes().item(j).getNodeName()))
                            {
                                AddArrayData(child2.getChildNodes().item(i).getChildNodes().item(j), al);
                            }
                            else if (child2.getChildNodes().item(i).getChildNodes().item(j).getChildNodes().getLength() == 1)
                            {
                                if ("ObjectArray".equals(child2.getChildNodes().item(i).getChildNodes().item(j).getChildNodes().item(0).getNodeName()))
                                {
                                    al.add(FillObjectArray(child2.getChildNodes().item(i).getChildNodes().item(j).getChildNodes().item(0)));
                                }
                                else
                                {
                                    al.add(child2.getChildNodes().item(i).getChildNodes().item(j).getTextContent());
                                }
                            }
                        }
                        f.set(g, al);
                    }
                    else if (child2.getChildNodes().item(i).getChildNodes().getLength() == 1 && 
                            !"i".equals(child2.getChildNodes().item(i).getChildNodes().item(0).getNodeName()))
                    {
                        f.set(g, DecodeXML(child2.getChildNodes().item(i).getTextContent()));
                    }
                }
        }
            } catch (NoSuchFieldException ex) {
                Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
            } catch(SecurityException ex) {
                Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
            } catch(IllegalArgumentException ex) {
                Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
            } catch(IllegalAccessException ex) {
                Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
            }
    }

    public void AddArrayData(Node node, List<Object> pal)
    {
        for (int i=0; i< node.getChildNodes().getLength();i++)
        {
            if (node.getChildNodes().item(i).getChildNodes().getLength() > 0 && 
                    "ObjectArray".equals(node.getChildNodes().item(i).getChildNodes().item(0).getNodeName()))
            {
                pal.add(FillObjectArray(node.getChildNodes().item(i).getChildNodes().item(0)));
            }
            else if (node.getChildNodes().item(i).getChildNodes().getLength() > 0 && 
                    "Array".equals(node.getChildNodes().item(i).getChildNodes().item(0).getNodeName()))
            {
                List<Object> al = new ArrayList<Object>();
                AddArrayData(node.getChildNodes().item(i).getChildNodes().item(0), al);
                pal.add(al);
            }
            else if (node.getChildNodes().item(i).getChildNodes().getLength() == 1)
            {
                pal.add(node.getChildNodes().item(i).getTextContent());
            }
            else if (node.getChildNodes().item(i).getChildNodes().getLength() > 1)
            {
                List<Object> al = new ArrayList<Object>();
                AddArrayData(node.getChildNodes().item(i), al);
                pal.add(al);
            }
            else
            {
                pal.add("");
            }
        }
    }

    public String recurseArrayList(List<Object> al)
    {
        try{
        StringBuilder str = new StringBuilder();
        for (Object obj : al)
        {
            if (obj instanceof LightWeightDictionary)
            {
                str.append("[i]").append(recurseDictionary((LightWeightDictionary)obj)).append("[/i]");
            }
            else if (obj instanceof List<?>)
            {
                str.append("[i][Array]").append(recurseArrayList((List<Object>)obj)).append("[/Array][/i]");
            }
            else
            {
                str.append("[i]").append(encodeString(obj.toString())).append("[/i]");
            }
        }
        return str.toString();
        }catch(Exception ex){
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
    }

    public String encodeString(String str)
    {
        return str.replace("&", "&amp;").replace("\"", "&quot;").replace("'", "&apos;").replace("[", "&lb;").replace("]", "&rb;").replace("<", "&lt;").replace(">", "&gt;");
    }

    public String encodeObject(Object o)
    {
        try{
            StringBuilder str = new StringBuilder();
            Field[] fields = o.getClass().getFields();
            for(int i=0;i<fields.length;i++){
                if(fields[i].get(o) instanceof List<?>){
                    List<Object> al = (List<Object>) fields[i].get(o);
                    str.append("[").append(fields[i].getName()).append("][Array]");
                    for(Object obj : al){
                        if(obj instanceof List<?>){
                            str.append("[i][Array]").append(recurseArrayList((List<Object>)obj)).append("[/Array][/i]");
                        } else if(obj instanceof LightWeightDictionary){
                            str.append("[i]").append(recurseDictionary((LightWeightDictionary)obj)).append("[/i]");
                        } else {
                            str.append("[i]").append(encodeString(obj.toString())).append("[/i]");
                        }
                    }
                    str.append("[/Array][/").append(fields[i].getName()).append("]");
                } else if(fields[i].get(o) instanceof LightWeightDictionary){
                    str.append(recurseDictionary((LightWeightDictionary)fields[i].get(o)));
                } else {
                    str.append("[").append(fields[i].getName()).append("]").append((fields[i].get(o) != null && 
                            fields[i].get(o).toString().length() > 0 ? encodeString(fields[i].get(o).toString()) : ""
                            )).append("[/").append(fields[i].getName()).append("]");
                }
            }
            return str.toString();
        } catch(SecurityException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        } catch(IllegalArgumentException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        } catch(IllegalAccessException ex){
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
    }

    public String recurseDictionary(LightWeightDictionary dict)
    {
        StringBuilder str = new StringBuilder();
        str.append("[ObjectArray]");
        for (String key : dict.GetAllKeys())
        {
            str.append("[").append(key).append("]");
            Object dictvalue = dict.GetValue(key);
            if (dictvalue instanceof List<?>)
            {
                str.append(recurseArrayList((List<Object>)dictvalue));
            }
            else if (dictvalue instanceof LightWeightDictionary)
            {
                str.append(recurseDictionary((LightWeightDictionary)dictvalue));
            }
            else
            {
                str.append(dictvalue.toString());
            }
            str.append("[/").append(key).append("]");
        }
        str.append("[/ObjectArray]");
        return str.toString();
    }

    /**
     *
     * @param OutputStream
     * @param parameters
     */
    public void SendVars(BufferedWriter OutputStream, List<Object> parameters)
    {
        try {
            StringBuilder strVars = new StringBuilder();
            strVars.append("[root][Vars][windows]");
            for (CCLWindow w : Windows)
            {
                strVars.append("[i]").append(encodeObject(w)).append("[/i]");
            }
            strVars.append("[/windows][labelPropsArray]");
            for (CCLLabelProps l : LabelPropsArray)
            {
                strVars.append("[i]").append(encodeObject(l)).append("[/i]");
            }
            strVars.append("[/labelPropsArray][buttonPropsArray]");
            for (CCLButtonProps b : ButtonPropsArray)
            {
                strVars.append("[i]").append(encodeObject(b)).append("[/i]");
            }
            strVars.append("[/buttonPropsArray][scrollBarPropsArray]");
            for (CCLScrollBarProps s : ScrollBarPropsArray)
            {
                strVars.append("[i]").append(encodeObject(s)).append("[/i]");
            }
            strVars.append("[/scrollBarPropsArray][gridPropsArray]");
            for (CCLGridProps g : GridPropsArray)
            {
                strVars.append("[i]").append(encodeObject(g)).append("[/i]");
            }
            strVars.append("[/gridPropsArray][comboboxPropsArray]");
            for (CCLComboBoxProps c : ComboBoxPropsArray)
            {
                strVars.append("[i]").append(encodeObject(c)).append("[/i]");
            }
            strVars.append("[/comboboxPropsArray][checkboxPropsArray]");
            for (CCLCheckBoxProps chk : CheckBoxPropsArray)
            {
                strVars.append("[i]").append(encodeObject(chk)).append("[/i]");
            }
            strVars.append("[/checkboxPropsArray][radiobuttonPropsArray]");
            for (CCLRadioButtonGroupProps r : RadioButtonGroupPropsArray)
            {
                strVars.append("[i]").append(encodeObject(r)).append("[/i]");
            }
            strVars.append("[/radiobuttonPropsArray][imageControlPropsArray]");
            for (CCLImageProps i : ImagePropsArray)
            {
                strVars.append("[i]").append(encodeObject(i)).append("[/i]");
            }
            strVars.append("[/imageControlPropsArray][treeViewPropsArray]");
            for (CCLTreeViewProps t : TreeViewPropsArray)
            {
                strVars.append("[i]").append(encodeObject(t)).append("[/i]");
            }
            strVars.append("[/treeViewPropsArray][calenderPropsArray]");
            for (CCLCalenderProps cal : CalenderPropsArray)
            {
                strVars.append("[i]").append(encodeObject(cal)).append("[/i]");
            }
            strVars.append("[/calenderPropsArray][progressBarPropsArray]");
            for (CCLProgressBarProps pb : ProgressBarPropsArray)
            {
                strVars.append("[i]").append(encodeObject(pb)).append("[/i]");
            }
            strVars.append("[/progressBarPropsArray][sliderPropsArray]");
            for (CCLSliderProps sl : SliderPropsArray)
            {
                strVars.append("[i]").append(encodeObject(sl)).append("[/i]");
            }
            strVars.append("[/sliderPropsArray][datePickerPropsArray]");
            for (CCLDatePickerProps dp : DatePrickerPropsArray)
            {
                strVars.append("[i]").append(encodeObject(dp)).append("[/i]");
            }
            strVars.append("[/datePickerPropsArray][panelPropsArray]");
            for (CCLPanelProps pp : PanelPropsArray)
            {
                strVars.append("[i]").append(encodeObject(pp)).append("[/i]");
            }
            strVars.append("[/panelPropsArray][barGraphsPropsArray]");
            for (CCLBarGraphProps bg : BarGraphPropsArray)
            {
                strVars.append("[i]").append(encodeObject(bg)).append("[/i]");
            }
            strVars.append("[/barGraphsPropsArray][pieChartsPropsArray]");
            for (CCLPieChartProps pc : PieChartPropsArray)
            {
                strVars.append("[i]").append(encodeObject(pc)).append("[/i]");
            }
            strVars.append("[/pieChartsPropsArray][lineGraphsPropsArray]");
            for (CCLLineGraphProps lg : LineGraphPropsArray)
            {
                strVars.append("[i]").append(encodeObject(lg)).append("[/i]");
            }
            strVars.append("[/lineGraphsPropsArray][gaugeChartPropsArray]");
            for (CCLGaugeChartProps gc : GaugeChartPropsArray)
            {
                strVars.append("[i]").append(encodeObject(gc)).append("[/i]");
            }
            strVars.append("[/gaugeChartPropsArray][radarGraphPropsArray]");
            for (CCLRadarGraphProps rg : RadarGraphPropsArray)
            {
                strVars.append("[i]").append(encodeObject(rg)).append("[/i]");
            }
            strVars.append("[/radarGraphPropsArray][lineAreaGraphPropsArray]");
            for (CCLLineAreaGraphProps lag : LineAreaGraphPropsArray)
            {
                strVars.append("[i]").append(encodeObject(lag)).append("[/i]");
            }
            strVars.append("[/lineAreaGraphPropsArray][candlesticksGraphPropsArray]");
            for (CCLCandlesticksGraphProps cs : CandlesticksGraphPropsArray)
            {
                strVars.append("[i]").append(encodeObject(cs)).append("[/i]");
            }
            strVars.append("[/candlesticksGraphPropsArray][doughnutChartPropsArray]");
            for (CCLDoughnutChartProps dc : DoughnutChartPropsArray)
            {
                strVars.append("[i]").append(encodeObject(dc)).append("[/i]");
            }
            strVars.append("[/doughnutChartPropsArray][barsMixedWithLabledLineGraphsPropsArray]");
            for (CCLBarsMixedWithLabeledLineGraphProps bm : BarsMixedWithLabeledLineGraphPropsArray)
            {
                strVars.append("[i]").append(encodeObject(bm)).append("[/i]");
            }
            strVars.append("[/barsMixedWithLabledLineGraphsPropsArray][stackedBarGraphPropsArray]");
            for (CCLStackedBarGraphProps sb : StackedBarGraphPropsArray)
            {
                strVars.append("[i]").append(encodeObject(sb)).append("[/i]");
            }
            strVars.append("[/stackedBarGraphPropsArray][tabPropsArray]");
            for (CCLTabProps tb : TabPropsArray)
            {
                strVars.append("[i]").append(encodeObject(tb)).append("[/i]");
            }
            strVars.append("[/tabPropsArray][imageMapPropsArray]");
            for (CCLImageMapProps im : ImageMapPropsArray)
            {
                strVars.append("[i]").append(encodeObject(im)).append("[/i]");
            }
            strVars.append("[/imageMapPropsArray][menuBarPropsArray]");
            for (CCLMenuBarProps mb : MenuBarPropsArray)
            {
                strVars.append("[i]").append(encodeObject(mb)).append("[/i]");
            }
            strVars.append("[/menuBarPropsArray][subMenuBarPropsArray]");
            for (CCLSubMenuBarProps smb : SubMenuBarPropsArray)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/subMenuBarPropsArray][textBoxPropsArray]");
            for (CCLTextBoxProps smb : TextBoxPropsArray)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/textBoxPropsArray][imageFaderPropsArray]");
            for (CCLImageFaderProps smb : ImageFaderPropsArray)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/imageFaderPropsArray][imageSliderPropsArray]");
            for (CCLImageSliderProps smb : ImageSliderPropsArray)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/imageSliderPropsArray][multiLineLabelPropsArray]");
            for (CCLMultiLineLabelProps smb : MultiLineLabelPropsArray)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/multiLineLabelPropsArray][wordProcessorPropsArray]");
            for (CCLWordProcessorProps smb : WordProcessorPropsArray)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/wordProcessorPropsArray][virtualKeyboardPropsArray]");
            for (CCLVirtualKeyboardProps smb : VirtualKeyboardPropsArray)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/virtualKeyboardPropsArray][splitterPropsArray]");
            for (CCLSplitterProps smb : SplitterPropsArray)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/splitterPropsArray][boundaryFillableMapPropsArray]");
            for (CCLBoundaryFillableMapProps smb : BoundaryFillableMapProps)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/boundaryFillableMapPropsArray][simpleXMLViewerPropsArray]");
            for (CCLSimpleXMLViewerProps smb : SimpleXMLViewerProps)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/simpleXMLViewerPropsArray][votingPropsArray]");
            for (CCLVotingProps smb : VotingProps)
            {
                strVars.append("[i]").append(encodeObject(smb)).append("[/i]");
            }
            strVars.append("[/votingPropsArray]");
            strVars.append("[/Vars][Params][Array]").append(encodeParameters(parameters)).append("[/Array][/Params][/root]");
            OutputStream.write(strVars.toString());
            OutputStream.close();
        } catch (IOException ex) {
            Logger.getLogger(CanvasControlLibrary.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public String encodeParameters(List<Object> parameters)
    {
        StringBuilder strParameters = new StringBuilder();
        for (Object obj : parameters)
        {
            if (obj != null && obj instanceof List<?>)
            {
                strParameters.append("[Array]").append(encodeParameters((List<Object>)obj)).append("[/Array]");
            }
            else
            {
                strParameters.append("[i]").append((obj == null ? "" : encodeString(obj.toString()))).append("[/i]");
            }
        }
        return strParameters.toString();
    }

    public CCLWindow getWindowProps(String canvasid, String windowid)
    {
        for (CCLWindow w : Windows)
        {
            if (w.WindowCount.equals(windowid) && w.CanvasID.equals(canvasid))
            {
                return w;
            }
        }
        return null;
    }

    public Object getControlPropsByWindowID(String canvasid, String windowid)
    {
        for (CCLWindow w : Windows)
        {
            if (w.WindowCount.equals(windowid) && w.CanvasID.equals(canvasid))
            {
                return getControlPropsByControlNameID(w.ControlNameID);
            }
        }
        return null;
    }

    public Object getControlPropsByControlNameID(String controlNameID)
    {
        for (CCLWindow w : Windows)
        {
            if (w.ControlNameID != null && w.ControlNameID.equals(controlNameID))
            {
                    if("Label".equals(w.ControlType)) {
                        for (CCLLabelProps o : LabelPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
        }
                    else if("Button".equals(w.ControlType)) {
                        for (CCLButtonProps o : ButtonPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("ScrollBar".equals(w.ControlType)) {
                        for (CCLScrollBarProps o : ScrollBarPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("Grid".equals(w.ControlType)) {
                        for (CCLGridProps o : GridPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("ComboBoxTextArea".equals(w.ControlType)) {
                        for (CCLComboBoxProps o : ComboBoxPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("CheckBox".equals(w.ControlType)) {
                        for (CCLCheckBoxProps o : CheckBoxPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("RadioButtonGroup".equals(w.ControlType)) {
                        for (CCLRadioButtonGroupProps o : RadioButtonGroupPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("Image".equals(w.ControlType)) {
                        for (CCLImageProps o : ImagePropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("TreeView".equals(w.ControlType)) {
                        for (CCLTreeViewProps o : TreeViewPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("Calender".equals(w.ControlType)) {
                        for (CCLCalenderProps o : CalenderPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("ProgressBar".equals(w.ControlType)) {
                        for (CCLProgressBarProps o : ProgressBarPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("Slider".equals(w.ControlType)) {
                        for (CCLSliderProps o : SliderPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("DatePickerTextArea".equals(w.ControlType)) {
                        for (CCLDatePickerProps o : DatePrickerPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("Panel".equals(w.ControlType)) {
                        for (CCLPanelProps o : PanelPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("BarGraph".equals(w.ControlType)) {
                        for (CCLBarGraphProps o : BarGraphPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("PieChart".equals(w.ControlType)) {
                        for (CCLPieChartProps o : PieChartPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("LineGraph".equals(w.ControlType)) {
                        for (CCLLineGraphProps o : LineGraphPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("Gauge".equals(w.ControlType)) {
                        for (CCLGaugeChartProps o : GaugeChartPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("RadarGraph".equals(w.ControlType)) {
                        for (CCLRadarGraphProps o : RadarGraphPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("LineAreaGraph".equals(w.ControlType)) {
                        for (CCLLineAreaGraphProps o : LineAreaGraphPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("CandlesticksGraph".equals(w.ControlType)) {
                        for (CCLCandlesticksGraphProps o : CandlesticksGraphPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("DoughnutChart".equals(w.ControlType)) {
                        for (CCLDoughnutChartProps o : DoughnutChartPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("BarsMixedWithLabeledLineGraph".equals(w.ControlType)) {
                        for (CCLBarsMixedWithLabeledLineGraphProps o : BarsMixedWithLabeledLineGraphPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("StackedBarGraph".equals(w.ControlType)) {
                        for (CCLStackedBarGraphProps o : StackedBarGraphPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("Tab".equals(w.ControlType)) {
                        for (CCLTabProps o : TabPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("ImageMap".equals(w.ControlType)) {
                        for (CCLImageMapProps o : ImageMapPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("SubMenu".equals(w.ControlType)) {
                        for (CCLSubMenuBarProps o : SubMenuBarPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("MenuBar".equals(w.ControlType)) {
                        for (CCLMenuBarProps o : MenuBarPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("TextBox".equals(w.ControlType)) {
                        for (CCLTextBoxProps o : TextBoxPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("ImageFader".equals(w.ControlType)) {
                        for (CCLImageFaderProps o : ImageFaderPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("ImageSlider".equals(w.ControlType)) {
                        for (CCLImageSliderProps o : ImageSliderPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("MultiLineLabel".equals(w.ControlType)) {
                        for (CCLMultiLineLabelProps o : MultiLineLabelPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("WordProcessor".equals(w.ControlType)) {
                        for (CCLWordProcessorProps o : WordProcessorPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("VirtualKeyboard".equals(w.ControlType)) {
                        for (CCLVirtualKeyboardProps o : VirtualKeyboardPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("Splitter".equals(w.ControlType)) {
                        for (CCLSplitterProps o : SplitterPropsArray)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("BoundaryFillableMap".equals(w.ControlType)) {
                        for (CCLBoundaryFillableMapProps o : BoundaryFillableMapProps)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                    else if("VotingControl".equals(w.ControlType)) {
                        for (CCLVotingProps o : VotingProps)
                        {
                            if (o.CanvasID.equals(w.CanvasID) && o.WindowID.equals(w.WindowCount))
                            {
                                return (Object)o;
                            }
                        }
                        }
                }
        }
        return null;
    }
    /*
    public void DestroyControl(String canvasid, String windowid)
    {
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].CanvasID == canvasid && Windows[i].WindowCount == windowid)
            {
                DestroyControlByWindowObj(Windows[i]);
            }
        }
    }

    public void DestroyControlByNameID(String controlNameID)
    {
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].ControlNameID == controlNameID)
            {
                DestroyControlByWindowObj(Windows[i]);
            }
        }
    }

    public void DestroyWindow(String canvasid, String windowid)
    {
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].CanvasID == canvasid && windowid == Windows[i].WindowCount)
            {
                Windows.RemoveAt(i);
                return;
            }
        }
    }

    public void DestroyAllCurrentControls(String canvasid)
    {
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].CanvasID == canvasid)
            {
                DestroyControlByWindowObj(Windows[i]);
            }
        }
    }

    public void DestroyControlByWindowObj(CCLWindow w)
    {
        for (int i = 0; i < w.ChildWindowIDs.Count; i++)
        {
            for (var x = 0; x < Windows.Count; x++)
            {
                if (Windows[x].CanvasID == w.CanvasID && Windows[x].WindowCount == w.ChildWindowIDs[i].ToString())
                {
                    DestroyControlByWindowObj(Windows[x]);
                }
            }
        }
        switch (w.ControlType)
        {
            case "Label":
                for (int i = LabelPropsArray.Count - 1; i >= 0; i--)
                {
                    if (LabelPropsArray[i].CanvasID == w.CanvasID && LabelPropsArray[i].WindowID == w.WindowCount)
                    {
                        LabelPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "Button":
                for (int i = ButtonPropsArray.Count - 1; i >= 0; i--)
                {
                    if (ButtonPropsArray[i].CanvasID == w.CanvasID && ButtonPropsArray[i].WindowID == w.WindowCount)
                    {
                        ButtonPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "ScrollBar":
                for (int i = ScrollBarPropsArray.Count - 1; i >= 0; i--)
                {
                    if (ScrollBarPropsArray[i].CanvasID == w.CanvasID && ScrollBarPropsArray[i].WindowID == w.WindowCount)
                    {
                        ScrollBarPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "Grid":
                for (int i = GridPropsArray.Count - 1; i >= 0; i--)
                {
                    if (GridPropsArray[i].CanvasID == w.CanvasID && GridPropsArray[i].WindowID == w.WindowCount)
                    {
                        GridPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "ComboBoxTextArea":
                for (int i = ComboBoxPropsArray.Count - 1; i >= 0; i--)
                {
                    if (ComboBoxPropsArray[i].CanvasID == w.CanvasID && ComboBoxPropsArray[i].WindowID == w.WindowCount)
                    {
                        DestroyWindow(w.CanvasID, ComboBoxPropsArray[i].ButtonWindowID);
                        DestroyWindow(w.CanvasID, ComboBoxPropsArray[i].ListAreaWindowID);
                        ComboBoxPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "CheckBox":
                for (int i = CheckBoxPropsArray.Count - 1; i >= 0; i--)
                {
                    if (CheckBoxPropsArray[i].CanvasID == w.CanvasID && CheckBoxPropsArray[i].WindowID == w.WindowCount)
                    {
                        CheckBoxPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "RadioButtonGroup":
                for (int i = RadioButtonGroupPropsArray.Count - 1; i >= 0; i--)
                {
                    if (RadioButtonGroupPropsArray[i].CanvasID == w.CanvasID && RadioButtonGroupPropsArray[i].WindowID == w.WindowCount)
                    {
                        RadioButtonGroupPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "Image":
                for (int i = ImagePropsArray.Count - 1; i >= 0; i--)
                {
                    if (ImagePropsArray[i].CanvasID == w.CanvasID && ImagePropsArray[i].WindowID == w.WindowCount)
                    {
                        ImagePropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "TreeView":
                for (int i = TreeViewPropsArray.Count - 1; i >= 0; i--)
                {
                    if (TreeViewPropsArray[i].CanvasID == w.CanvasID && TreeViewPropsArray[i].WindowID == w.WindowCount)
                    {
                        TreeViewPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "Calender":
                for (int i = CalenderPropsArray.Count - 1; i >= 0; i--)
                {
                    if (CalenderPropsArray[i].CanvasID == w.CanvasID && CalenderPropsArray[i].WindowID == w.WindowCount)
                    {
                        CalenderPropsArray.RemoveAt(i);
                    }
                }
                break;
            case "ProgressBar":
                for (int i = ProgressBarPropsArray.Count - 1; i >= 0; i--)
                {
                    if (ProgressBarPropsArray[i].CanvasID == w.CanvasID && ProgressBarPropsArray[i].WindowID == w.WindowCount)
                    {
                        ProgressBarPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "Slider":
                for (int i = SliderPropsArray.Count - 1; i >= 0; i--)
                {
                    if (SliderPropsArray[i].CanvasID == w.CanvasID && SliderPropsArray[i].WindowID == w.WindowCount)
                    {
                        SliderPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "DatePickerTextArea":
                for (int i = DatePrickerPropsArray.Count - 1; i >= 0; i--)
                {
                    if (DatePrickerPropsArray[i].CanvasID == w.CanvasID && DatePrickerPropsArray[i].WindowID == w.WindowCount)
                    {
                        DestroyWindow(w.CanvasID, DatePrickerPropsArray[i].ButtonWindowID);
                        DestroyControl(w.CanvasID, DatePrickerPropsArray[i].CalenderWindowID);
                        DatePrickerPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "Panel":
                for (int i = PanelPropsArray.Count - 1; i >= 0; i--)
                {
                    if (PanelPropsArray[i].CanvasID == w.CanvasID && PanelPropsArray[i].WindowID == w.WindowCount)
                    {
                        PanelPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "BarGraph":
                for (int i = BarGraphPropsArray.Count - 1; i >= 0; i--)
                {
                    if (BarGraphPropsArray[i].CanvasID == w.CanvasID && BarGraphPropsArray[i].WindowID == w.WindowCount)
                    {
                        BarGraphPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "PieChart":
                for (int i = PieChartPropsArray.Count - 1; i >= 0; i--)
                {
                    if (PieChartPropsArray[i].CanvasID == w.CanvasID && PieChartPropsArray[i].WindowID == w.WindowCount)
                    {
                        PieChartPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "LineGraph":
                for (int i = LineGraphPropsArray.Count - 1; i >= 0; i--)
                {
                    if (LineGraphPropsArray[i].CanvasID == w.CanvasID && LineGraphPropsArray[i].WindowID == w.WindowCount)
                    {
                        LineGraphPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "Gauge":
                for (int i = GaugeChartPropsArray.Count - 1; i >= 0; i--)
                {
                    if (GaugeChartPropsArray[i].CanvasID == w.CanvasID && GaugeChartPropsArray[i].WindowID == w.WindowCount)
                    {
                        GaugeChartPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "RadarGraph":
                for (var i = RadarGraphPropsArray.Count - 1; i >= 0; i--)
                {
                    if (RadarGraphPropsArray[i].CanvasID == w.CanvasID && RadarGraphPropsArray[i].WindowID == w.WindowCount)
                    {
                        RadarGraphPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "LineAreaGraph":
                for (var i = LineAreaGraphPropsArray.Count - 1; i >= 0; i--)
                {
                    if (LineAreaGraphPropsArray[i].CanvasID == w.CanvasID && LineAreaGraphPropsArray[i].WindowID == w.WindowCount)
                    {
                        LineAreaGraphPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "CandlesticksGraph":
                for (var i = CandlesticksGraphPropsArray.Count - 1; i >= 0; i--)
                {
                    if (CandlesticksGraphPropsArray[i].CanvasID == w.CanvasID && CandlesticksGraphPropsArray[i].WindowID == w.WindowCount)
                    {
                        CandlesticksGraphPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "DoughnutChart":
                for (var i = DoughnutChartPropsArray.Count - 1; i >= 0; i--)
                {
                    if (DoughnutChartPropsArray[i].CanvasID == w.CanvasID && DoughnutChartPropsArray[i].WindowID == w.WindowCount)
                    {
                        DoughnutChartPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "BarsMixedWithLabeledLineGraph":
                for (var i = BarsMixedWithLabeledLineGraphPropsArray.Count - 1; i >= 0; i--)
                {
                    if (BarsMixedWithLabeledLineGraphPropsArray[i].CanvasID == w.CanvasID && BarsMixedWithLabeledLineGraphPropsArray[i].WindowID == w.WindowCount)
                    {
                        BarsMixedWithLabeledLineGraphPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "StackedBarGraph":
                for (var i = StackedBarGraphPropsArray.Count - 1; i >= 0; i--)
                {
                    if (StackedBarGraphPropsArray[i].CanvasID == w.CanvasID && StackedBarGraphPropsArray[i].WindowID == w.WindowCount)
                    {
                        StackedBarGraphPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "Tab":
                for (var i = TabPropsArray.Count - 1; i >= 0; i--)
                {
                    if (TabPropsArray[i].CanvasID == w.CanvasID && TabPropsArray[i].WindowID == w.WindowCount)
                    {
                        TabPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "ImageMap":
                for (var i = ImageMapPropsArray.Count - 1; i >= 0; i--)
                {
                    if (ImageMapPropsArray[i].CanvasID == w.CanvasID && ImageMapPropsArray[i].WindowID == w.WindowCount)
                    {
                        ImageMapPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "SubMenu":
                for (var i = SubMenuBarPropsArray.Count - 1; i >= 0; i--)
                {
                    if (SubMenuBarPropsArray[i].CanvasID == w.CanvasID && SubMenuBarPropsArray[i].WindowID == w.WindowCount)
                    {
                        for (var y = 0; y < SubMenuBarPropsArray[i].ChildMenuWindowIDs.Count; y++)
                        {
                            DestroyControl(w.CanvasID, SubMenuBarPropsArray[i].ChildMenuWindowIDs[y].ToString());
                        }
                        SubMenuBarPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "MenuBar":
                for (var i = MenuBarPropsArray.Count - 1; i >= 0; i--)
                {
                    if (MenuBarPropsArray[i].CanvasID == w.CanvasID && MenuBarPropsArray[i].WindowID == w.WindowCount)
                    {
                        for (var y = 0; y < MenuBarPropsArray[i].ChildMenuWindowIDs.Count; y++)
                        {
                            DestroyControl(w.CanvasID, MenuBarPropsArray[i].ChildMenuWindowIDs[y].ToString());
                        }
                        MenuBarPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
            case "TextBox":
                for (var i = TextBoxPropsArray.Count - 1; i >= 0; i--)
                {
                    if (TextBoxPropsArray[i].CanvasID == w.CanvasID && TextBoxPropsArray[i].WindowID == w.WindowCount)
                    {
                        DestroyControl(w.CanvasID, TextBoxPropsArray[i].WindowID);
                        MenuBarPropsArray.RemoveAt(i);
                        break;
                    }
                }
                break;
        }
        DestroyWindow(w.CanvasID, w.WindowCount);
    }
*/

    public int GetHighestDepth(String canvasid)
    {
        int highestDepth = 0;
        for (CCLWindow w : Windows)
        {
            if (w.CanvasID.equals(canvasid) && Integer.parseInt(w.Depth) > highestDepth)
            {
                highestDepth = Integer.parseInt(w.Depth);
            }
        }
        return highestDepth;
    }

    public int GetHighestAndCurrentWindowCount(String canvasid)
    {
        int highestCurrentWindowCount = 0;
        for (CCLWindow w : Windows)
        {
            if (w.CanvasID.equals(canvasid) && highestCurrentWindowCount < Integer.parseInt(w.WindowCount))
            {
                highestCurrentWindowCount = Integer.parseInt(w.WindowCount);
            }
        }
        return highestCurrentWindowCount;
    }

    public static String StartSession()
    {
        Session session = new Session();
        Sessions.SessionsData.add(session);
        return "<script  type=\"text/javascript\">sessionID='" + session.ID.toString() + "';</script>";
    }
}
