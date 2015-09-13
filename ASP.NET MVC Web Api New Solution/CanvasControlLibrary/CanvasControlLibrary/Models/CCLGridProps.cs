using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace CanvasControlLibrary.Models
{
    public class CCLGridProps
    {
        public class Sorting
        {
            public int Column { get; set; }
            public string DataType { get; set; }
            public string SortOrder { get; set; }
        }

        public class Filter
        {
            public int ColumnIndex { get; set; }
            public string TypeOfFilter { get; set; }
        }

        public class SortClickExtent
        {
            public int ColumnIndex { get; set; }
            public int X { get; set; }
            public int Y { get; set; }
            public int Width { get; set; }
            public int Height { get; set; }
        }

        public string CanvasID { get; set; }
        public int WindowID { get; set; }
        public int X { get; set; }
        public int Y { get; set; }
        public int Width { get; set; }
        public string Height { get; set; }
        public List<List<string>> RowData { get; set; }
        public List<List<string>> HeaderData { get; set; }
        public string RowDataTextColor { get; set; }
        public string RowDataTextFontString { get; set; }
        public string HeaderDataTextColor { get; set; }
        public int HeaderDataTextHeight { get; set; }
        public string HeaderDataTextFontString { get; set; }
        public int DataRowHeight { get; set; }
        public List<int> ColumnWidthArray { get; set; }
        public int HeaderRowHeight { get; set; }
        public int HasBorder { get; set; }
        public string BorderColor { get; set; }
        public int BorderLineWidth { get; set; }
        public int VScrollBarWindowId { get; set; }
        public int HScrollBarWindowId { get; set; }
        public string HeaderBackgroundStartColor { get; set; }
        public string HeaderBackgroundEndColor { get; set; }
        public string AltRowBgColorStart1 { get; set; }
        public string AltRowBgColorEnd1 { get; set; }
        public string AltRowBgColorStart2 { get; set; }
        public string AltRowBgColorEnd2 { get; set; }
        public int HasSelectedRow { get; set; }
        public string SelectedRowBgColor { get; set; }
        public int HasSelectedCell { get; set; }
        public string SelectedCellBgColor { get; set; }
        public int SelectedRow { get; set; }
        public int SelectedCell { get; set; }
        public int HasSorting { get; set; }
        public List<Sorting> SortableColumnsArray { get; set; }
        public int HasSortImages { get; set; }
        public List<string> SortImageURLsArray { get; set; }
        public int SortImageShowIndex { get; set; }
        public List<List<string>> SortedData { get; set; }
        public int HasFilters { get; set; }
        public List<Filter> FilterColumnsArray { get; set; }
        public int HasFilterImageIcon { get; set; }
        public string FilterImageIconURL { get; set; }
        public List<List<string>> FilteredData { get; set; }
        public List<SortClickExtent> SortClickExtents { get; set; }
        public int HasUIDs { get; set; }
        public List<string> OrigUIDs { get; set; }
        public List<string> SortedUIDs { get; set; }
        public object Tag { get; set; }
        public int TabStopIndex { get; set; }

        public CCLGridProps()
        {
            RowData = new List<List<string>>();
            HeaderData = new List<List<string>>();
            ColumnWidthArray = new List<int>();
            SortableColumnsArray = new List<Sorting>();
            SortImageURLsArray = new List<string>();
            SortedData = new List<List<string>>();
            FilterColumnsArray = new List<Filter>();
            FilteredData = new List<List<string>>();
            SortClickExtents = new List<SortClickExtent>();
            OrigUIDs = new List<string>();
            SortedUIDs = new List<string>();
        }
    }
}