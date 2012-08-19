<?php

class CCLWindow
{
    public $WindowCount;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Depth;
    public $CanvasID;
    public $ParentWindowID;
    public $ChildWindowIDs;
    public $ControlType;
    public $ControlNameID;

    public function __construct()
    {
        $this->ChildWindowIDs = array();
    }
}

class CCLLabelProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Text;
    public $TextHeight;
    public $TextFontString;
    public $TextColor;
    public $IsHyperlink;
    public $URL;
    public $NoBrowserHistory;
    public $IsNewBrowserWindow;
    public $NameOfNewBrowserWindow;
    public $WidthOfNewBrowserWindow;
    public $HeightOfNewBrowserWindow;
    public $NewBrowserWindowIsResizable;
    public $NewBrowserWindowHasScrollBars;
    public $NewBrowserWindowHasToolbar;
    public $NewBrowserWindowHasLocationOrURLOrAddressBox;
    public $NewBrowserWindowHasDirectoriesOrExtraButtons;
    public $NewBrowserWindowHasStatusBar;
    public $NewBrowserWindowHasMenuBar;
    public $NewBrowserWindowCopyHistory;
    public $BackGroundColor;
    public $Tag;
}

class CCLButtonProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Text;
    public $EdgeRadius;
    public $BottomColorStart;
    public $BottomColorEnd;
    public $TopColorStart;
    public $TopColorEnd;
    public $TextHeight;
    public $TextFontString;
    public $TextColor;
    public $IsPressed;
    public $BorderColor;
    public $IsHyperlink;
    public $URL;
    public $NoBrowserHistory;
    public $IsNewBrowserWindow;
    public $NameOfNewBrowserWindow;
    public $WidthOfNewBrowserWindow;
    public $HeightOfNewBrowserWindow;
    public $NewBrowserWindowIsResizable;
    public $NewBrowserWindowHasScrollBars;
    public $NewBrowserWindowHasToolbar;
    public $NewBrowserWindowHasLocationOrURLOrAddressBox;
    public $NewBrowserWindowHasDirectoriesOrExtraButtons;
    public $NewBrowserWindowHasStatusBar;
    public $NewBrowserWindowHasMenuBar;
    public $NewBrowserWindowCopyHistory;
    public $Tag;
}

class CCLScrollBarProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Len;
    public $SelectedID;
    public $MaxItems;
    public $Alignment;
    public $MouseDownState;
    public $Tag;
}

class CCLGridProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $RowData;
    public $HeaderData;
    public $RowDataTextColor;
    public $RowDataTextFontString;
    public $HeaderDataTextColor;
    public $HeaderDataTextHeight;
    public $HeaderDataTextFontString;
    public $CellClickFunction;
    public $DataRowHeight;
    public $ColumnWidthArray;
    public $HeaderRowHeight;
    public $HasBorder;
    public $BorderColor;
    public $BorderLineWidth;
    public $VScrollBarWindowId;
    public $HScrollBarWindowId;
    public $HeaderBackgroundStartColor;
    public $HeaderBackgroundEndColor;
    public $AltRowBgColorStart1;
    public $AltRowBgColorEnd1;
    public $AltRowBgColorStart2;
    public $AltRowBgColorEnd2;
    public $Tag;

    public function __construct()
    {
        $this->RowData = array();
        $this->HeaderData = array();
        $this->ColumnWidthArray = array();
    }
}

class CCLComboBoxProps
{
    public $CanvasID;
    public $WindowID;
    public $TextAreaWindowID;
    public $ButtonWindowID;
    public $ListAreaWindowID;
    public $VScrollBarWindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $SelectedID;
    public $TextAreaTextColor;
    public $TextAreaTextHeight;
    public $TextAreaFontString;
    public $ListAreaTextColor;
    public $ListAreaTextHeight;
    public $ListAreaFontString;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
    }
}

class CCLCheckBoxProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Status;
    public $Tag;
}

class CCLRadioButtonGroupProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Alignment;
    public $GroupName;
    public $Labels;
    public $SelectedID;
    public $LabelTextColor;
    public $LabelFontString;
    public $Radius;
    public $ButtonExtents;
    public $LabelTextHeight;
    public $Tag;

    public function __construct()
    {
        $this->Labels = array();
        $this->ButtonExtents = array();
    }
}

class CCLImageProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $ImageURL;
    public $ClickFunction;
    public $AlreadyDrawnImage;
    public $IsHyperlink;
    public $URL;
    public $NoBrowserHistory;
    public $IsNewBrowserWindow;
    public $NameOfNewBrowserWindow;
    public $WidthOfNewBrowserWindow;
    public $HeightOfNewBrowserWindow;
    public $NewBrowserWindowIsResizable;
    public $NewBrowserWindowHasScrollBars;
    public $NewBrowserWindowHasToolbar;
    public $NewBrowserWindowHasLocationOrURLOrAddressBox;
    public $NewBrowserWindowHasDirectoriesOrExtraButtons;
    public $NewBrowserWindowHasStatusBar;
    public $NewBrowserWindowHasMenuBar;
    public $NewBrowserWindowCopyHistory;
    public $Tag;
}

class CCLTreeViewProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $IDColumnIndex;
    public $ParentIDColIndex;
    public $ExpandedColIndex;
    public $LabelColIndex;
    public $VScrollBarWindowID;
    public $HScrollBarWindowID;
    public $TextColor;
    public $TextFontString;
    public $TextHeight;
    public $ClickButtonExtents;
    public $ClickLabelExtents;
    public $ClickNodeFunction;
    public $SelectedNodeIndex;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
        $this->ClickButtonExtents = array();
        $this->ClickLabelExtents = array();
    }
}

class CCLCalenderProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $VisibleMonth;
    public $VisibleYear;
    public $SelectedDay;
    public $DayCellWidth;
    public $DayCellHeight;
    public $HeaderHeight;
    public $TextHeaderColor;
    public $TextHeaderHeight;
    public $TextHeaderFontString;
    public $DayDateActiveColor;
    public $DayDateActiveTextHeight;
    public $DayDateActiveTextFontString;
    public $DayDateInactiveTextColor;
    public $DayDateInactiveTextHeight;
    public $DayDateInactiveTextFontString;
    public $SelectedDayTextColor;
    public $SelectedDayTextHeight;
    public $SelectedDayTextFontString;
    public $SelectedDayHighLightColor;
    public $TodayTextColor;
    public $TodayTextHeight;
    public $TodayTextFontString;
    public $TodayHighLightColor;
    public $OnDayClickFunction;
    public $HeaderBackgroundColor;
    public $BodyBackgroundColor;
    public $MouseOverHightLightColor;
    public $MouseHoverDate;
    public $ButtonClickExtents;
    public $DateClickExtents;
    public $DayLabelTextColor;
    public $DayLabelTextHeight;
    public $DayLabelTextFontString;
    public $Tag;

    public function __construct()
    {
        $this->ButtonClickExtents = array();
        $this->DateClickExtents = array();
    }
}

class CCLProgressBarProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Color;
    public $MaxValue;
    public $MinValue;
    public $CurrentValue;
    public $Tag;
}

class CCLSliderProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $HandleWidth;
    public $HandleHeight;
    public $MaxValue;
    public $MinValue;
    public $CurrentValue;
    public $MouseDownState;
    public $Tag;
}

class CCLDatePickerProps
{
    public $CanvasID;
    public $WindowID;
    public $TextBoxAreaWindowID;
    public $ButtonWindowID;
    public $CalenderWindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $TextBoxAreaTextColor;
    public $TextBoxAreaTextHeight;
    public $TextBoxAreaTextFontString;
    public $Tag;
}

class CCLPanelProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $ExpandedWidth;
    public $ExpandedHeight;
    public $CollapsedWidth;
    public $CollapsedHeight;
    public $IsCollapsable;
    public $HasBorder;
    public $BorderColor;
    public $HasBackgroundGradient;
    public $BackgroundStartColor;
    public $BackgroundEndColor;
    public $HeaderHeight;
    public $HeaderBackgroundStartColor;
    public $HeaderBackgroundEndColor;
    public $ExpandCollapseButtonColor;
    public $IsExpanded;
    public $ExpandCollapseButtonRadius;
    public $PanelLabel;
    public $PanelLabelTextColor;
    public $PanelLabelTextHeight;
    public $PanelLabelTextFontString;
    public $OriginalWidth;
    public $OriginalHeight;
    public $Tag;
}

class CCLBarGraphProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $MaxValue;
    public $NumMarksY;
    public $Title;
    public $TitleTextColor;
    public $TitleTextHeight;
    public $TitleTextFontString;
    public $BarWidth;
    public $BarLabelsWithBoundingBoxes;
    public $H;
    public $AxisLabelsTextHeight;
    public $AxisLabelsTextFontString;
    public $AxisLabelsTextColor;
    public $MarginLeft;
    public $GapBetweenBars;
    public $BarClickFunction;
    public $AlreadyUnregisteredAnimation;
    public $HasLegend;
    public $MarginRight;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
        $this->BarLabelsWithBoundingBoxes = array();
    }
}

class CCLPieChartProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $Title;
    public $TitleTextColor;
    public $TitleTextHeight;
    public $TitleTextFontString;
    public $CurrentRadius;
    public $TotalValue;
    public $LabelTextColor;
    public $LabelTextHeight;
    public $LabelTextFontString;
    public $AlreadyUnregisteredAnimation;
    public $DeltaI;
    public $DeltaX;
    public $DeltaY;
    public $SliceClickFunction;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
    }
}

class CCLLineGraphProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $XMaxValue;
    public $NumMarksX;
    public $YMaxValue;
    public $NumMarksY;
    public $Title;
    public $TitleTextColor;
    public $TitleTextHeight;
    public $TitleTextFontString;
    public $AxisLabelsTextColor;
    public $AxisLabelsTextHeight;
    public $AxisLabelsTextFontString;
    public $H;
    public $HMax;
    public $LineXYs;
    public $ClickFunction;
    public $AlreadyUnregisteredAnimation;
    public $MarginLeft;
    public $IsLabeledXValues;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
        $this->LineXYs = array();
    }
}

class CCLGaugeChartProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $Title;
    public $TitleTextColor;
    public $TitleTextHeight;
    public $TitleTextFontString;
    public $H;
    public $CenterX;
    public $CenterY;
    public $GaugeRadius;
    public $GaugeLabelTextColor;
    public $GaugeLabelTextHeight;
    public $GaugeLabelTextFontString;
    public $AlreadyUnregisteredAnimation;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
    }
}

class CCLRadarGraphProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $MaxValue;
    public $ColorStr;
    public $NumMarks;
    public $Title;
    public $TitleTextColor;
    public $TitleTextHeight;
    public $TitleTextFontString;
    public $H;
    public $MarkLabelTextColor;
    public $MarkLabelTextHeight;
    public $MarkLabelTextFontString;
    public $AlreadyUnregisteredAnimation;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
    }
}

class CCLLineAreaGraphProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $XMaxValue;
    public $YMaxValue;
    public $NumMarksX;
    public $NumMarksY;
    public $Title;
    public $TitleTextColor;
    public $TitleTextHeight;
    public $TitleTextFontString;
    public $AxisLabelsColor;
    public $AxisLabelsHeight;
    public $AxisLabelsFontString;
    public $H;
    public $MarginLeft;
    public $AlreadyUnregisteredAnimation;
    public $IsLabledOnXAxis;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
    }
}

class CCLCandlesticksGraphProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $XMarksLabelData;
    public $XMarksWidth;
    public $YMaxValue;
    public $NumMarksY;
    public $Title;
    public $TitleColor;
    public $TitleHeight;
    public $TitleFontString;
    public $CandleBodyWidth;
    public $CandleBodyColor;
    public $CandleLineColor;
    public $MarginLeft;
    public $AxisLabelsColor;
    public $AxisLabelsHeight;
    public $AxisLabelsFontString;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
        $this->XMarksLabelData = array();
    }
}

class CCLDoughnutChartProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $Title;
    public $TitleColor;
    public $TitleTextHeight;
    public $TitleFontString;
    public $InnerRadius;
    public $CurrentRadius;
    public $TotalValue;
    public $MarginSides;
    public $LabelColor;
    public $LabelHeight;
    public $LabelFontString;
    public $LegendWidth;
    public $LegendHeight;
    public $LegendFontString;
    public $AnimationCompleted;
    public $DeltaI;
    public $DeltaX;
    public $DeltaY;
    public $SliceClickFunction;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
    }
}

class CCLBarsMixedWithLabeledLineGraphProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $MaxValue;
    public $NumMarksY;
    public $Title;
    public $TitleTextColor;
    public $TitleTextHeight;
    public $TitleTextFontString;
    public $BarWidth;
    public $BarLabelsWithBoundingBoxes;
    public $H;
    public $AxisLabelsTextHeight;
    public $AxisLabelsTextFontString;
    public $AxisLabelsTextColor;
    public $MarginLeft;
    public $GapBetweenBars;
    public $BarClickFunction;
    public $AlreadyUnregisteredAnimation;
    public $HasLegend;
    public $MarginRight;
    public $LinesData;
    public $LineXYs;
    public $LineClickFunction;
    public $YMaxValue;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
        $this->BarLabelsWithBoundingBoxes = array();
        $this->LinesData = array();
        $this->LineXYs = array();
    }
}

class CCLStackedBarGraphProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $MaxValue;
    public $NumMarksY;
    public $Title;
    public $TitleColor;
    public $TitleHeight;
    public $TitleFontString;
    public $BarWidth;
    public $GapBetweenBarSets;
    public $H;
    public $AxisLabelsColor;
    public $AxisLabelsHeight;
    public $AxisLabelsFontString;
    public $BarLabelsWithBoundingBoxes;
    public $BarClickFunction;
    public $AlreadyUnregisteredAnimation;
    public $MarginLeft;
    public $Tag;

    public function __construct()
    {
        $this->BarLabelsWithBoundingBoxes = array();
    }
}

class CCLTabProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $TabLabels;
    public $TabLabelColor;
    public $TabLabelHeight;
    public $TabLabelFontString;
    public $PanelWindowIDs;
    public $SelectedTabID;
    public $TabLabelGradientStartColor;
    public $TabLabelGradientEndColor;
    public $TabLabelHitAreas;
    public $GapBetweenTabs;
    public $SelectedTabBorderColor;
    public $SelectedTabBorderLineWidth;
    public $Tag;

    public function __construct()
    {
        $this->TabLabels = array();
        $this->PanelWindowIDs = array();
        $this->TabLabelHitAreas = array();
    }
}

class CCLImageMapProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $ImgUrl;
    public $PinXYs;
    public $PinClickFunction;
    public $HasZoom;
    public $ImageTopLeftXOffset;
    public $ImageTopLeftYOffset;
    public $MovingMap;
    public $LastMovingX;
    public $LastMovingY;
    public $Scale;
    public $ScaleIncrementFactor;
    public $Tag;

    public function __construct()
    {
        $this->PinXYs = array();
    }
}

class CCLMenuBarProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $BarColorStart;
    public $BarColorMiddle;
    public $BarColorEnd;
    public $DropDownColorStart;
    public $DropDownColorEnd;
    public $ChildMenuWindowIDs;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
        $this->ChildMenuWindowIDs = array();
    }
}

class CCLSubMenuBarProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Data;
    public $ParentMenuWindowID;
    public $ParentIndexInParentMenu;
    public $ChildMenuWindowIDs;
    public $DropDownColorStart;
    public $DropDownColorEnd;
    public $Tag;

    public function __construct()
    {
        $this->Data = array();
        $this->ChildMenuWindowIDs = array();
    }
}

class CCLTextBoxProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width; 
    public $Height; 
    public $WaterMarkText;
    public $WaterMarkTextColor;
    public $WaterMarkTextFontString;
    public $TextColor;
    public $TextHeight;
    public $TextFontString;
    public $MaxChars;
    public $AllowedCharsRegEx;
    public $IsPassword;
    public $PasswordChar;
    public $HasBorder;
    public $BorderColor;
    public $BorderLineWidth;
    public $HasShadow;
    public $ShadowOffsetX;
    public $ShadowOffsetY;
    public $ShadowBlurValue;
    public $HasRoundedEdges;
    public $EdgeRadius;
    public $HasBgGradient;
    public $BgGradientStartColor;
    public $BgGradientEndColor;
    public $HasBgImage;
    public $BgImageUrl;
    public $HasAutoComplete;
    public $ListPossibles;
    public $DropDownPossiblesListIfThereIsInputText;
    public $LimitToListPossibles;
    public $ListPossiblesTextHeight;
    public $ListPossiblesTextFontString;
    public $CaretPosIndex;
    public $UserInputText;
    public $ShadowColor;
    public $ShowCaret;
    public $CaretColor;
    public $Tag;
}

class CCLImageFaderProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $ImageURLs;
    public $FadeStartValue;
    public $FadeEndValue;
    public $FadeStepValue;
    public $HoldForTicks;
    public $ClickFunction;
    public $HoldCountDown;
    public $CurrentImageIndex;
    public $CurrentGlobalAlphaValue;
    public $OverlayImages;

    public function __construct()
    {
        $this->ImageURLs = array();
    }
}

class JavaScriptFunctionsToSendAndAttachOnClientSide
{
    public $CanvasID;
    public $WindowID;
    public $JavaScriptCode;
    public $ClientSideArrayVarName;
    public $ClientSidePropertyName;
    public $GetPropsFunctionName;

    public function __construct($canvasid, $windowid, $javascriptcode, $clientsidearrayvarname, $clientsidepropertyname, $getpropsfunctionname)
    {
        $this->CanvasID = $canvasid;
        $this->WindowID = $windowid;
        $this->JavaScriptCode = $javascriptcode;
        $this->ClientSideArrayVarName = $clientsidearrayvarname;
        $this->ClientSidePropertyName = $clientsidepropertyname;
        $this->GetPropsFunctionName = $getpropsfunctionname;
    }
}


class CanvasControlLibrary
{
	public $Windows;
	public $LabelPropsArray;
	public $ButtonPropsArray;
	public $ScrollBarPropsArray;
	public $GridPropsArray;
	public $ComboBoxPropsArray;
	public $CheckBoxPropsArray;
	public $RadioButtonGroupPropsArray;
	public $ImagePropsArray;
	public $TreeViewPropsArray;
	public $CalenderPropsArray;
	public $ProgressBarPropsArray;
	public $SliderPropsArray;
	public $DatePrickerPropsArray;
	public $PanelPropsArray;
	public $BarGraphPropsArray;
	public $PieChartPropsArray;
	public $LineGraphPropsArray;
	public $GaugeChartPropsArray;
	public $RadarGraphPropsArray;
	public $LineAreaGraphPropsArray;
	public $CandlesticksGraphPropsArray;
	public $DoughnutChartPropsArray;
	public $BarsMixedWithLabeledLineGraphPropsArray;
	public $StackedBarGraphPropsArray;
	public $TabPropsArray;
	public $ImageMapPropsArray;
	public $MenuBarPropsArray;
	public $SubMenuBarPropsArray;
	public $TextBoxPropsArray;
	public $ImageFaderPropsArray;
	public $JavaScriptCodeToSendInThisCall;

    public $FunctionName;
    public $CanvasID;
    public $WindowID;

	public function __construct() {
		$this->Windows = array();
		$this->LabelPropsArray = array();
		$this->ButtonPropsArray = array();
		$this->ScrollBarPropsArray = array();
		$this->GridPropsArray = array();
		$this->ComboBoxPropsArray = array();
		$this->CheckBoxPropsArray = array();
		$this->RadioButtonGroupPropsArray = array();
		$this->ImagePropsArray = array();
		$this->TreeViewPropsArray = array();
		$this->CalenderPropsArray = array();
		$this->ProgressBarPropsArray = array();
		$this->SliderPropsArray = array();
		$this->DatePrickerPropsArray = array();
		$this->PanelPropsArray = array();
		$this->BarGraphPropsArray = array();
		$this->PieChartPropsArray = array();
		$this->LineGraphPropsArray = array();
		$this->GaugeChartPropsArray = array();
		$this->RadarGraphPropsArray = array();
		$this->LineAreaGraphPropsArray = array();
		$this->CandlesticksGraphPropsArray = array();
		$this->DoughnutChartPropsArray = array();
		$this->BarsMixedWithLabeledLineGraphPropsArray = array();
		$this->StackedBarGraphPropsArray = array();
		$this->TabPropsArray = array();
		$this->ImageMapPropsArray = array();
		$this->MenuBarPropsArray = array();
		$this->SubMenuBarPropsArray = array();
		$this->TextBoxPropsArray = array();
		$this->ImageFaderPropsArray = array();
		$this->JavaScriptCodeToSendInThisCall = array();

		$fp = fopen("php://input", 'rb');
		$rdata = stream_get_contents($fp);
		fclose($fp);
        $strData = str_replace("[", "<", $rdata);
        $strData = str_replace("]", ">", $strData);
        $strData = str_replace("&lb;", "[", $strData);
        $strData = str_replace("&rb;", "]", $strData);
        $strData = str_replace("&amp;", "&", $strData);
		$vars = simplexml_load_string("<root>" . $strData . "</root>");
        foreach($vars->children() as $child) {
            switch($child->getName()) {
                case "FunctionName":
                    $this->FunctionName = $child;
                    break;
                case "CanvasID":
                    $this->CanvasID = $child;
                    break;
                case "WindowID":
                    $this->WindowID = $child;
                    break;
                case "Vars":
                    $this->UnwrapVars($child);
                    break;
            }
        }
    }

