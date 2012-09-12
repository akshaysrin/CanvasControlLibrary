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

using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.IO;
using System.Text;
using System.Xml;
using System.Web.UI;
using System.Reflection;
using System.Collections;

/// <summary>
/// Summary description for CanvasControlLibrary
/// </summary>
public static class Sessions
{
    public static List<CanvasControlLibrary.Session> SessionsData = new List<CanvasControlLibrary.Session>();
}

public class CanvasControlLibrary
{
    public Session CurrentSessionObj;

    public class Session
    {
        public Guid ID;
        public Dictionary<string, object> Data;

        public Session()
        {
            ID = Guid.NewGuid();
            Data = new Dictionary<string,object>();
        }
    }

    public List<CCLWindow> Windows = new List<CCLWindow>();

    public class CCLWindow
    {
        public string WindowCount { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string Depth { get; set; }
        public string CanvasID { get; set; }
        public string ParentWindowID { get; set; }
        public ArrayList ChildWindowIDs { get; set; }
        public string ControlType { get; set; }
        public string ControlNameID { get; set; }

        public CCLWindow()
        {
            ChildWindowIDs = new ArrayList();
        }
    }

    public List<CCLLabelProps> LabelPropsArray = new List<CCLLabelProps>();

    public class CCLLabelProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string Text { get; set; }
        public string TextHeight { get; set; }
        public string TextFontString { get; set; }
        public string TextColor { get; set; }
        public string IsHyperlink { get; set; }
        public string URL { get; set; }
        public string NoBrowserHistory { get; set; }
        public string IsNewBrowserWindow { get; set; }
        public string NameOfNewBrowserWindow { get; set; }
        public string WidthOfNewBrowserWindow { get; set; }
        public string HeightOfNewBrowserWindow { get; set; }
        public string NewBrowserWindowIsResizable { get; set; }
        public string NewBrowserWindowHasScrollBars { get; set; }
        public string NewBrowserWindowHasToolbar { get; set; }
        public string NewBrowserWindowHasLocationOrURLOrAddressBox { get; set; }
        public string NewBrowserWindowHasDirectoriesOrExtraButtons { get; set; }
        public string NewBrowserWindowHasStatusBar { get; set; }
        public string NewBrowserWindowHasMenuBar { get; set; }
        public string NewBrowserWindowCopyHistory { get; set; }
        public string BackGroundColor { get; set; }
        public object Tag { get; set; }
    }

    public List<CCLButtonProps> ButtonPropsArray = new List<CCLButtonProps>();

