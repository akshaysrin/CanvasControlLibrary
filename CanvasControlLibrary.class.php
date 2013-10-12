<?php

class KeyValuePair{
    public $Key;
    public $Value;

    public function __construct($key, $value)
    {
        $this->Key = $key;
        $this->Value = $value;
    }
}

class LightWeightDictionary
{
    public $KeyValuePairs;

    public function Add($key, $value)
    {
        $kvp = new KeyValuePair($key, $value);
        array_push($KeyValuePairs, $kvp);
    }

    public function GetValue($key)
    {
        foreach ($this->KeyValuePairs as $kvp)
        {
            if ($kvp->Key == $key)
            {
                return $kvp->Value;
            }
        }
        return null;
    }

    public function SetValue($key, $value)
    {
        foreach ($this->KeyValuePairs as $kvp)
        {
            if ($kvp->Key == $key)
            {
                $kvp->Value = $value;
            }
        }
    }

    public function GetAllKeys()
    {
        $keys = array();
        foreach ($this->KeyValuePairs as $kvp)
        {
            array_push($keys, $kvp->Key);
        }
        return $keys;
    }

    public function __construct()
    {
        $this->KeyValuePairs = array();
    }
}

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
    public $TabStopIndex;
    public $MultiWindowControlsMainWindowId;

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
    public $TabStopIndex;
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
    public $Theme;
    public $HasGloss;
    public $TabStopIndex;
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
    public $OwnedByWindowID;
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
    public $HasSelectedRow;
    public $SelectedRowBgColor;
    public $HasSelectedCell;
    public $SelectedCellBgColor;
    public $SelectedRow;
    public $SelectedCell;
    public $HasSorting;
    public $SortableColumnsArray;
    public $HasSortImages;
    public $SortImageURLsArray;
    public $SortImageShowIndex;
    public $SortedData;
    public $CustomSortFunction;
    public $HasFilters;
    public $FilterColumnsArray;
    public $HasFilterImageIcon;
    public $FilterImageIconURL;
    public $FilteredData;
    public $SortClickExtents;
    public $HasUIDs;
    public $OrigUIDs; 
    public $SortedUIDs;
    public $TabStopIndex;

    public function __construct()
    {
        $this->RowData = array();
        $this->HeaderData = array();
        $this->ColumnWidthArray = array();
        $this->SortableColumnsArray = array();
        $this->SortImageURLsArray = array();
        $this->SortedData = array();
        $this->FilterColumnsArray = array();
        $this->FilteredData = array();
        $this->SortClickExtents = array();
        $this->OrigUIDs = array();
        $this->SortedUIDs = array();
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
    public $TabStopIndex;

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
    public $TabStopIndex;
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
    public $TabStopIndex;

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
    public $Tile;
    public $TabStopIndex;
}

class CCLTreeViewProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $VScrollBarWindowID;
    public $HScrollBarWindowID;
    public $TextColor;
    public $TextFontString;
    public $TextHeight;
    public $ClickNodeFunction;
    public $Tag;
    public $HasIcons;
    public $IconWidth;
    public $IconHeight;
    public $TabStopIndex;
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
    public $TabStopIndex;

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
    public $TabStopIndex;
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
    public $TabStopIndex;
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
    public $TabStopIndex;
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
    public $TabStopIndex;
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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $TabStopIndex;

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
    public $CaretTime;
    public $TabStopIndex;

    public function __construct()
    {
        $this->ListPossibles = array();
    }
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
    public $TabStopIndex;

    public function __construct()
    {
        $this->ImageURLs = array();
    }
}

class CCLImageSliderProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $ImageURLs;
    public $Direction;
    public $StepIncrement;
    public $ClickFunction;
    public $HoldForTicks;
    public $CurrentImageIndex;
    public $Slide;
    public $HoldCountDown;
    public $TabStopIndex;

    public function __construct()
    {
        $this->ImageURLs = array();
    }
}

class CCLMultiLineLabelProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $HasMarkup;
    public $Text;
    public $TextColor;
    public $TextHeight;
    public $TextFontString;
    public $LineSpacingInPixels;
    public $LineBreakIndexes;
    public $MarkupTextExtents;
    public $MarkupText;
    public $TabStopIndex;

    public function __construct()
    {
        $this->LineBreakIndexes = array();
        $this->MarkupTextExtents = array();
    }
}

class CCLWordProcessorProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $HasMarkup;
    public $Text;
    public $TextColor;
    public $TextHeight;
    public $TextFontString;
    public $LineSpacingInPixels;
    public $WordSensitive;
    public $WaterMarkText;
    public $WaterMarkTextColor;
    public $WaterMarkTextHeight;
    public $WaterMarkTextFontString;
    public $MaxChars;
    public $HasShadow;
    public $ShadowColor;
    public $ShadowOffsetX;
    public $ShadowOffsetY;
    public $HasRoundedEdges;
    public $EdgeRadius;
    public $HasBgGradient;
    public $BgGradientStartColor;
    public $BgGradientEndColor;
    public $HasBgImage;
    public $BgImageUrl;
    public $Margin;
    public $HasBorder;
    public $BorderColor;
    public $BorderLineWidth;
    public $UserInputText;
    public $VScrollBarWindowID;
    public $CaretPosIndex;
    public $ShowCaret;
    public $CaretColor;
    public $LineBreakIndexes;
    public $SelectedTextStartIndex;
    public $SelectedTextEndIndex;
    public $MouseDown;
    public $WasSelecting;
    public $AllowedCharsRegEx;
    public $CaretTime;

    public function __construct()
    {
        $this->LineBreakIndexes = array();
    }
}

class CCLVirtualKeyboardProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $Keys;
    public $KeyPressFunction;
    public $GapBetweenButtons;
    public $GapBetweenRows;
    public $CurrentKeyboardIndex;
    public $KeyExtents;
    public $TextHeight;
    public $TextFontString;
    public $CustomKeys;
    public $CustomDrawLetterFunction;
    public $HasGloss;
    public $ShiftKeyPressed;
    public $TabStopIndex;

    public function __construct()
    {
        $this->Keys = array();
        $this->KeyExtents = array();
    }
}

class CCLSplitterProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $LineColor;
    public $MouseDown;
    public $TabStopIndex;
}

class CCLBoundaryFillableMapProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $FillPoints;
    public $ImgURL;
    public $ImageWidth;
    public $ImageHeight;
    public $TabStopIndex;

    public function __construct()
    {
        $this->FillPoints = array();
    }
}

class CCLSimpleXMLViewerProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $XML;
    public $TextColor;
    public $TextFontString;
    public $TextHeight;
    public $Tag;
    public $HasIcons;
    public $IconWidth;
    public $IconHeight;
    public $ImgURLNode;
    public $ImgURLValue;
    public $ImgURLAttribute;
    public $TabStopIndex;
}

class CCLVotingProps
{
    public $CanvasID;
    public $WindowID;
    public $X;
    public $Y;
    public $Width;
    public $Height;
    public $NumStars;
    public $MaxValueOfAllStars;
    public $StarColorRed;
    public $StarColorGreen;
    public $StarColorBlue;
    public $StarColorAlpha;
    public $SpacingInPixelsBetweenStars;
    public $HasPartialStars;
    public $Editable;
    public $HasValueLabel;
    public $LabelXPos;
    public $LabelYPos;
    public $StarsStartingPosOffsetWhenLabel;
    public $StarsYPosWhenLabel;
    public $InitialValue;
    public $OutlineThicknessOfEmptyStar;
    public $StarsOrientation;
    public $FillOrientation;
    public $IsCustomPattern;
    public $OutLineImgURL;
    public $CustomFillPoint;
    public $ImgWidth;
    public $ImgHeight;
    public $StarSizeInPixels;
    public $HasMouseOverLabel;
    public $StarOutlineBgColorRed;
    public $StarOutlineBgColorGreen;
    public $StarOutlineBgColorBlue;
    public $StarOutlineBgColorAlpha;
    public $LabelTextColor;
    public $LabelTextFontString;
    public $LabelTextHeight;
    public $RoundDisplayedValueToNumOfDecimals;
    public $TabStopIndex;

