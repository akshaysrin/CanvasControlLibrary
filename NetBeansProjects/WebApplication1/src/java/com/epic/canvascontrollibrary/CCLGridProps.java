/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.epic.canvascontrollibrary;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Gilgamesh
 */
    public class CCLGridProps
    {
        public String CanvasID;
        public String WindowID;
        public String X;
        public String Y;
        public String Width;
        public String Height;
        public List<Object> RowData;
        public List<Object> HeaderData;
        public String RowDataTextColor;
        public String RowDataTextFontString;
        public String HeaderDataTextColor;
        public String HeaderDataTextHeight;
        public String HeaderDataTextFontString;
        public String CellClickFunction;
        public String DataRowHeight;
        public List<Object> ColumnWidthArray;
        public String HeaderRowHeight;
        public String HasBorder;
        public String BorderColor;
        public String BorderLineWidth;
        public String VScrollBarWindowId;
        public String HScrollBarWindowId;
        public String HeaderBackgroundStartColor;
        public String HeaderBackgroundEndColor;
        public String AltRowBgColorStart1;
        public String AltRowBgColorEnd1;
        public String AltRowBgColorStart2;
        public String AltRowBgColorEnd2;
        public Object Tag;
        public String HasSelectedRow;
        public String SelectedRowBgColor;
        public String HasSelectedCell;
        public String SelectedCellBgColor;
        public String SelectedRow;
        public String SelectedCell;
        public String HasSorting;
        public List<Object> SortableColumnsArray;
        public String HasSortImages;
        public List<Object> SortImageURLsArray;
        public String SortImageShowIndex;
        public List<Object> SortedData;
        public String CustomSortFunction;
        public String HasFilters;
        public List<Object> FilterColumnsArray;
        public String HasFilterImageIcon;
        public String FilterImageIconURL;
        public List<Object> FilteredData;
        public List<Object> SortClickExtents;
        public String HasUIDs;
        public List<Object> OrigUIDs; 
        public List<Object> SortedUIDs;
        public String TabStopIndex;

        CCLGridProps()
        {
            RowData = new ArrayList<Object>();
            HeaderData = new ArrayList<Object>();
            ColumnWidthArray = new ArrayList<Object>();
            SortableColumnsArray = new ArrayList<Object>();
            SortImageURLsArray = new ArrayList<Object>();
            SortedData = new ArrayList<Object>();
            FilterColumnsArray = new ArrayList<Object>();
            FilteredData = new ArrayList<Object>();
            SortClickExtents = new ArrayList<Object>();
            OrigUIDs = new ArrayList<Object>();
            SortedUIDs = new ArrayList<Object>();
        }
    }