    public class CCLButtonProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string Text { get; set; }
        public string EdgeRadius { get; set; }
        public string BottomColorStart { get; set; }
        public string BottomColorEnd { get; set; }
        public string TopColorStart { get; set; }
        public string TopColorEnd { get; set; }
        public string TextHeight { get; set; }
        public string TextFontString { get; set; }
        public string TextColor { get; set; }
        public string IsPressed { get; set; }
        public string BorderColor { get; set; }
        public string IsHyperlink { get; set; }
        public string URL { get; set; }
        public string NoBrowserHistory { get; set; }
        public string IsNewBrowserWindow { get; set; }
        public string NameOfNewBrowserWindow { get; set; }
        public string WidthOfNewBrowserWindow { get; set; }
        public string HeightOfNewBrowserWindow { get; set; }
        public string NewBrowserWindowIsResizable { get; set; }
        public string NewBrowserWindowHasScrollBars { get; set; }
        public string NewBrowserWindowHasToolbar { get; set; }
        public string NewBrowserWindowHasLocationOrURLOrAddressBox { get; set; }
        public string NewBrowserWindowHasDirectoriesOrExtraButtons { get; set; }
        public string NewBrowserWindowHasStatusBar { get; set; }
        public string NewBrowserWindowHasMenuBar { get; set; }
        public string NewBrowserWindowCopyHistory { get; set; }
        public object Tag { get; set; }
    }

    public List<CCLScrollBarProps> ScrollBarPropsArray = new List<CCLScrollBarProps>();

    public class CCLScrollBarProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Len { get; set; }
        public string SelectedID { get; set; }
        public string MaxItems { get; set; }
        public string Alignment { get; set; }
        public string MouseDownState { get; set; }
        public object Tag { get; set; }
    }

    public List<CCLGridProps> GridPropsArray = new List<CCLGridProps>();

    public class CCLGridProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList RowData { get; set; }
        public ArrayList HeaderData { get; set; }
        public string RowDataTextColor { get; set; }
        public string RowDataTextFontString { get; set; }
        public string HeaderDataTextColor { get; set; }
        public string HeaderDataTextHeight { get; set; }
        public string HeaderDataTextFontString { get; set; }
        public string CellClickFunction { get; set; }
        public string DataRowHeight { get; set; }
        public ArrayList ColumnWidthArray { get; set; }
        public string HeaderRowHeight { get; set; }
        public string HasBorder { get; set; }
        public string BorderColor { get; set; }
        public string BorderLineWidth { get; set; }
        public string VScrollBarWindowId { get; set; }
        public string HScrollBarWindowId { get; set; }
        public string HeaderBackgroundStartColor { get; set; }
        public string HeaderBackgroundEndColor { get; set; }
        public string AltRowBgColorStart1 { get; set; }
        public string AltRowBgColorEnd1 { get; set; }
        public string AltRowBgColorStart2 { get; set; }
        public string AltRowBgColorEnd2 { get; set; }
        public object Tag { get; set; }

        public CCLGridProps()
        {
            RowData = new ArrayList();
            HeaderData = new ArrayList();
            ColumnWidthArray = new ArrayList();
        }
    }

    List<CCLComboBoxProps> ComboBoxPropsArray = new List<CCLComboBoxProps>();

    public class CCLComboBoxProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string TextAreaWindowID { get; set; }
        public string ButtonWindowID { get; set; }
        public string ListAreaWindowID { get; set; }
        public string VScrollBarWindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string SelectedID { get; set; }
        public string TextAreaTextColor { get; set; }
        public string TextAreaTextHeight { get; set; }
        public string TextAreaFontString { get; set; }
        public string ListAreaTextColor { get; set; }
        public string ListAreaTextHeight { get; set; }
        public string ListAreaFontString { get; set; }
        public object Tag { get; set; }

        public CCLComboBoxProps()
        {
            Data = new ArrayList();
        }
    }

    public List<CCLCheckBoxProps> CheckBoxPropsArray = new List<CCLCheckBoxProps>();

    public class CCLCheckBoxProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Status { get; set; }
        public object Tag { get; set; }
    }

    public List<CCLRadioButtonGroupProps> RadioButtonGroupPropsArray = new List<CCLRadioButtonGroupProps>();

    public class CCLRadioButtonGroupProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string Alignment { get; set; }
        public string GroupName { get; set; }
        public ArrayList Labels { get; set; }
        public string SelectedID { get; set; }
        public string LabelTextColor { get; set; }
        public string LabelFontString { get; set; }
        public string Radius { get; set; }
        public ArrayList ButtonExtents { get; set; }
        public string LabelTextHeight { get; set; }
        public object Tag { get; set; }

        public CCLRadioButtonGroupProps()
        {
            Labels = new ArrayList();
            ButtonExtents = new ArrayList();
        }
    }

    public List<CCLImageProps> ImagePropsArray = new List<CCLImageProps>();

    public class CCLImageProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string ImageURL { get; set; }
        public string ClickFunction { get; set; }
        public string AlreadyDrawnImage { get; set; }
        public string IsHyperlink { get; set; }
        public string URL { get; set; }
        public string NoBrowserHistory { get; set; }
        public string IsNewBrowserWindow { get; set; }
        public string NameOfNewBrowserWindow { get; set; }
        public string WidthOfNewBrowserWindow { get; set; }
        public string HeightOfNewBrowserWindow { get; set; }
        public string NewBrowserWindowIsResizable { get; set; }
        public string NewBrowserWindowHasScrollBars { get; set; }
        public string NewBrowserWindowHasToolbar { get; set; }
        public string NewBrowserWindowHasLocationOrURLOrAddressBox { get; set; }
        public string NewBrowserWindowHasDirectoriesOrExtraButtons { get; set; }
        public string NewBrowserWindowHasStatusBar { get; set; }
        public string NewBrowserWindowHasMenuBar { get; set; }
        public string NewBrowserWindowCopyHistory { get; set; }
        public object Tag { get; set; }
        public string Tile { get; set; }
    }

    public List<CCLTreeViewProps> TreeViewPropsArray = new List<CCLTreeViewProps>();

    public class CCLTreeViewProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string IDColumnIndex { get; set; }
        public string ParentIDColIndex { get; set; }
        public string ExpandedColIndex { get; set; }
        public string LabelColIndex { get; set; }
        public string VScrollBarWindowID { get; set; }
        public string HScrollBarWindowID { get; set; }
        public string TextColor { get; set; }
        public string TextFontString { get; set; }
        public string TextHeight { get; set; }
        public ArrayList ClickButtonExtents { get; set; }
        public ArrayList ClickLabelExtents { get; set; }
        public string ClickNodeFunction { get; set; }
        public string SelectedNodeIndex { get; set; }
        public object Tag { get; set; }

        public CCLTreeViewProps()
        {
            Data = new ArrayList();
            ClickButtonExtents = new ArrayList();
            ClickLabelExtents = new ArrayList();
        }
    }

    public List<CCLCalenderProps> CalenderPropsArray = new List<CCLCalenderProps>();

    public class CCLCalenderProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string VisibleMonth { get; set; }
        public string VisibleYear { get; set; }
        public string SelectedDay { get; set; }
        public string DayCellWidth { get; set; }
        public string DayCellHeight { get; set; }
        public string HeaderHeight { get; set; }
        public string TextHeaderColor { get; set; }
        public string TextHeaderHeight { get; set; }
        public string TextHeaderFontString { get; set; }
        public string DayDateActiveColor { get; set; }
        public string DayDateActiveTextHeight { get; set; }
        public string DayDateActiveTextFontString { get; set; }
        public string DayDateInactiveTextColor { get; set; }
        public string DayDateInactiveTextHeight { get; set; }
        public string DayDateInactiveTextFontString { get; set; }
        public string SelectedDayTextColor { get; set; }
        public string SelectedDayTextHeight { get; set; }
        public string SelectedDayTextFontString { get; set; }
        public string SelectedDayHighLightColor { get; set; }
        public string TodayTextColor { get; set; }
        public string TodayTextHeight { get; set; }
        public string TodayTextFontString { get; set; }
        public string TodayHighLightColor { get; set; }
        public string OnDayClickFunction { get; set; }
        public string HeaderBackgroundColor { get; set; }
        public string BodyBackgroundColor { get; set; }
        public string MouseOverHightLightColor { get; set; }
        public string MouseHoverDate { get; set; }
        public ArrayList ButtonClickExtents { get; set; }
        public ArrayList DateClickExtents { get; set; }
        public string DayLabelTextColor { get; set; }
        public string DayLabelTextHeight { get; set; }
        public string DayLabelTextFontString { get; set; }
        public object Tag { get; set; }

        public CCLCalenderProps()
        {
            ButtonClickExtents = new ArrayList();
            DateClickExtents = new ArrayList();
        }
    }

    public List<CCLProgressBarProps> ProgressBarPropsArray = new List<CCLProgressBarProps>();

    public class CCLProgressBarProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string Color { get; set; }
        public string MaxValue { get; set; }
        public string MinValue { get; set; }
        public string CurrentValue { get; set; }
        public object Tag { get; set; }
    }

    public List<CCLSliderProps> SliderPropsArray = new List<CCLSliderProps>();

    public class CCLSliderProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string HandleWidth { get; set; }
        public string HandleHeight { get; set; }
        public string MaxValue { get; set; }
        public string MinValue { get; set; }
        public string CurrentValue { get; set; }
        public string MouseDownState { get; set; }
        public object Tag { get; set; }
    }

    public List<CCLDatePickerProps> DatePrickerPropsArray = new List<CCLDatePickerProps>();

    public class CCLDatePickerProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string TextBoxAreaWindowID { get; set; }
        public string ButtonWindowID { get; set; }
        public string CalenderWindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string TextBoxAreaTextColor { get; set; }
        public string TextBoxAreaTextHeight { get; set; }
        public string TextBoxAreaTextFontString { get; set; }
        public object Tag { get; set; }
    }

    public List<CCLPanelProps> PanelPropsArray = new List<CCLPanelProps>();

    public class CCLPanelProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string ExpandedWidth { get; set; }
        public string ExpandedHeight { get; set; }
        public string CollapsedWidth { get; set; }
        public string CollapsedHeight { get; set; }
        public string IsCollapsable { get; set; }
        public string HasBorder { get; set; }
        public string BorderColor { get; set; }
        public string HasBackgroundGradient { get; set; }
        public string BackgroundStartColor { get; set; }
        public string BackgroundEndColor { get; set; }
        public string HeaderHeight { get; set; }
        public string HeaderBackgroundStartColor { get; set; }
        public string HeaderBackgroundEndColor { get; set; }
        public string ExpandCollapseButtonColor { get; set; }
        public string IsExpanded { get; set; }
        public string ExpandCollapseButtonRadius { get; set; }
        public string PanelLabel { get; set; }
        public string PanelLabelTextColor { get; set; }
        public string PanelLabelTextHeight { get; set; }
        public string PanelLabelTextFontString { get; set; }
        public string OriginalWidth { get; set; }
        public string OriginalHeight { get; set; }
        public object Tag { get; set; }
    }

    public List<CCLBarGraphProps> BarGraphPropsArray = new List<CCLBarGraphProps>();

    public class CCLBarGraphProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string MaxValue { get; set; }
        public string NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public string TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public string BarWidth { get; set; }
        public ArrayList BarLabelsWithBoundingBoxes { get; set; }
        public string H { get; set; }
        public string AxisLabelsTextHeight { get; set; }
        public string AxisLabelsTextFontString { get; set; }
        public string AxisLabelsTextColor { get; set; }
        public string MarginLeft { get; set; }
        public string GapBetweenBars { get; set; }
        public string BarClickFunction { get; set; }
        public string AlreadyUnregisteredAnimation { get; set; }
        public string HasLegend { get; set; }
        public string MarginRight { get; set; }
        public object Tag { get; set; }

        public CCLBarGraphProps()
        {
            Data = new ArrayList();
            BarLabelsWithBoundingBoxes = new ArrayList();
        }
    }

    public List<CCLPieChartProps> PieChartPropsArray = new List<CCLPieChartProps>();

    public class CCLPieChartProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public string TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public string CurrentRadius { get; set; }
        public string TotalValue { get; set; }
        public string LabelTextColor { get; set; }
        public string LabelTextHeight { get; set; }
        public string LabelTextFontString { get; set; }
        public string AlreadyUnregisteredAnimation { get; set; }
        public string DeltaI { get; set; }
        public string DeltaX { get; set; }
        public string DeltaY { get; set; }
        public string SliceClickFunction { get; set; }
        public object Tag { get; set; }

        public CCLPieChartProps()
        {
            Data = new ArrayList();
        }
    }

    public List<CCLLineGraphProps> LineGraphPropsArray = new List<CCLLineGraphProps>();

    public class CCLLineGraphProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string XMaxValue { get; set; }
        public string NumMarksX { get; set; }
        public string YMaxValue { get; set; }
        public string NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public string TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public string AxisLabelsTextColor { get; set; }
        public string AxisLabelsTextHeight { get; set; }
        public string AxisLabelsTextFontString { get; set; }
        public string H { get; set; }
        public string HMax { get; set; }
        public ArrayList LineXYs { get; set; }
        public string ClickFunction { get; set; }
        public string AlreadyUnregisteredAnimation { get; set; }
        public string MarginLeft { get; set; }
        public string IsLabeledXValues { get; set; }
        public object Tag { get; set; }

        public CCLLineGraphProps()
        {
            Data = new ArrayList();
            LineXYs = new ArrayList();
        }
    }

    public List<CCLGaugeChartProps> GaugeChartPropsArray = new List<CCLGaugeChartProps>();

    public class CCLGaugeChartProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public string TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public string H { get; set; }
        public string CenterX { get; set; }
        public string CenterY { get; set; }
        public string GaugeRadius { get; set; }
        public string GaugeLabelTextColor { get; set; }
        public string GaugeLabelTextHeight { get; set; }
        public string GaugeLabelTextFontString { get; set; }
        public string AlreadyUnregisteredAnimation { get; set; }
        public object Tag { get; set; }

        public CCLGaugeChartProps()
        {
            Data = new ArrayList();
        }
    }

    public List<CCLRadarGraphProps> RadarGraphPropsArray = new List<CCLRadarGraphProps>();

    public class CCLRadarGraphProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string MaxValue { get; set; }
        public string ColorStr { get; set; }
        public string NumMarks { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public string TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public string H { get; set; }
        public string MarkLabelTextColor { get; set; }
        public string MarkLabelTextHeight { get; set; }
        public string MarkLabelTextFontString { get; set; }
        public string AlreadyUnregisteredAnimation { get; set; }
        public object Tag { get; set; }

        public CCLRadarGraphProps()
        {
            Data = new ArrayList();
        }
    }

    public List<CCLLineAreaGraphProps> LineAreaGraphPropsArray = new List<CCLLineAreaGraphProps>();

    public class CCLLineAreaGraphProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string XMaxValue { get; set; }
        public string YMaxValue { get; set; }
        public string NumMarksX { get; set; }
        public string NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public string TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public string AxisLabelsColor { get; set; }
        public string AxisLabelsHeight { get; set; }
        public string AxisLabelsFontString { get; set; }
        public string H { get; set; }
        public string MarginLeft { get; set; }
        public string AlreadyUnregisteredAnimation { get; set; }
        public string IsLabledOnXAxis { get; set; }
        public object Tag { get; set; }

        public CCLLineAreaGraphProps()
        {
            Data = new ArrayList();
        }
    }

    public List<CCLCandlesticksGraphProps> CandlesticksGraphPropsArray = new List<CCLCandlesticksGraphProps>();

    public class CCLCandlesticksGraphProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public ArrayList XMarksLabelData { get; set; }
        public string XMarksWidth { get; set; }
        public string YMaxValue { get; set; }
        public string NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleColor { get; set; }
        public string TitleHeight { get; set; }
        public string TitleFontString { get; set; }
        public string CandleBodyWidth { get; set; }
        public string CandleBodyColor { get; set; }
        public string CandleLineColor { get; set; }
        public string MarginLeft { get; set; }
        public string AxisLabelsColor { get; set; }
        public string AxisLabelsHeight { get; set; }
        public string AxisLabelsFontString { get; set; }
        public object Tag { get; set; }

        public CCLCandlesticksGraphProps()
        {
            Data = new ArrayList();
            XMarksLabelData = new ArrayList();
        }
    }

    public List<CCLDoughnutChartProps> DoughnutChartPropsArray = new List<CCLDoughnutChartProps>();

    public class CCLDoughnutChartProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string Title { get; set; }
        public string TitleColor { get; set; }
        public string TitleTextHeight { get; set; }
        public string TitleFontString { get; set; }
        public string InnerRadius { get; set; }
        public string CurrentRadius { get; set; }
        public string TotalValue { get; set; }
        public string MarginSides { get; set; }
        public string LabelColor { get; set; }
        public string LabelHeight { get; set; }
        public string LabelFontString { get; set; }
        public string LegendWidth { get; set; }
        public string LegendHeight { get; set; }
        public string LegendFontString { get; set; }
        public string AnimationCompleted { get; set; }
        public string DeltaI { get; set; }
        public string DeltaX { get; set; }
        public string DeltaY { get; set; }
        public string SliceClickFunction { get; set; }
        public object Tag { get; set; }

        public CCLDoughnutChartProps()
        {
            Data = new ArrayList();
        }
    }

    public List<CCLBarsMixedWithLabeledLineGraphProps> BarsMixedWithLabeledLineGraphPropsArray = new List<CCLBarsMixedWithLabeledLineGraphProps>();

    public class CCLBarsMixedWithLabeledLineGraphProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string MaxValue { get; set; }
        public string NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleTextColor { get; set; }
        public string TitleTextHeight { get; set; }
        public string TitleTextFontString { get; set; }
        public string BarWidth { get; set; }
        public ArrayList BarLabelsWithBoundingBoxes { get; set; }
        public string H { get; set; }
        public string AxisLabelsTextHeight { get; set; }
        public string AxisLabelsTextFontString { get; set; }
        public string AxisLabelsTextColor { get; set; }
        public string MarginLeft { get; set; }
        public string GapBetweenBars { get; set; }
        public string BarClickFunction { get; set; }
        public string AlreadyUnregisteredAnimation { get; set; }
        public string HasLegend { get; set; }
        public string MarginRight { get; set; }
        public ArrayList LinesData { get; set; }
        public ArrayList LineXYs { get; set; }
        public string LineClickFunction { get; set; }
        public string YMaxValue { get; set; }
        public object Tag { get; set; }

        public CCLBarsMixedWithLabeledLineGraphProps()
        {
            Data = new ArrayList();
            BarLabelsWithBoundingBoxes = new ArrayList();
            LinesData = new ArrayList();
            LineXYs = new ArrayList();
        }
    }

    public List<CCLStackedBarGraphProps> StackedBarGraphPropsArray = new List<CCLStackedBarGraphProps>();

    public class CCLStackedBarGraphProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string MaxValue { get; set; }
        public string NumMarksY { get; set; }
        public string Title { get; set; }
        public string TitleColor { get; set; }
        public string TitleHeight { get; set; }
        public string TitleFontString { get; set; }
        public string BarWidth { get; set; }
        public string GapBetweenBarSets { get; set; }
        public string H { get; set; }
        public string AxisLabelsColor { get; set; }
        public string AxisLabelsHeight { get; set; }
        public string AxisLabelsFontString { get; set; }
        public ArrayList BarLabelsWithBoundingBoxes { get; set; }
        public string BarClickFunction { get; set; }
        public string AlreadyUnregisteredAnimation { get; set; }
        public string MarginLeft { get; set; }
        public object Tag { get; set; }

        public CCLStackedBarGraphProps()
        {
            BarLabelsWithBoundingBoxes = new ArrayList();
        }
    }

    public List<CCLTabProps> TabPropsArray = new List<CCLTabProps>();

    public class CCLTabProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList TabLabels { get; set; }
        public string TabLabelColor { get; set; }
        public string TabLabelHeight { get; set; }
        public string TabLabelFontString { get; set; }
        public ArrayList PanelWindowIDs { get; set; }
        public string SelectedTabID { get; set; }
        public string TabLabelGradientStartColor { get; set; }
        public string TabLabelGradientEndColor { get; set; }
        public ArrayList TabLabelHitAreas { get; set; }
        public string GapBetweenTabs { get; set; }
        public string SelectedTabBorderColor { get; set; }
        public string SelectedTabBorderLineWidth { get; set; }
        public object Tag { get; set; }

        public CCLTabProps()
        {
            TabLabels = new ArrayList();
            PanelWindowIDs = new ArrayList();
            TabLabelHitAreas = new ArrayList();
        }
    }

    public List<CCLImageMapProps> ImageMapPropsArray = new List<CCLImageMapProps>();

    public class CCLImageMapProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string ImgUrl { get; set; }
        public ArrayList PinXYs { get; set; }
        public string PinClickFunction { get; set; }
        public string HasZoom { get; set; }
        public string ImageTopLeftXOffset { get; set; }
        public string ImageTopLeftYOffset { get; set; }
        public string MovingMap { get; set; }
        public string LastMovingX { get; set; }
        public string LastMovingY { get; set; }
        public string Scale { get; set; }
        public string ScaleIncrementFactor { get; set; }
        public object Tag { get; set; }

        public CCLImageMapProps()
        {
            PinXYs = new ArrayList();
        }
    }

    public List<CCLMenuBarProps> MenuBarPropsArray = new List<CCLMenuBarProps>();

    public class CCLMenuBarProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string BarColorStart { get; set; }
        public string BarColorMiddle { get; set; }
        public string BarColorEnd { get; set; }
        public string DropDownColorStart { get; set; }
        public string DropDownColorEnd { get; set; }
        public ArrayList ChildMenuWindowIDs { get; set; }
        public object Tag { get; set; }

        public CCLMenuBarProps()
        {
            Data = new ArrayList();
            ChildMenuWindowIDs = new ArrayList();
        }
    }

    public List<CCLSubMenuBarProps> SubMenuBarPropsArray = new List<CCLSubMenuBarProps>();

    public class CCLSubMenuBarProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList Data { get; set; }
        public string ParentMenuWindowID { get; set; }
        public string ParentIndexInParentMenu { get; set; }
        public ArrayList ChildMenuWindowIDs { get; set; }
        public string DropDownColorStart { get; set; }
        public string DropDownColorEnd { get; set; }
        public object Tag { get; set; }

        public CCLSubMenuBarProps()
        {
            Data = new ArrayList();
            ChildMenuWindowIDs = new ArrayList();
        }
    }

    public List<CCLTextBoxProps> TextBoxPropsArray = new List<CCLTextBoxProps>();

    public class CCLTextBoxProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; } 
        public string Height { get; set; } 
        public string WaterMarkText { get; set; }
        public string WaterMarkTextColor { get; set; }
        public string WaterMarkTextFontString { get; set; }
        public string TextColor { get; set; }
        public string TextHeight { get; set; }
        public string TextFontString { get; set; }
        public string MaxChars { get; set; }
        public string AllowedCharsRegEx { get; set; }
        public string IsPassword { get; set; }
        public string PasswordChar { get; set; }
        public string HasBorder { get; set; }
        public string BorderColor { get; set; }
        public string BorderLineWidth { get; set; }
        public string HasShadow { get; set; }
        public string ShadowOffsetX { get; set; }
        public string ShadowOffsetY { get; set; }
        public string ShadowBlurValue { get; set; }
        public string HasRoundedEdges { get; set; }
        public string EdgeRadius { get; set; }
        public string HasBgGradient { get; set; }
        public string BgGradientStartColor { get; set; }
        public string BgGradientEndColor { get; set; }
        public string HasBgImage { get; set; }
        public string BgImageUrl { get; set; }
        public string HasAutoComplete { get; set; }
        public string ListPossibles { get; set; }
        public string DropDownPossiblesListIfThereIsInputText { get; set; }
        public string LimitToListPossibles { get; set; }
        public string ListPossiblesTextHeight { get; set; }
        public string ListPossiblesTextFontString { get; set; }
        public string CaretPosIndex { get; set; }
        public string UserInputText { get; set; }
        public string ShadowColor { get; set; }
        public string ShowCaret { get; set; }
        public string CaretColor { get; set; }
        public object Tag { get; set; }
    }

    public List<CCLImageFaderProps> ImageFaderPropsArray = new List<CCLImageFaderProps>();

    public class CCLImageFaderProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList ImageURLs { get; set; }
        public string FadeStartValue { get; set; }
        public string FadeEndValue { get; set; }
        public string FadeStepValue { get; set; }
        public string HoldForTicks { get; set; }
        public string ClickFunction { get; set; }
        public string HoldCountDown { get; set; }
        public string CurrentImageIndex { get; set; }
        public string CurrentGlobalAlphaValue { get; set; }
        public string OverlayImages { get; set; }

        public CCLImageFaderProps()
        {
            ImageURLs = new ArrayList();
        }
    }

    public List<CCLImageSliderProps> ImageSliderPropsArray = new List<CCLImageSliderProps>();

    public class CCLImageSliderProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public ArrayList ImageURLs { get; set; }
        public string Direction { get; set; }
        public string StepIncrement { get; set; }
        public string ClickFunction { get; set; }
        public string HoldForTicks { get; set; }
        public string CurrentImageIndex { get; set; }
        public string Slide { get; set; }
        public string HoldCountDown { get; set; }

        public CCLImageSliderProps()
        {
            ImageURLs = new ArrayList();
        }
    }

    public List<CCLMultiLineLabelProps> MultiLineLabelPropsArray = new List<CCLMultiLineLabelProps>();

    public class CCLMultiLineLabelProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string HasMarkup { get; set; }
        public string Text { get; set; }
        public string TextColor { get; set; }
        public string TextHeight { get; set; }
        public string TextFontString { get; set; }
        public string LineSpacingInPixels { get; set; }
        public ArrayList LineBreakIndexes { get; set; }
        public ArrayList MarkupTextExtents { get; set; }
        public string MarkupText { get; set; }

        public CCLMultiLineLabelProps()
        {
            LineBreakIndexes = new ArrayList();
            MarkupTextExtents = new ArrayList();
        }
    }

    public List<CCLWordProcessorProps> WordProcessorPropsArray = new List<CCLWordProcessorProps>();

    public class CCLWordProcessorProps
    {
        public string CanvasID { get; set; }
        public string WindowID { get; set; }
        public string X { get; set; }
        public string Y { get; set; }
        public string Width { get; set; }
        public string Height { get; set; }
        public string HasMarkup { get; set; }
        public string Text { get; set; }
        public string TextColor { get; set; }
        public string TextHeight { get; set; }
        public string TextFontString { get; set; }
        public string LineSpacingInPixels { get; set; }
        public string WordSensitive { get; set; }
        public string WaterMarkText { get; set; }
        public string WaterMarkTextColor { get; set; }
        public string WaterMarkTextHeight { get; set; }
        public string WaterMarkTextFontString { get; set; }
        public string MaxChars { get; set; }
        public string HasShadow { get; set; }
        public string ShadowColor { get; set; }
        public string ShadowOffsetX { get; set; }
        public string ShadowOffsetY { get; set; }
        public string HasRoundedEdges { get; set; }
        public string EdgeRadius { get; set; }
        public string HasBgGradient { get; set; }
        public string BgGradientStartColor { get; set; }
        public string BgGradientEndColor { get; set; }
        public string HasBgImage { get; set; }
        public string BgImageUrl { get; set; }
        public string Margin { get; set; }
        public string HasBorder { get; set; }
        public string BorderColor { get; set; }
        public string BorderLineWidth { get; set; }
        public string UserInputText { get; set; }
        public string VScrollBarWindowID { get; set; }
        public string CaretPosIndex { get; set; }
        public string ShowCaret { get; set; }
        public string CaretColor { get; set; }
        public ArrayList LineBreakIndexes { get; set; }
        public string SelectedTextStartIndex { get; set; }
        public string SelectedTextEndIndex { get; set; }
        public string MouseDown { get; set; }
        public string WasSelecting { get; set; }
        public string AllowedCharsRegEx { get; set; }

        public CCLWordProcessorProps()
        {
            LineBreakIndexes = new ArrayList();
        }
    }

    public class JavaScriptFunctionsToSendAndAttachOnClientSide
    {
        public string CanvasID;
        public string WindowID;
        public string JavaScriptCode;
        public string ClientSideArrayVarName;
        public string ClientSidePropertyName;
        public string GetPropsFunctionName;

        public JavaScriptFunctionsToSendAndAttachOnClientSide(string canvasid, string windowid, string javascriptcode, string clientsidearrayvarname, string clientsidepropertyname, string getpropsfunctionname)
        {
            CanvasID = canvasid;
            WindowID = windowid;
            JavaScriptCode = javascriptcode;
            ClientSideArrayVarName = clientsidearrayvarname;
            ClientSidePropertyName = clientsidepropertyname;
            GetPropsFunctionName = getpropsfunctionname;
        }
    }

    public List<JavaScriptFunctionsToSendAndAttachOnClientSide> JavaScriptCodeToSendInThisCall = new List<JavaScriptFunctionsToSendAndAttachOnClientSide>();

    public string FunctionName;
    public string CanvasID;
    public string WindowID;

    public CanvasControlLibrary(Stream InputStream)
    {
        byte[] rdata = new byte[Convert.ToInt32(InputStream.Length)];
        InputStream.Read(rdata, 0, Convert.ToInt32(InputStream.Length));
        string strData = Encoding.ASCII.GetString(rdata);
        strData = strData.Replace("[", "<");
        strData = strData.Replace("]", ">");
        strData = strData.Replace("&lb;", "[");
        strData = strData.Replace("&rb;", "]");
        strData = strData.Replace("&amp;", "&");
        XmlDocument vars = new XmlDocument();
        vars.LoadXml("<root>" + strData + "</root>");
        FunctionName = vars.FirstChild.ChildNodes[0].InnerXml;
        CanvasID = vars.FirstChild.ChildNodes[1].InnerXml;
        WindowID = vars.FirstChild.ChildNodes[2].InnerXml;
        UnwrapVars(vars.FirstChild.ChildNodes[3]);
        if (vars.FirstChild.ChildNodes[4].InnerXml != null && vars.FirstChild.ChildNodes[4].InnerXml != "null")
        {
            Guid tmp = new Guid(vars.FirstChild.ChildNodes[4].InnerXml);
            foreach (Session s in Sessions.SessionsData)
            {
                if (s.ID == tmp)
                {
                    CurrentSessionObj = s;
                    break;
                }
            }
        }
        JavaScriptCodeToSendInThisCall = new List<JavaScriptFunctionsToSendAndAttachOnClientSide>();
    }

    public void InvokeServerSideFunction(Page Page)
    {
        Page.GetType().InvokeMember(FunctionName, System.Reflection.BindingFlags.InvokeMethod, null, Page, new object[] { 
            CanvasID, Convert.ToInt32(WindowID)});
    }

    public string DecodeXML(string str)
    {
        return str.Replace("&lb;", "[").Replace("&rb;", "]").Replace("&amp;", "&");
    }

    public void UnwrapVars(XmlNode node)
    {
        foreach (XmlNode child1 in node.ChildNodes)
        {
            switch (child1.Name)
            {
                case "Windows":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLWindow w = new CCLWindow();
                        Windows.Add(w);
                        FillClassObject(child2, w);
                    }
                    break;
                case "labelPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLLabelProps l = new CCLLabelProps();
                        LabelPropsArray.Add(l);
                        FillClassObject(child2, l);
                    }
                    break;
                case "buttonPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLButtonProps b = new CCLButtonProps();
                        ButtonPropsArray.Add(b);
                        FillClassObject(child2, b);
                    }
                    break;
                case "scrollBarPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLScrollBarProps s = new CCLScrollBarProps();
                        ScrollBarPropsArray.Add(s);
                        FillClassObject(child2, s);
                    }
                    break;
                case "gridPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLGridProps g = new CCLGridProps();
                        GridPropsArray.Add(g);
                        FillClassObject(child2, g);
                    }
                    break;
                case "comboboxPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLComboBoxProps c = new CCLComboBoxProps();
                        ComboBoxPropsArray.Add(c);
                        FillClassObject(child2, c);
                    }
                    break;
                case "checkboxPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLCheckBoxProps chk = new CCLCheckBoxProps();
                        CheckBoxPropsArray.Add(chk);
                        FillClassObject(child2, chk);
                    }
                    break;
                case "radiobuttonPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLRadioButtonGroupProps rg = new CCLRadioButtonGroupProps();
                        RadioButtonGroupPropsArray.Add(rg);
                        FillClassObject(child2, rg);
                    }
                    break;
                case "imageControlPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLImageProps img = new CCLImageProps();
                        ImagePropsArray.Add(img);
                        FillClassObject(child2, img);
                    }
                    break;
                case "treeViewPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLTreeViewProps tv = new CCLTreeViewProps();
                        TreeViewPropsArray.Add(tv);
                        FillClassObject(child2, tv);
                    }
                    break;
                case "calenderPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLCalenderProps cal = new CCLCalenderProps();
                        CalenderPropsArray.Add(cal);
                        FillClassObject(child2, cal);
                    }
                    break;
                case "progressBarPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLProgressBarProps pb = new CCLProgressBarProps();
                        ProgressBarPropsArray.Add(pb);
                        FillClassObject(child2, pb);
                    }
                    break;
                case "sliderPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLSliderProps s = new CCLSliderProps();
                        SliderPropsArray.Add(s);
                        FillClassObject(child2, s);
                    }
                    break;
                case "datePickerPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLDatePickerProps dp = new CCLDatePickerProps();
                        DatePrickerPropsArray.Add(dp);
                        FillClassObject(child2, dp);
                    }
                    break;
                case "panelPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLPanelProps p = new CCLPanelProps();
                        PanelPropsArray.Add(p);
                        FillClassObject(child2, p);
                    }
                    break;
                case "barGraphsPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLBarGraphProps bg = new CCLBarGraphProps();
                        BarGraphPropsArray.Add(bg);
                        FillClassObject(child2, bg);
                    }
                    break;
                case "pieChartsPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLPieChartProps pc = new CCLPieChartProps();
                        PieChartPropsArray.Add(pc);
                        FillClassObject(child2, pc);
                    }
                    break;
                case "lineGraphsPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLLineGraphProps lg = new CCLLineGraphProps();
                        LineGraphPropsArray.Add(lg);
                        FillClassObject(child2, lg);
                    }
                    break;
                case "gaugeChartPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLGaugeChartProps g = new CCLGaugeChartProps();
                        GaugeChartPropsArray.Add(g);
                        FillClassObject(child2, g);
                    }
                    break;
                case "radarGraphPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLRadarGraphProps r = new CCLRadarGraphProps();
                        RadarGraphPropsArray.Add(r);
                        FillClassObject(child2, r);
                    }
                    break;
                case "lineAreaGraphPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLLineAreaGraphProps la = new CCLLineAreaGraphProps();
                        LineAreaGraphPropsArray.Add(la);
                        FillClassObject(child2, la);
                    }
                    break;
                case "candlesticksGraphPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLCandlesticksGraphProps c = new CCLCandlesticksGraphProps();
                        CandlesticksGraphPropsArray.Add(c);
                        FillClassObject(child2, c);
                    }
                    break;
                case "doughnutChartPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLDoughnutChartProps d = new CCLDoughnutChartProps();
                        DoughnutChartPropsArray.Add(d);
                        FillClassObject(child2, d);
                    }
                    break;
                case "barsMixedWithLabledLineGraphsPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLBarsMixedWithLabeledLineGraphProps b = new CCLBarsMixedWithLabeledLineGraphProps();
                        BarsMixedWithLabeledLineGraphPropsArray.Add(b);
                        FillClassObject(child2, b);
                    }
                    break;
                case "stackedBarGraphPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLStackedBarGraphProps s = new CCLStackedBarGraphProps();
                        StackedBarGraphPropsArray.Add(s);
                        FillClassObject(child2, s);
                    }
                    break;
                case "tabPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLTabProps t = new CCLTabProps();
                        TabPropsArray.Add(t);
                        FillClassObject(child2, t);
                    }
                    break;
                case "imageMapPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLImageMapProps t = new CCLImageMapProps();
                        ImageMapPropsArray.Add(t);
                        FillClassObject(child2, t);
                    }
                    break;
                case "menuBarPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLMenuBarProps m = new CCLMenuBarProps();
                        MenuBarPropsArray.Add(m);
                        FillClassObject(child2, m);
                    }
                    break;
                case "subMenuBarPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLSubMenuBarProps sm = new CCLSubMenuBarProps();
                        SubMenuBarPropsArray.Add(sm);
                        FillClassObject(child2, sm);
                    }
                    break;
                case "textBoxPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLTextBoxProps sm = new CCLTextBoxProps();
                        TextBoxPropsArray.Add(sm);
                        FillClassObject(child2, sm);
                    }
                    break;
                case "imageFaderPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLImageFaderProps sm = new CCLImageFaderProps();
                        ImageFaderPropsArray.Add(sm);
                        FillClassObject(child2, sm);
                    }
                    break;
                case "imageSliderPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLImageSliderProps sm = new CCLImageSliderProps();
                        ImageSliderPropsArray.Add(sm);
                        FillClassObject(child2, sm);
                    }
                    break;
                case "multiLineLabelPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLMultiLineLabelProps sm = new CCLMultiLineLabelProps();
                        MultiLineLabelPropsArray.Add(sm);
                        FillClassObject(child2, sm);
                    }
                    break;
                case "wordProcessorPropsArray":
                    foreach (XmlNode child2 in child1.ChildNodes)
                    {
                        CCLWordProcessorProps sm = new CCLWordProcessorProps();
                        WordProcessorPropsArray.Add(sm);
                        FillClassObject(child2, sm);
                    }
                    break;
            }
        }
    }

    public void FillClassObject(XmlNode child2, object g)
    {
        foreach (XmlNode child3 in child2.ChildNodes)
        {
            PropertyInfo prop = g.GetType().GetProperty(child3.Name, BindingFlags.Public | BindingFlags.Instance);
            if (null != prop && prop.CanWrite)
            {
                if (child3.ChildNodes.Count == 1 && child3.ChildNodes[0].Name != "i")
                {
                    prop.SetValue(g, DecodeXML(child3.InnerXml), null);
                }
                else if (child3.ChildNodes.Count > 1 || (child3.ChildNodes.Count != 0 && child3.ChildNodes[0].Name == "i"))
                {
                    ArrayList al = new ArrayList();
                    foreach (XmlNode child4 in child3.ChildNodes)
                    {
                        if (child4.Name == "Array")
                        {
                            AddArrayData(child4, al);
                        }
                        else if (child4.ChildNodes.Count == 1)
                        {
                            al.Add(child4.InnerXml);
                        }
                    }
                    prop.SetValue(g, al, null);
                }
            }
        }
    }

    public void AddArrayData(XmlNode node, ArrayList pal)
    {
        ArrayList al = new ArrayList();
        foreach (XmlNode child in node.ChildNodes)
        {
            if (child.ChildNodes.Count == 1)
            {
                al.Add(child.InnerXml);
            }
            else if (child.ChildNodes.Count > 1)
            {
                AddArrayData(child, al);
            }
        }
        pal.Add(al);
    }

    public string recurseArrayList(ArrayList al)
    {
        string str = "[Array]";
        foreach (object obj in al)
        {
            if (obj is ArrayList)
            {
                str += recurseArrayList(obj as ArrayList);
            }
            else
            {
                str += "[i]" + obj.ToString() + "[/i]";
            }
        }
        return str + "[/Array]";
    }

    public string encodeString(string str)
    {
        return str.Replace("&", "&amp;").Replace("[", "&lb;").Replace("]", "&rb;");
    }

    public string encodeObject(object o)
    {
        string str = "";
        PropertyInfo[] pis = o.GetType().GetProperties();
        foreach (PropertyInfo pi in pis)
        {
            if (pi.PropertyType.Name == "ArrayList")
            {
                ArrayList al = pi.GetValue(o) as ArrayList;
                str += "[" + pi.Name + "][Array]";
                foreach (object obj in al)
                {
                    if (obj is ArrayList)
                    {
                        str += recurseArrayList(obj as ArrayList);
                    }
                    else
                    {
                        str += "[i]" + encodeString(obj.ToString()) + "[/i]";
                    }
                }
                str += "[/Array][/" + pi.Name + "]";
            }
            else
            {
                object x = pi.GetValue(o);
                str += "[" + pi.Name + "]" + (x != null && x.ToString().Length > 0 ? encodeString(x.ToString()) : "") + "[/" + pi.Name + "]";
            }
        }
        return str;
    }

    public void SendVars(Stream OutputStream, ArrayList parameters)
    {
        string strVars = "[root][Vars][windows]";
        foreach (CCLWindow w in Windows)
        {
            strVars += "[i]" + encodeObject(w) + "[/i]";
        }
        strVars += "[/windows][labelPropsArray]";
        foreach (CCLLabelProps l in LabelPropsArray)
        {
            strVars += "[i]" + encodeObject(l) + "[/i]";
        }
        strVars += "[/labelPropsArray][buttonPropsArray]";
        foreach (CCLButtonProps b in ButtonPropsArray)
        {
            strVars += "[i]" + encodeObject(b) + "[/i]";
        }
        strVars += "[/buttonPropsArray][scrollBarPropsArray]";
        foreach (CCLScrollBarProps s in ScrollBarPropsArray)
        {
            strVars += "[i]" + encodeObject(s) + "[/i]";
        }
        strVars += "[/scrollBarPropsArray][gridPropsArray]";
        foreach (CCLGridProps g in GridPropsArray)
        {
            strVars += "[i]" + encodeObject(g) + "[/i]";
        }
        strVars += "[/gridPropsArray][comboboxPropsArray]";
        foreach (CCLComboBoxProps c in ComboBoxPropsArray)
        {
            strVars += "[i]" + encodeObject(c) + "[/i]";
        }
        strVars += "[/comboboxPropsArray][checkboxPropsArray]";
        foreach (CCLCheckBoxProps chk in CheckBoxPropsArray)
        {
            strVars += "[i]" + encodeObject(chk) + "[/i]";
        }
        strVars += "[/checkboxPropsArray][radiobuttonPropsArray]";
        foreach (CCLRadioButtonGroupProps r in RadioButtonGroupPropsArray)
        {
            strVars += "[i]" + encodeObject(r) + "[/i]";
        }
        strVars += "[/radiobuttonPropsArray][imageControlPropsArray]";
        foreach (CCLImageProps i in ImagePropsArray)
        {
            strVars += "[i]" + encodeObject(i) + "[/i]";
        }
        strVars += "[/imageControlPropsArray][treeViewPropsArray]";
        foreach (CCLTreeViewProps t in TreeViewPropsArray)
        {
            strVars += "[i]" + encodeObject(t) + "[/i]";
        }
        strVars += "[/treeViewPropsArray][calenderPropsArray]";
        foreach (CCLCalenderProps cal in CalenderPropsArray)
        {
            strVars += "[i]" + encodeObject(cal) + "[/i]";
        }
        strVars += "[/calenderPropsArray][progressBarPropsArray]";
        foreach (CCLProgressBarProps pb in ProgressBarPropsArray)
        {
            strVars += "[i]" + encodeObject(pb) + "[/i]";
        }
        strVars += "[/progressBarPropsArray][sliderPropsArray]";
        foreach (CCLSliderProps sl in SliderPropsArray)
        {
            strVars += "[i]" + encodeObject(sl) + "[/i]";
        }
        strVars += "[/sliderPropsArray][datePickerPropsArray]";
        foreach (CCLDatePickerProps dp in DatePrickerPropsArray)
        {
            strVars += "[i]" + encodeObject(dp) + "[/i]";
        }
        strVars += "[/datePickerPropsArray][panelPropsArray]";
        foreach (CCLPanelProps pp in PanelPropsArray)
        {
            strVars += "[i]" + encodeObject(pp) + "[/i]";
        }
        strVars += "[/panelPropsArray][barGraphsPropsArray]";
        foreach (CCLBarGraphProps bg in BarGraphPropsArray)
        {
            strVars += "[i]" + encodeObject(bg) + "[/i]";
        }
        strVars += "[/barGraphsPropsArray][pieChartsPropsArray]";
        foreach (CCLPieChartProps pc in PieChartPropsArray)
        {
            strVars += "[i]" + encodeObject(pc) + "[/i]";
        }
        strVars += "[/pieChartsPropsArray][lineGraphsPropsArray]";
        foreach (CCLLineGraphProps lg in LineGraphPropsArray)
        {
            strVars += "[i]" + encodeObject(lg) + "[/i]";
        }
        strVars += "[/lineGraphsPropsArray][gaugeChartPropsArray]";
        foreach (CCLGaugeChartProps gc in GaugeChartPropsArray)
        {
            strVars += "[i]" + encodeObject(gc) + "[/i]";
        }
        strVars += "[/gaugeChartPropsArray][radarGraphPropsArray]";
        foreach (CCLRadarGraphProps rg in RadarGraphPropsArray)
        {
            strVars += "[i]" + encodeObject(rg) + "[/i]";
        }
        strVars += "[/radarGraphPropsArray][lineAreaGraphPropsArray]";
        foreach (CCLLineAreaGraphProps lag in LineAreaGraphPropsArray)
        {
            strVars += "[i]" + encodeObject(lag) + "[/i]";
        }
        strVars += "[/lineAreaGraphPropsArray][candlesticksGraphPropsArray]";
        foreach (CCLCandlesticksGraphProps cs in CandlesticksGraphPropsArray)
        {
            strVars += "[i]" + encodeObject(cs) + "[/i]";
        }
        strVars += "[/candlesticksGraphPropsArray][doughnutChartPropsArray]";
        foreach (CCLDoughnutChartProps dc in DoughnutChartPropsArray)
        {
            strVars += "[i]" + encodeObject(dc) + "[/i]";
        }
        strVars += "[/doughnutChartPropsArray][barsMixedWithLabledLineGraphsPropsArray]";
        foreach (CCLBarsMixedWithLabeledLineGraphProps bm in BarsMixedWithLabeledLineGraphPropsArray)
        {
            strVars += "[i]" + encodeObject(bm) + "[/i]";
        }
        strVars += "[/barsMixedWithLabledLineGraphsPropsArray][stackedBarGraphPropsArray]";
        foreach (CCLStackedBarGraphProps sb in StackedBarGraphPropsArray)
        {
            strVars += "[i]" + encodeObject(sb) + "[/i]";
        }
        strVars += "[/stackedBarGraphPropsArray][tabPropsArray]";
        foreach (CCLTabProps tb in TabPropsArray)
        {
            strVars += "[i]" + encodeObject(tb) + "[/i]";
        }
        strVars += "[/tabPropsArray][imageMapPropsArray]";
        foreach (CCLImageMapProps im in ImageMapPropsArray)
        {
            strVars += "[i]" + encodeObject(im) + "[/i]";
        }
        strVars += "[/imageMapPropsArray][menuBarPropsArray]";
        foreach (CCLMenuBarProps mb in MenuBarPropsArray)
        {
            strVars += "[i]" + encodeObject(mb) + "[/i]";
        }
        strVars += "[/menuBarPropsArray][subMenuBarPropsArray]";
        foreach (CCLSubMenuBarProps smb in SubMenuBarPropsArray)
        {
            strVars += "[i]" + encodeObject(smb) + "[/i]";
        }
        strVars += "[/subMenuBarPropsArray][textBoxPropsArray]";
        foreach (CCLTextBoxProps smb in TextBoxPropsArray)
        {
            strVars += "[i]" + encodeObject(smb) + "[/i]";
        }
        strVars += "[/textBoxPropsArray][imageFaderPropsArray]";
        foreach (CCLImageFaderProps smb in ImageFaderPropsArray)
        {
            strVars += "[i]" + encodeObject(smb) + "[/i]";
        }
        strVars += "[/imageFaderPropsArray][imageSliderPropsArray]";
        foreach (CCLImageSliderProps smb in ImageSliderPropsArray)
        {
            strVars += "[i]" + encodeObject(smb) + "[/i]";
        }
        strVars += "[/imageSliderPropsArray][multiLineLabelPropsArray]";
        foreach (CCLMultiLineLabelProps smb in MultiLineLabelPropsArray)
        {
            strVars += "[i]" + encodeObject(smb) + "[/i]";
        }
        strVars += "[/multiLineLabelPropsArray][wordProcessorPropsArray]";
        foreach (CCLWordProcessorProps smb in WordProcessorPropsArray)
        {
            strVars += "[i]" + encodeObject(smb) + "[/i]";
        }
        strVars += "[/wordProcessorPropsArray]";
        strVars += "[/Vars][Params][Array]" + encodeParameters(parameters) + "[/Array][/Params][/root]";
        byte[] wdata = Encoding.ASCII.GetBytes(strVars);
        OutputStream.Write(wdata, 0, wdata.Length);
    }

    public string encodeParameters(ArrayList parameters)
    {
        string strParameters = "";
        foreach (object obj in parameters)
        {
            if (obj is ArrayList)
            {
                strParameters += "[Array]" + encodeParameters(obj as ArrayList) + "[/Array]";
            }
            else
            {
                strParameters += "[i]" + obj.ToString() + "[/i]";
            }
        }
        return strParameters;
    }

    public CCLWindow getWindowProps(string canvasid, string windowid)
    {
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].WindowCount == windowid && Windows[i].CanvasID == canvasid)
            {
                return Windows[i];
            }
        }
        return null;
    }

    public object getControlPropsByWindowID(string canvasid, string windowid)
    {
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].WindowCount == windowid && Windows[i].CanvasID == canvasid)
            {
                return getControlPropsByControlNameID(Windows[i].ControlNameID);
            }
        }
        return null;
    }

    public object getControlPropsByControlNameID(string controlNameID)
    {
        foreach (CCLWindow w in Windows)
        {
            if (w.ControlNameID == controlNameID)
            {
                switch (w.ControlType)
                {
                    case "Label":
                        foreach (CCLLabelProps o in LabelPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "Button":
                        foreach (CCLButtonProps o in ButtonPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "ScrollBar":
                        foreach (CCLScrollBarProps o in ScrollBarPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "Grid":
                        foreach (CCLGridProps o in GridPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "ComboBoxTextArea":
                        foreach (CCLComboBoxProps o in ComboBoxPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "CheckBox":
                        foreach (CCLCheckBoxProps o in CheckBoxPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "RadioButtonGroup":
                        foreach (CCLRadioButtonGroupProps o in RadioButtonGroupPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "Image":
                        foreach (CCLImageProps o in ImagePropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "TreeView":
                        foreach (CCLTreeViewProps o in TreeViewPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "Calender":
                        foreach (CCLCalenderProps o in CalenderPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "ProgressBar":
                        foreach (CCLProgressBarProps o in ProgressBarPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "Slider":
                        foreach (CCLSliderProps o in SliderPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "DatePickerTextArea":
                        foreach (CCLDatePickerProps o in DatePrickerPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "Panel":
                        foreach (CCLPanelProps o in PanelPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "BarGraph":
                        foreach (CCLBarGraphProps o in BarGraphPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "PieChart":
                        foreach (CCLPieChartProps o in PieChartPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "LineGraph":
                        foreach (CCLLineGraphProps o in LineGraphPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "Gauge":
                        foreach (CCLGaugeChartProps o in GaugeChartPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "RadarGraph":
                        foreach (CCLRadarGraphProps o in RadarGraphPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "LineAreaGraph":
                        foreach (CCLLineAreaGraphProps o in LineAreaGraphPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "CandlesticksGraph":
                        foreach (CCLCandlesticksGraphProps o in CandlesticksGraphPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "DoughnutChart":
                        foreach (CCLDoughnutChartProps o in DoughnutChartPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "BarsMixedWithLabeledLineGraph":
                        foreach (CCLBarsMixedWithLabeledLineGraphProps o in BarsMixedWithLabeledLineGraphPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "StackedBarGraph":
                        foreach (CCLStackedBarGraphProps o in StackedBarGraphPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "Tab":
                        foreach (CCLTabProps o in TabPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "ImageMap":
                        foreach (CCLImageMapProps o in ImageMapPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "SubMenu":
                        foreach (CCLSubMenuBarProps o in SubMenuBarPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "MenuBar":
                        foreach (CCLMenuBarProps o in MenuBarPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "TextBox":
                        foreach (CCLTextBoxProps o in TextBoxPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "ImageFader":
                        foreach (CCLImageFaderProps o in ImageFaderPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "ImageSlider":
                        foreach (CCLImageSliderProps o in ImageSliderPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "MultiLineLabel":
                        foreach (CCLMultiLineLabelProps o in MultiLineLabelPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                    case "WordProcessor":
                        foreach (CCLWordProcessorProps o in WordProcessorPropsArray)
                        {
                            if (o.CanvasID == w.CanvasID && o.WindowID == w.WindowCount)
                            {
                                return (object)o;
                            }
                        }
                        break;
                }
            }
        }
        return null;
    }
    /*
    public void DestroyControl(string canvasid, string windowid)
    {
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].CanvasID == canvasid && Windows[i].WindowCount == windowid)
            {
                DestroyControlByWindowObj(Windows[i]);
            }
        }
    }

    public void DestroyControlByNameID(string controlNameID)
    {
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].ControlNameID == controlNameID)
            {
                DestroyControlByWindowObj(Windows[i]);
            }
        }
    }

    public void DestroyWindow(string canvasid, string windowid)
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

    public void DestroyAllCurrentControls(string canvasid)
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

    public int GetHighestDepth(string canvasid)
    {
        int highestDepth = 0;
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].CanvasID == canvasid && Convert.ToInt32(Windows[i].Depth) > highestDepth)
            {
                highestDepth = Convert.ToInt32(Windows[i].Depth);
            }
        }
        return highestDepth;
    }

    public int GetHighestAndCurrentWindowCount(string canvasid)
    {
        int highestCurrentWindowCount = 0;
        for (int i = 0; i < Windows.Count; i++)
        {
            if (Windows[i].CanvasID == canvasid && highestCurrentWindowCount < Convert.ToInt32(Windows[i].WindowCount))
            {
                highestCurrentWindowCount = Convert.ToInt32(Windows[i].WindowCount);
            }
        }
        return highestCurrentWindowCount;
    }

    public static void StartSession(HtmlTextWriter writer)
    {
        Session session = new Session();
        Sessions.SessionsData.Add(session);
        writer.Write("<script  type=\"text/javascript\">sessionID='" + session.ID.ToString() + "';</script>");
    }
}