    public function __construct()
    {
        $this->CustomFillPoint = array();
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
    public $CurrentSessionObj;
    public $InputParams;

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
    public $ImageSliderPropsArray;
    public $MultiLineLabelPropsArray;
    public $WordProcessorPropsArray;
    public $VirtualKeyboardPropsArray;
    public $SplitterPropsArray;
    public $BoundaryFillableMapProps;
    public $SimpleXMLViewerProps;
    public $VotingProps;

    public $JavaScriptCodeToSendInThisCall;

    public $FunctionName;
    public $CanvasID;
    public $WindowID;

    public $recursiveExceptionForTreeViews;

    public function __construct()
    {
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
        $this->ImageSliderPropsArray = array();
        $this->MultiLineLabelPropsArray = array();
        $this->WordProcessorPropsArray = array();
        $this->VirtualKeyboardPropsArray = array();
        $this->SplitterPropsArray = array();
        $this->BoundaryFillableMapProps = array();
        $this->SimpleXMLViewerProps = array();
        $this->VotingProps = array();
        $this->JavaScriptCodeToSendInThisCall = array();
        $this->InputParams = array();
        $rdata = file_get_contents("php://input");
        $strData = str_replace("&rb;", "]", str_replace("&lb;", "[", str_replace("]", ">", str_replace("[", "<", $rdata))));
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
                case "Params":
                    $this->UnwrapParams($child);
                    break;
            }
        }
    }

    public function UnwrapParams($node)
    {
        foreach ($node->children() as $child)
        {
            if ($child->getName() == "Array")
            {
                $this->AddArrayData($child, $this->InputParams);
            }
            else if (count($child->children()) == 1)
            {
                array_push($this->InputParams, $child->__toString());
            }
        }
    }

    public function InvokeServerSideFunction()
    {
    	$tmp = $this->FunctionName;
    	$tmp($this, $this->CanvasID, intval($this->WindowID));
    }

    public function DecodeXML($str)
    {
        return str_replace("&amp;", "&", str_replace("&rb;", "]", str_replace("&lb;", "[", $str)));
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
                case "imageFaderPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $tb = new CCLImageFaderProps();
                        array_push($this->ImageFaderPropsArray, $tb);
                        $this->FillClassObject($child2, $tb);
                    }
                    break;
                case "imageSliderPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $tb = new CCLImageSliderProps();
                        array_push($this->ImageSliderPropsArray, $tb);
                        $this->FillClassObject($child2, $tb);
                    }
                    break;
                case "multiLineLabelPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $tb = new CCLMultiLineLabelProps();
                        array_push($this->MultiLineLabelPropsArray, $tb);
                        $this->FillClassObject($child2, $tb);
                    }
                    break;
                case "wordProcessorPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $tb = new CCLWordProcessorProps();
                        array_push($this->WordProcessorPropsArray, $tb);
                        $this->FillClassObject($child2, $tb);
                    }
                    break;
                case "virtualKeyboardPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $sm = new CCLVirtualKeyboardProps();
                        array_push($this->VirtualKeyboardPropsArray, $sm);
                        $this->FillClassObject($child2, $sm);
                    }
                    break;
                case "splitterPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $sm = new CCLSplitterProps();
                        array_push($this->SplitterPropsArray, $sm);
                        $this->FillClassObject($child2, $sm);
                    }
                    break;
                case "boundaryFillableMapPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $sm = new CCLBoundaryFillableMapProps();
                        array_push($this->BoundaryFillableMapProps, $sm);
                        $this->FillClassObject($child2, $sm);
                    }
                    break;
                case "simpleXMLViewerPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $sm = new CCLSimpleXMLViewerProps();
                        array_push($this->SimpleXMLViewerProps, $sm);
                        $this->FillClassObject($child2, $sm);
                    }
                    break;
                case "votingPropsArray":
                    foreach ($child1->children() as $child2)
                    {
                        $sm = new CCLVotingProps();
                        array_push($this->VotingProps, $sm);
                        $this->FillClassObject($child2, $sm);
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
            $tmpidx += 1;
        }
    }

    public function FillObjectArray($child)
    {
        $dict = new LightWeightDictionary();
        foreach ($child->children() as $childofOA)
        {
            if (count($childofOA->children()) > 0 && $this->getChildByIndex($childofOA, 0)->getName() == "Array")
            {
                $al = array();
                foreach ($this->getChildByIndex($childofOA, 0)->children() as $childofOA2)
                {
                    if ($childofOA2->getName() == "Array")
                    {
                        $this->AddArrayData($childofOA2, $al);
                    }
                    else if (count($childofOA2->children()) == 1)
                    {
                        if ($this->getChildByIndex($childofOA2, 0)->getName() == "ObjectArray")
                        {
                            array_push($al, $this->FillObjectArray($this->getChildByIndex($childofOA2, 0)));
                        }
                        else
                        {
                            array_push($al, $childofOA2->__toString());
                        }
                    }
                }
                $dict->Add($childofOA->getName(), $al);
            }
            else
            {
                $dict->Add($childofOA->getName(), $childofOA->__toString());
            }
        }
        return $dict;
    }

    public function FillClassObject($child2, $g)
    {
        foreach ($child2->children() as $child3)
        {
            $strName = $child3->getName();
            if (count($child3->children()) > 0 && $this->getChildByIndex($child3, 0)->getName() == "ObjectArray")
            {
                $g->$strName = $this->FillObjectArray($this->getChildByIndex($child3, 0));
            }
            else if (count($child3->children()) == 1 && $this->getChildByIndex($child3, 0)->getName() == "Array")
            {
                $al = array();
                $this->AddArrayData($this->getChildByIndex($child3, 0), $al);
                $g->$strName = $al;
            }
            else if (count($child3->children()) > 1 || (count($child3->children()) != 0 && $this->getChildByIndex($child3, 0)->getName() == "i"))
            {
                $al = array();
                foreach ($child3->children() as $child4)
                {
                    if ($child4->getName() == "Array")
                    {
                        $this->AddArrayData($child4, $al);
                    }
                    else if (count($child4->children()) == 1)
                    {
                        if ($this->getChildByIndex($child4, 0)->getName() == "ObjectArray")
                        {
                            array_push($al, $this->FillObjectArray($this->getChildByIndex($child4, 0)));
                        }
                        else
                        {
                            array_push($al, $child4->__toString());
                        }
                    }
                }
                $g->$strName = $al;
            }
            else if (count($child3->children()) == 1 && $this->getChildByIndex ($child3, 0)->getName() != "i")
            {
                $g->$strName = $this->DecodeXML($child3->__toString());
            }
        }
    }

    public function AddArrayData($node, $pal)
    {
        foreach ($node->children() as $child)
        {
            if (count($child->children()) > 0 && $this->getChildByIndex($child, 0)->getName() == "ObjectArray")
            {
                array_push($pal, $this->FillObjectArray($this->getChildByIndex($child, 0)));
            }
            else if (count($child->children()) > 0 && $this->getChildByIndex ($child, 0)->getName() == "Array")
            {
                $al = array();
                $this->AddArrayData($this->getChildByIndex ($child, 0), $al);
                array_push($pal, $al);
            }
            else if (count($child->children()) == 1)
            {
                array_push($pal, $child->__toString());
            }
            else if (count($child->children()) > 1)
            {
                $al = array();
                $this->AddArrayData($child, $al);
                array_push($pal, $al);
            }
            else
            {
                array_push($pal, "");
            }
        }
    }

    public function recurseArrayList($al)
    {
        $str = "";
        foreach ($al as $obj)
        {
            if (is_a($obj, "LightWeightDictionary"))
            {
                $str = "[i]" . $this->recurseDictionary($obj) . "[/i]";
            }
            else if (is_array($obj))
            {
                $str = "[i][Array]" . $this->recurseArrayList($obj) . "[/Array][/i]";
            }
            else
            {
                $str = "[i]" . $this->encodeString($obj->__toString()) . "[/i]";
            }
        }
        return $str;
    }

    public function encodeString($str)
    {
        return str_replace(">", "&gt;", str_replace("<", "&lt;", str_replace("]", "&rb;", str_replace("[", "&lb;", str_replace("'", "&apos;", str_replace("\"", "&quot;", str_replace("&", "&amp;", $str)))))));
    }

    public function encodeObject($o)
    {
        $str = "";
        foreach($o as $key => $value) {
            if (is_array($value))
            {
                $str .= "[" . $key . "][Array]";
                foreach ($value as $obj)
                {
                    if (is_array($obj))
                    {
                        $str .= "[i][Array]" . $this->recurseArrayList($obj) . "[/Array][/i]";
                    }
                    else if (is_a($obj, "LightWeightDictionary"))
                    {
                        $str .= "[i]" . $this->recurseDictionary($obj) . "[/i]";
                    }
                    else
                    {
                        $str .= "[i]" . $this->encodeString($obj->__toString()) . "[/i]";
                    }
                }
                $str .= "[/Array][/" . $key . "]";
            }
            else if (is_a($value, "LightWeightDictionary"))
            {
                $str .= $this->recurseDictionary($value);
            }
            else
            {
                $str .= "[" . $key . "]" . (($value != null && strlen($value->__toString()) > 0 ? $this->encodeString($value->__toString()) : "")) .
                    "[/" . $key . "]";
            }
        }
        return $str;
    }

    public function recurseDictionary($dict)
    {
        $str = "[ObjectArray]";
        foreach ($dict->GetAllKeys() as $key)
        {
            $str .= "[" . $key . "]";
            $dictvalue = $dict->GetValue($key);
            if (is_array($dictvalue))
            {
                $str .= $this->recurseArrayList($dictvalue);
            }
            else if (is_a($dictvalue, "LightWeightDictionary"))
            {
                $str .= $this->recurseDictionary($dictvalue);
            }
            else
            {
                $str .= $dictvalue->__toString();
            }
            $str .= "[/" . $key . "]";
        }
        $str .= "[/ObjectArray]";
        return $str;
    }

    public function SendVars($parameters)
    {
        $strVars = "[root][Vars][windows]";
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
        $strVars .= "[/textBoxPropsArray][imageFaderPropsArray]";
        foreach ($this->ImageFaderPropsArray as $tbx)
        {
            $strVars .= "[i]" . $this->encodeObject($tbx) . "[/i]";
        }
        $strVars .= "[/imageFaderPropsArray][imageSliderPropsArray]";
        foreach ($this->ImageSliderPropsArray as $tbx)
        {
            $strVars .= "[i]" . $this->encodeObject($tbx) . "[/i]";
        }
        $strVars .= "[/imageSliderPropsArray][multiLineLabelPropsArray]";
        foreach ($this->MultiLineLabelPropsArray as $tbx)
        {
            $strVars .= "[i]" . $this->encodeObject($tbx) . "[/i]";
        }
        $strVars .= "[/multiLineLabelPropsArray][wordProcessorPropsArray]";
        foreach ($this->WordProcessorPropsArray as $tbx)
        {
            $strVars .= "[i]" . $this->encodeObject($tbx) . "[/i]";
        }
        $strVars .= "[/wordProcessorPropsArray][virtualKeyboardPropsArray]";
        foreach ($this->VirtualKeyboardPropsArray as $smb)
        {
            $strVars .= "[i]" . $this->encodeObject($smb) . "[/i]";
        }
        $strVars .= "[/virtualKeyboardPropsArray][splitterPropsArray]";
        foreach ($this->SplitterPropsArray as $smb)
        {
            $strVars .= "[i]" . $this->encodeObject($smb) . "[/i]";
        }
        $strVars .= "[/splitterPropsArray][boundaryFillableMapPropsArray]";
        foreach ($this->BoundaryFillableMapProps as $smb)
        {
            $strVars .= "[i]" . $this->encodeObject($smb) . "[/i]";
        }
        $strVars .= "[/boundaryFillableMapPropsArray][simpleXMLViewerPropsArray]";
        foreach ($this->SimpleXMLViewerProps as $smb)
        {
            $strVars .= "[i]" . $this->encodeObject($smb) . "[/i]";
        }
        $strVars .= "[/simpleXMLViewerPropsArray][votingPropsArray]";
        foreach ($this->VotingProps as $smb)
        {
            $strVars .= "[i]" . $this->encodeObject($smb) . "[/i]";
        }
        $strVars .= "[/votingPropsArray]";
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
                $strParameters .= "[i]" . ($obj == null ? "" : $this->encodeString($obj->__toString())) . "[/i]";
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
                    case "ImageFader":
                        foreach ($this->ImageFaderPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "ImageSlider":
                        foreach ($this->ImageSliderPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "MultiLineLabel":
                        foreach ($this->MultiLineLabelPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "WordProcessor":
                        foreach ($this->WordProcessorPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "VirtualKeyboard":
                        foreach ($this->VirtualKeyboardPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "Splitter":
                        foreach ($this->SplitterPropsArray as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "BoundaryFillableMap":
                        foreach ($this->BoundaryFillableMapProps as $o)
                        {
                            if ($o->CanvasID == $w->CanvasID && $o->WindowID == $w->WindowCount)
                            {
                                return $o;
                            }
                        }
                        break;
                    case "VotingControl":
                        foreach ($this->VotingProps as $o)
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