    public function InvokeServerSideFunction()
    {
    	$tmp = $this->FunctionName->__toString();
    	$tmp($this, $this->CanvasID, intval($this->WindowID));
    }

    public function DecodeXML($str)
    {
    	$str = str_replace("&lb;", "[", $str);
    	$str = str_replace("&rb;", "]", $str);
        return str_replace("&amp;", "&", $str);
    }

    public function FillClassObject($child2, $g)
    {
        foreach ($child2->children() as $child3)
        {
            $strName = $child3->getName();
                if (count($child3->children()) == 0)
                {
                    $g->$strName = $this->DecodeXML($child3->__toString());
                }
                else if (count($child3->children()) > 0 || (count($child3->children()) != 0 && $this->getChildByIndex($child3, 0)->getName() == "i"))
                {
                    $al = array();
                    foreach ($child3->children() as $child4)
                    {
                        if ($child4->getName() == "Array")
                        {
                            $this->AddArrayData($child4, $al);
                        }
                        else if (count($child4->children()) == 0)
                        {
                            array_push($al, $child4->__toString());
                        }
                    }
                    $g->$strName = $al;
                }
        }
    }
    
    public function UnwrapVars($node)
    {
        foreach ($node->children() as $child1)
        {
            switch ($child1->getName())
            {
                case "Windows":
                    foreach ($child1->children() as $child2)
                    {
                        $w = new CCLWindow();
                        array_push($this->Windows, $w);
                        $this->FillClassObject($child2, $w);
                    }
                    break;
                case "labelPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $l = new CCLLabelProps();
                        array_push($this->LabelPropsArray, $l);
                        $this->FillClassObject($child2, $l);
                    }
                    break;
                case "buttonPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $b = new CCLButtonProps();
                        array_push($this->ButtonPropsArray, $b);
                        $this->FillClassObject($child2, $b);
                    }
                    break;
                case "scrollBarPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $s = new CCLScrollBarProps();
                        array_push($this->ScrollBarPropsArray, $s);
                        $this->FillClassObject($child2, $s);
                    }
                    break;
                case "gridPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $g = new CCLGridProps();
                        array_push($this->GridPropsArray, $g);
                        $this->FillClassObject($child2, $g);
                    }
                    break;
                case "comboboxPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $c = new CCLComboBoxProps();
                        array_push($this->ComboBoxPropsArray, $c);
                        $this->FillClassObject($child2, $c);
                    }
                    break;
                case "checkboxPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $chk = new CCLCheckBoxProps();
                        array_push($this->CheckBoxPropsArray, $chk);
                        $this->FillClassObject($child2, $chk);
                    }
                    break;
                case "radiobuttonPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $rg = new CCLRadioButtonGroupProps();
                        array_push($this->RadioButtonGroupPropsArray, $rg);
                        $this->FillClassObject($child2, $rg);
                    }
                    break;
                case "imageControlPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $img = new CCLImageProps();
                        array_push($this->ImagePropsArray, $img);
                        $this->FillClassObject($child2, $img);
                    }
                    break;
                case "treeViewPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $tv = new CCLTreeViewProps();
                        array_push($this->TreeViewPropsArray, $tv);
                        $this->FillClassObject($child2, $tv);
                    }
                    break;
                case "calenderPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $cal = new CCLCalenderProps();
                        array_push($this->CalenderPropsArray, $cal);
                        $this->FillClassObject($child2, $cal);
                    }
                    break;
                case "progressBarPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $pb = new CCLProgressBarProps();
                        array_push($this->ProgressBarPropsArray, $pb);
                        $this->FillClassObject($child2, $pb);
                    }
                    break;
                case "sliderPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $s = new CCLSliderProps();
                        array_push($this->SliderPropsArray, $s);
                        $this->FillClassObject($child2, $s);
                    }
                    break;
                case "datePickerPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $dp = new CCLDatePickerProps();
                        array_push($this->DatePrickerPropsArray, $dp);
                        $this->FillClassObject($child2, $dp);
                    }
                    break;
                case "panelPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $p = new CCLPanelProps();
                        array_push($this->PanelPropsArray, $p);
                        $this->FillClassObject($child2, $p);
                    }
                    break;
                case "barGraphsPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $bg = new CCLBarGraphProps();
                        array_push($this->BarGraphPropsArray, $bg);
                        $this->FillClassObject($child2, $bg);
                    }
                    break;
                case "pieChartsPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $pc = new CCLPieChartProps();
                        array_push($this->PieChartPropsArray, $pc);
                        $this->FillClassObject($child2, $pc);
                    }
                    break;
                case "lineGraphsPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $lg = new CCLLineGraphProps();
                        array_push($this->LineGraphPropsArray, $lg);
                        $this->FillClassObject($child2, $lg);
                    }
                    break;
                case "gaugeChartPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $g = new CCLGaugeChartProps();
                        array_push($this->GaugeChartPropsArray, $g);
                        $this->FillClassObject($child2, $g);
                    }
                    break;
                case "radarGraphPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $r = new CCLRadarGraphProps();
                        array_push($this->RadarGraphPropsArray, $r);
                        $this->FillClassObject($child2, $r);
                    }
                    break;
                case "lineAreaGraphPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $la = new CCLLineAreaGraphProps();
                        array_push($this->LineAreaGraphPropsArray, $la);
                        $this->FillClassObject($child2, $la);
                    }
                    break;
                case "candlesticksGraphPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $c = new CCLCandlesticksGraphProps();
                        array_push($this->CandlesticksGraphPropsArray, $c);
                        $this->FillClassObject($child2, $c);
                    }
                    break;
                case "doughnutChartPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $d = new CCLDoughnutChartProps();
                        array_push($this->DoughnutChartPropsArray, $d);
                        $this->FillClassObject($child2, $d);
                    }
                    break;
                case "barsMixedWithLabledLineGraphsPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $b = new CCLBarsMixedWithLabeledLineGraphProps();
                        array_push($this->BarsMixedWithLabeledLineGraphPropsArray, $b);
                        $this->FillClassObject($child2, $b);
                    }
                    break;
                case "stackedBarGraphPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $s = new CCLStackedBarGraphProps();
                        array_push($this->StackedBarGraphPropsArray, $s);
                        $this->FillClassObject($child2, $s);
                    }
                    break;
                case "tabPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $t = new CCLTabProps();
                        array_push($this->TabPropsArray, $t);
                        $this->FillClassObject($child2, $t);
                    }
                    break;
                case "imageMapPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $t = new CCLImageMapProps();
                        array_push($this->ImageMapPropsArray, $t);
                        $this->FillClassObject($child2, $t);
                    }
                    break;
                case "menuBarPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $m = new CCLMenuBarProps();
                        array_push($this->MenuBarPropsArray, $m);
                        $this->FillClassObject($child2, $m);
                    }
                    break;
                case "subMenuBarPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $sm = new CCLSubMenuBarProps();
                        array_push($this->SubMenuBarPropsArray, $sm);
                        $this->FillClassObject($child2, $sm);
                    }
                    break;
                case "textBoxPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $tb = new CCLTextBoxProps();
                        array_push($this->TextBoxPropsArray, $tb);
                        $this->FillClassObject($child2, $tb);
                    }
                    break;
            }
        }
    }

    public function getChildByIndex($child, $idx){
        $tmpidx = 0;
        foreach($child->children() as $child2){
            if($tmpidx == $idx){
                return $child2;
            }
        }
    }
    
    public function AddArrayData($node, &$pal)
    {
        $al = array();
        foreach ($node->children() as $child)
        {
            if (count($child->children()) == 0)
            {
                array_push($al, $child->__toString());
            }
            else if (count($child->children()) > 0)
            {
                $this->AddArrayData($child, $al);
            }
        }
        array_push($pal, $al);
    }

    public function recurseArrayList($al)
    {
        $str = "[Array]";
        foreach ($al as $obj)
        {
            if (is_array($obj))
            {
                $str .= $this->recurseArrayList($obj);
            }
            else
            {
                $str .= "[i]" . $obj . "[/i]";
            }
        }
        return $str . "[/Array]";
    }

    public function encodeString($str)
    {
    	$str = str_replace("&", "&amp;", $str);
    	$str = str_replace("[", "&lb;", $str);
        return str_replace("]", "&rb;", $str);
    }

    public function encodeObject($o)
    {
        $str = "";
        foreach($o as $key => $value) {
            if(is_array($value)) {
                $str .= "[" . $key . "][Array]";
                foreach ($value as $obj)
                {
                    if (is_array($obj))
                    {
                        $str .= $this->recurseArrayList($obj);
                    }
                    else
                    {
                        $str .= "[i]" . $this->encodeString($obj) . "[/i]";
                    }
                }
                $str .= "[/Array][/" . $key . "]";
            }
            else
            {
                $str .= "[" . $key . "]" . ($value != null && strlen($value) > 0 ? $this->encodeString($value) : "") . "[/" . $key . "]";
            }
        }
        return $str;
    }

    public function SendVars($parameters)
    {
        $strVars = '[root][Vars][windows]';
        foreach ($this->Windows as $w)
        {
            $strVars .= "[i]" . $this->encodeObject($w) . "[/i]";
        }
        $strVars .= "[/windows][labelPropsArray]";
        foreach ($this->LabelPropsArray as $l)
        {
            $strVars .= "[i]" . $this->encodeObject($l) . "[/i]";
        }
        $strVars .= "[/labelPropsArray][buttonPropsArray]";
        foreach ($this->ButtonPropsArray as $b)
        {
            $strVars .= "[i]" . $this->encodeObject($b) . "[/i]";
        }
        $strVars .= "[/buttonPropsArray][scrollBarPropsArray]";
        foreach ($this->ScrollBarPropsArray as $s)
        {
            $strVars .= "[i]" . $this->encodeObject($s) . "[/i]";
        }
        $strVars .= "[/scrollBarPropsArray][gridPropsArray]";
        foreach ($this->GridPropsArray as $g)
        {
            $strVars .= "[i]" . $this->encodeObject($g) . "[/i]";
        }
        $strVars .= "[/gridPropsArray][comboboxPropsArray]";
        foreach ($this->ComboBoxPropsArray as $c)
        {
            $strVars .= "[i]" . $this->encodeObject($c) . "[/i]";
        }
        $strVars .= "[/comboboxPropsArray][checkboxPropsArray]";
        foreach ($this->CheckBoxPropsArray as $chk)
        {
            $strVars .= "[i]" . $this->encodeObject($chk) . "[/i]";
        }
        $strVars .= "[/checkboxPropsArray][radiobuttonPropsArray]";
        foreach ($this->RadioButtonGroupPropsArray as $r)
        {
            $strVars .= "[i]" . $this->encodeObject($r) . "[/i]";
        }
        $strVars .= "[/radiobuttonPropsArray][imageControlPropsArray]";
        foreach ($this->ImagePropsArray as $i)
        {
            $strVars .= "[i]" . $this->encodeObject($i) . "[/i]";
        }
        $strVars .= "[/imageControlPropsArray][treeViewPropsArray]";
        foreach ($this->TreeViewPropsArray as $t)
        {
            $strVars .= "[i]" . $this->encodeObject($t) . "[/i]";
        }
        $strVars .= "[/treeViewPropsArray][calenderPropsArray]";
        foreach ($this->CalenderPropsArray as $cal)
        {
            $strVars .= "[i]" . $this->encodeObject($cal) . "[/i]";
        }
        $strVars .= "[/calenderPropsArray][progressBarPropsArray]";
        foreach ($this->ProgressBarPropsArray as $pb)
        {
            $strVars .= "[i]" . $this->encodeObject($pb) . "[/i]";
        }
        $strVars .= "[/progressBarPropsArray][sliderPropsArray]";
        foreach ($this->SliderPropsArray as $sl)
        {
            $strVars .= "[i]" . $this->encodeObject($sl) . "[/i]";
        }
        $strVars .= "[/sliderPropsArray][datePickerPropsArray]";
        foreach ($this->DatePrickerPropsArray as $dp)
        {
            $strVars .= "[i]" . $this->encodeObject($dp) . "[/i]";
        }
        $strVars .= "[/datePickerPropsArray][panelPropsArray]";
        foreach ($this->PanelPropsArray as $pp)
        {
            $strVars .= "[i]" . $this->encodeObject($pp) . "[/i]";
        }
        $strVars .= "[/panelPropsArray][barGraphsPropsArray]";
        foreach ($this->BarGraphPropsArray as $bg)
        {
            $strVars .= "[i]" . $this->encodeObject($bg) . "[/i]";
        }
        $strVars .= "[/barGraphsPropsArray][pieChartsPropsArray]";
        foreach ($this->PieChartPropsArray as $pc)
        {
            $strVars .= "[i]" . $this->encodeObject($pc) . "[/i]";
        }
        $strVars .= "[/pieChartsPropsArray][lineGraphsPropsArray]";
        foreach ($this->LineGraphPropsArray as $lg)
        {
            $strVars .= "[i]" . $this->encodeObject($lg) . "[/i]";
        }
        $strVars .= "[/lineGraphsPropsArray][gaugeChartPropsArray]";
        foreach ($this->GaugeChartPropsArray as $gc)
        {
            $strVars .= "[i]" . $this->encodeObject($gc) . "[/i]";
        }
        $strVars .= "[/gaugeChartPropsArray][radarGraphPropsArray]";
        foreach ($this->RadarGraphPropsArray as $rg)
        {
            $strVars .= "[i]" . $this->encodeObject($rg) . "[/i]";
        }
        $strVars .= "[/radarGraphPropsArray][lineAreaGraphPropsArray]";
        foreach ($this->LineAreaGraphPropsArray as $lag)
        {
            $strVars .= "[i]" . $this->encodeObject($lag) . "[/i]";
        }
        $strVars .= "[/lineAreaGraphPropsArray][candlesticksGraphPropsArray]";
        foreach ($this->CandlesticksGraphPropsArray as $cs)
        {
            $strVars .= "[i]" . $this->encodeObject($cs) . "[/i]";
        }
        $strVars .= "[/candlesticksGraphPropsArray][doughnutChartPropsArray]";
        foreach ($this->DoughnutChartPropsArray as $dc)
        {
            $strVars .= "[i]" . $this->encodeObject($dc) . "[/i]";
        }
        $strVars .= "[/doughnutChartPropsArray][barsMixedWithLabledLineGraphsPropsArray]";
        foreach ($this->BarsMixedWithLabeledLineGraphPropsArray as $bm)
        {
            $strVars .= "[i]" . $this->encodeObject($bm) . "[/i]";
        }
        $strVars .= "[/barsMixedWithLabledLineGraphsPropsArray][stackedBarGraphPropsArray]";
        foreach ($this->StackedBarGraphPropsArray as $sb)
        {
            $strVars .= "[i]" . $this->encodeObject($sb) . "[/i]";
        }
        $strVars .= "[/stackedBarGraphPropsArray][tabPropsArray]";
        foreach ($this->TabPropsArray as $tb)
        {
            $strVars .= "[i]" . $this->encodeObject($tb) . "[/i]";
        }
        $strVars .= "[/tabPropsArray][imageMapPropsArray]";
        foreach ($this->ImageMapPropsArray as $im)
        {
            $strVars .= "[i]" . $this->encodeObject($im) . "[/i]";
        }
        $strVars .= "[/imageMapPropsArray][menuBarPropsArray]";
        foreach ($this->MenuBarPropsArray as $mb)
        {
            $strVars .= "[i]" . $this->encodeObject($mb) . "[/i]";
        }
        $strVars .= "[/menuBarPropsArray][subMenuBarPropsArray]";
        foreach ($this->SubMenuBarPropsArray as $smb)
        {
            $strVars .= "[i]" . $this->encodeObject($smb) . "[/i]";
        }
        $strVars .= "[/subMenuBarPropsArray][textBoxPropsArray]";
        foreach ($this->TextBoxPropsArray as $tbx)
        {
            $strVars .= "[i]" . $this->encodeObject($tbx) . "[/i]";
        }
        $strVars .= "[/textBoxPropsArray]";
        $strVars .= "[/Vars][Params][Array]" . $this->encodeParameters($parameters) . "[/Array][/Params][/root]";
        echo $strVars;
    }

    public function encodeParameters($parameters)
    {
        $strParameters = "";
        foreach ($parameters as $obj)
        {
            if (is_array($obj))
            {
                $strParameters .= "[Array]" . $this->encodeParameters($obj) . "[/Array]";
            }
            else
            {
                $strParameters .= "[i]" . $obj . "[/i]";
            }
        }
        return $strParameters;
    }

    public function getWindowProps($canvasid, $windowid)
    {
        foreach ($this->Windows as $w)
        {
            if ($w->WindowCount == $windowid && $w->CanvasID == $canvasid)
            {
                return $w;
            }
        }
        return null;
    }
    
    public function getControlPropsByWindowID($canvasid, $windowid)
    {
        foreach ($this->Windows as $w)
        {
            if ($w->WindowCount == $windowid && $w->CanvasID == $canvasid)
            {
                return $this->getControlPropsByControlNameID($w->ControlNameID);
            }
        }
        return null;
    }

    public function getControlPropsByControlNameID($controlNameID)
    {
        foreach ($this->Windows as $w)
        {
            if ($w->ControlNameID == $controlNameID)
            {
                switch ($w->ControlType)
                {
                    case "Label":
                        foreach ($this->LabelPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "Button":
                        foreach ($this->ButtonPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "ScrollBar":
                        foreach ($this->ScrollBarPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "Grid":
                        foreach ($this->GridPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "ComboBoxTextArea":
                        foreach ($this->ComboBoxPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "CheckBox":
                        foreach ($this->CheckBoxPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "RadioButtonGroup":
                        foreach ($this->RadioButtonGroupPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "Image":
                        foreach ($this->ImagePropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "TreeView":
                        foreach ($this->TreeViewPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "Calender":
                        foreach ($this->CalenderPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "ProgressBar":
                        foreach ($this->ProgressBarPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "Slider":
                        foreach ($this->SliderPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "DatePickerTextArea":
                        foreach ($this->DatePrickerPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "Panel":
                        foreach ($this->PanelPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "BarGraph":
                        foreach ($this->BarGraphPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "PieChart":
                        foreach ($this->PieChartPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "LineGraph":
                        foreach ($this->LineGraphPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "Gauge":
                        foreach ($this->GaugeChartPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "RadarGraph":
                        foreach ($this->RadarGraphPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "LineAreaGraph":
                        foreach ($this->LineAreaGraphPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "CandlesticksGraph":
                        foreach ($this->CandlesticksGraphPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "DoughnutChart":
                        foreach ($this->DoughnutChartPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "BarsMixedWithLabeledLineGraph":
                        foreach ($this->BarsMixedWithLabeledLineGraphPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "StackedBarGraph":
                        foreach ($this->StackedBarGraphPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "Tab":
                        foreach ($this->TabPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "ImageMap":
                        foreach ($this->ImageMapPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "SubMenu":
                        foreach ($this->SubMenuBarPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "MenuBar":
                        foreach ($this->MenuBarPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "TextBox":
                        foreach ($this->TextBoxPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                }
            }
        }
        return null;
    }

    public function GetHighestDepth($canvasid)
    {
        $highestDepth = 0;
        foreach ($this->Windows as $w)
        {
            if ($w->CanvasID == $canvasid && intval($w->Depth) > $highestDepth)
            {
                $highestDepth = intval($w->Depth);
            }
        }
        return $highestDepth;
    }

    public function GetHighestAndCurrentWindowCount($canvasid)
    {
        $highestCurrentWindowCount = 0;
        foreach ($this->Windows as $w)
        {
            if ($w->CanvasID == $canvasid && $highestCurrentWindowCount < intval($w->WindowCount))
            {
                $highestCurrentWindowCount = intval($w->WindowCount);
            }
        }
        return $highestCurrentWindowCount;
    }
}


?>