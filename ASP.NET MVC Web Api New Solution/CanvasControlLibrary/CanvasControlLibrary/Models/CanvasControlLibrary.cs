using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CanvasControlLibrary.Models
{
    public class CanvasControlLibrary
    {
        public List<CCLWindow> Windows { get; set; }
        public List<CCLLabelProps> LabelPropsArray { get; set; }
        public List<CCLButtonProps> ButtonPropsArray { get; set; }
        public List<CCLScrollBarProps> ScrollBarPropsArray { get; set; }
        public List<CCLGridProps> GridPropsArray { get; set; }
        public List<CCLComboBoxProps> ComboBoxPropsArray { get; set; }
        public List<CCLCheckBoxProps> CheckBoxPropsArray { get; set; }
        public List<CCLRadioButtonGroupProps> RadioButtonGroupPropsArray { get; set; }
        public List<CCLImageProps> ImagePropsArray { get; set; }
        public List<CCLTreeViewProps> TreeViewPropsArray { get; set; }
        public List<CCLCalenderProps> CalenderPropsArray { get; set; }
        public List<CCLProgressBarProps> ProgressBarPropsArray { get; set; }
        public List<CCLSliderProps> SliderPropsArray { get; set; }
        public List<CCLDatePickerProps> DatePickerPropsArray { get; set; }
        public List<CCLPanelProps> PanelPropsArray { get; set; }
        public List<CCLBarGraphProps> BarGraphPropsArray { get; set; }
        public List<CCLPieChartProps> PieChartPropsArray { get; set; }
        public List<CCLLineGraphProps> LineGraphPropsArray { get; set; }
        public List<CCLGaugeChartProps> GaugeChartPropsArray { get; set; }
        public List<CCLRadarGraphProps> RadarGraphPropsArray { get; set; }
        public List<CCLLineAreaGraphProps> LineAreaGraphPropsArray { get; set; }
        public List<CCLCandlesticksGraphProps> CandlesticksGraphPropsArray { get; set; }
        public List<CCLDoughnutChartProps> DoughnutChartPropsArray { get; set; }
        public List<CCLBarsMixedWithLabeledLineGraphProps> BarsMixedWithLabeledLineGraphPropsArray { get; set; }
        public List<CCLStackedBarGraphProps> StackedBarGraphPropsArray { get; set; }
        public List<CCLTabProps> TabPropsArray { get; set; }
        public List<CCLImageMapProps> ImageMapPropsArray { get; set; }
        public List<CCLMenuBarProps> MenuBarPropsArray { get; set; }
        public List<CCLSubMenuBarProps> SubMenuBarPropsArray { get; set; }
        public List<CCLTextBoxProps> TextBoxPropsArray { get; set; }
        public List<CCLImageFaderProps> ImageFaderPropsArray { get; set; }
        public List<CCLImageSliderProps> ImageSliderPropsArray { get; set; }
        public List<CCLMultiLineLabelProps> MultiLineLabelPropsArray { get; set; }
        public List<CCLWordProcessorProps> WordProcessorPropsArray { get; set; }
        public List<CCLVirtualKeyboardProps> VirtualKeyboardPropsArray { get; set; }
        public List<CCLSplitterProps> SplitterPropsArray { get; set; }
        public List<CCLBoundaryFillableMapProps> BoundaryFillableMapProps { get; set; }
        public List<CCLSimpleXMLViewerProps> SimpleXMLViewerProps { get; set; }
        public List<CCLVotingProps> VotingProps { get; set; }

        public string FunctionName { get; set; }
        public List<Object> Params { get; set; }
        public List<Object> ReturnParams { get; set; }

        public CanvasControlLibrary()
        {
            Windows = new List<CCLWindow>();
            LabelPropsArray = new List<CCLLabelProps>();
            ButtonPropsArray = new List<CCLButtonProps>();
            ScrollBarPropsArray = new List<CCLScrollBarProps>();
            GridPropsArray = new List<CCLGridProps>();
            ComboBoxPropsArray = new List<CCLComboBoxProps>();
            CheckBoxPropsArray = new List<CCLCheckBoxProps>();
            RadioButtonGroupPropsArray = new List<CCLRadioButtonGroupProps>();
            ImagePropsArray = new List<CCLImageProps>();
            TreeViewPropsArray = new List<CCLTreeViewProps>();
            CalenderPropsArray = new List<CCLCalenderProps>();
            ProgressBarPropsArray = new List<CCLProgressBarProps>();
            SliderPropsArray = new List<CCLSliderProps>();
            DatePickerPropsArray = new List<CCLDatePickerProps>();
            PanelPropsArray = new List<CCLPanelProps>();
            BarGraphPropsArray = new List<CCLBarGraphProps>();
            PieChartPropsArray = new List<CCLPieChartProps>();
            LineGraphPropsArray = new List<CCLLineGraphProps>();
            GaugeChartPropsArray = new List<CCLGaugeChartProps>();
            RadarGraphPropsArray = new List<CCLRadarGraphProps>();
            LineAreaGraphPropsArray = new List<CCLLineAreaGraphProps>();
            CandlesticksGraphPropsArray = new List<CCLCandlesticksGraphProps>();
            DoughnutChartPropsArray = new List<CCLDoughnutChartProps>();
            BarsMixedWithLabeledLineGraphPropsArray = new List<CCLBarsMixedWithLabeledLineGraphProps>();
            StackedBarGraphPropsArray = new List<CCLStackedBarGraphProps>();
            TabPropsArray = new List<CCLTabProps>();
            ImageMapPropsArray = new List<CCLImageMapProps>();
            MenuBarPropsArray = new List<CCLMenuBarProps>();
            SubMenuBarPropsArray = new List<CCLSubMenuBarProps>();
            TextBoxPropsArray = new List<CCLTextBoxProps>();
            ImageFaderPropsArray = new List<CCLImageFaderProps>();
            ImageSliderPropsArray = new List<CCLImageSliderProps>();
            MultiLineLabelPropsArray = new List<CCLMultiLineLabelProps>();
            WordProcessorPropsArray = new List<CCLWordProcessorProps>();
            VirtualKeyboardPropsArray = new List<CCLVirtualKeyboardProps>();
            SplitterPropsArray = new List<CCLSplitterProps>();
            BoundaryFillableMapProps = new List<CCLBoundaryFillableMapProps>();
            SimpleXMLViewerProps = new List<CCLSimpleXMLViewerProps>();
            VotingProps = new List<CCLVotingProps>();
        }
    }
}