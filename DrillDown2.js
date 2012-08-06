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



var tblcurrColTypes = new Array();
var tblnumfixedcols = new Array();
var expandedimg;
var collapsedimg;
function drawdrilldowntable2(tblid) {
    var tblrspancols = new Array();
    expandedimg = document.createElement('span');
    expandedimg.style.paddingRight = '5px';
    expandedimg.innerHTML = '&nbsp;+&nbsp;';
    collapsedimg = document.createElement('span');
    collapsedimg.style.paddingRight = '5px';
    collapsedimg.innerHTML = '&nbsp;-&nbsp;';
    var tbl = document.getElementById(tblid);
    var found = 0;
    var datarows = new Array();
    var numfixedcols;
    for (var i = 0; i < tblcurrColTypes.length; i++) {
        if (tblcurrColTypes[i][1] == tblid) {
            datarows = tblcurrColTypes[i][0];
            found = 1;
            break;
        }
    }
    for (var i = 0; i < tblnumfixedcols.length; i++) {
        if (tblnumfixedcols[i][1] == tblid) {
            numfixedcols = tblnumfixedcols[i][0];
            break;
        }
    }
    if (found == 1) {
        var currCols = new Array();
        for (var r = 0; r < datarows.length; r++) {
            if (currCols.length == 0) {
                var row = tbl.insertRow(tbl.rows.length);
                for (var k = 0; k < datarows[r].length - numfixedcols; k++) {
                    currCols.push(datarows[r][k][0]);
                    var done = 0;
                    if (checkifallbeforeisone(datarows, r, k)) {
                        var cell = row.insertCell(k);
                        tblrspancols.push([cell, tbl.rows.length]);
                        done = 1;
                        cell.setAttribute("class", "customTransparentPanel sublisttext");
                        var expcollapse = (datarows[r][k][1] == 0 ? expandedimg.cloneNode(true) : collapsedimg.cloneNode(true));
                        expcollapse.setAttribute('class', 'customGreenPanel sublisttext');
                        expcollapse.setAttribute('id', r.toString() + ',' + k.toString() + ',' + tbl.id);
                        expcollapse.onclick = thisclick;
                        cell.appendChild(expcollapse);
                        var text = document.createElement('span');
                        text.innerHTML = datarows[r][k][0];
                        cell.appendChild(text);
                    }
                    if (done == 0) {
                        tblrspancols.push([document.createElement('td'), tbl.rows.length]);
                    }
                }
                var g = 1;
                for (var d = 0; d < currCols.length; d++) {
                    if (datarows[r][d][1] == 0) {
                        g = 0;
                        break;
                    }
                }
                if (g == 1) {
                    for (var k = datarows[r].length - numfixedcols; k < datarows[r].length; k++) {
                        var cell = row.insertCell(k);
                        cell.setAttribute("class", "customTransparentPanel sublisttext");
                        var text = document.createElement('span');
                        text.innerHTML = datarows[r][k];
                        cell.appendChild(text);
                    }
                }
            } else if (currCols.length > 0) {
                var found = 1;
                for (var c = 0; c < currCols.length; c++) {
                    if (currCols[c] != datarows[r][c][0]) {
                        found = 0;
                        break;
                    }
                }
                if (found == 1) {
                    var g = 1;
                    for (var d = 0; d < currCols.length; d++) {
                        if (datarows[r][d][1] == 0) {
                            g = 0;
                            break;
                        }
                    }
                    if (g == 1) {
                        var row = tbl.insertRow(tbl.rows.length);
                        for (var k = currCols.length; k < datarows[r].length; k++) {
                            var cell = row.insertCell(k - currCols.length);
                            cell.setAttribute("class", "customTransparentPanel sublisttext");
                            var text = document.createElement('span');
                            text.innerHTML = datarows[r][k];
                            cell.appendChild(text);
                        }
                    }
                } else if (found == 0) {
                    var mc = -1;
                    for (var x = 0; x < currCols.length; x++) {
                        if (datarows[r][x][0] == currCols[x]) {
                            mc = x;
                        } else {
                            break;
                        }
                    }
                    if (mc == -1) {
                        var row = tbl.insertRow(tbl.rows.length);
                        currCols = new Array();
                        for (var k = 0; k < datarows[r].length - numfixedcols; k++) {
                            currCols.push(datarows[r][k][0]);
                            if (checkifallbeforeisone(datarows, r, k)) {
                                tblrspancols[k][0].rowSpan = tbl.rows.length - tblrspancols[k][1];
                                var cell = row.insertCell(k);
                                tblrspancols[k][0] = cell;
                                tblrspancols[k][1] = tbl.rows.length;
                                cell.setAttribute("class", "customTransparentPanel sublisttext");
                                var expcollapse = (datarows[r][k][1] == 0 ? expandedimg.cloneNode(true) : collapsedimg.cloneNode(true));
                                expcollapse.setAttribute('class', 'customGreenPanel sublisttext');
                                expcollapse.setAttribute('id', r.toString() + ',' + k.toString() + ',' + tbl.id);
                                expcollapse.onclick = thisclick;
                                cell.appendChild(expcollapse);
                                var text = document.createElement('span');
                                text.innerHTML = datarows[r][k][0];
                                cell.appendChild(text);
                            }
                        }
                        var g = 1;
                        for (var d = 0; d < currCols.length; d++) {
                            if (datarows[r][d][1] == 0) {
                                g = 0;
                                break;
                            }
                        }
                        if (g == 1) {
                            for (var k = datarows[r].length - numfixedcols; k < datarows[r].length; k++) {
                                var cell = row.insertCell(k);
                                cell.setAttribute("class", "customTransparentPanel sublisttext");
                                var text = document.createElement('span');
                                text.innerHTML = datarows[r][k];
                                cell.appendChild(text);
                            }
                        }
                    } else if (mc >= 0) {
                        var row = tbl.insertRow(tbl.rows.length);
                        for (var t = mc + 1; t < datarows[r].length - numfixedcols; t++) {
                            if (checkifallbeforeisone(datarows, r, t)) {
                                tblrspancols[t][0].rowSpan = tbl.rows.length - tblrspancols[t][1];
                                var cell = row.insertCell(t - mc - 1);
                                tblrspancols[t][0] = cell;
                                tblrspancols[t][1] = tbl.rows.length;
                                cell.setAttribute("class", "customTransparentPanel sublisttext");
                                var expcollapse = (datarows[r][t][1] == 0 ? expandedimg.cloneNode(true) : collapsedimg.cloneNode(true));
                                expcollapse.setAttribute('class', 'customGreenPanel sublisttext');
                                expcollapse.setAttribute('id', r.toString() + ',' + t.toString() + ',' + tbl.id);
                                expcollapse.onclick = thisclick;
                                cell.appendChild(expcollapse);
                                var text = document.createElement('span');
                                text.innerHTML = datarows[r][t][0];
                                cell.appendChild(text);
                            }
                        }
                        var g = 1;
                        for (var d = 0; d < currCols.length; d++) {
                            if (datarows[r][d][1] == 0) {
                                g = 0;
                                break;
                            }
                        }
                        if (g == 1) {
                            for (var f = datarows[r].length - numfixedcols; f < datarows[r].length; f++) {
                                var cell = row.insertCell(f - mc - 1);
                                cell.setAttribute("class", "customTransparentPanel sublisttext");
                                var text = document.createElement('span');
                                text.innerHTML = datarows[r][f];
                                cell.appendChild(text);
                            }
                        }
                        currCols = new Array();
                        for (var k = 0; k < datarows[r].length - numfixedcols; k++) {
                            currCols.push(datarows[r][k][0]);
                        }

                    }
                }
            }
            if (r == datarows.length - 1) {
                for (var q = 0; q < tblrspancols.length; q++) {
                    tblrspancols[q][0].rowSpan = tbl.rows.length - tblrspancols[q][1] + 1;
                }
            }
        }
    }
}
function checkifallbeforeisone(datarows, r, t) {
    if (t == 0)
        return true;
    var j = false;
    for (var i = 0; i < t; i++) {
        if (datarows[r][i][1] == 0) {
            j = false;
            break;
        } else {
            j = true;
        }
    }
    return j;
}
function insertColumnHeaders(tblid, colheadernames) {
    var tbl = document.getElementById(tblid);
    var rowheader = tbl.insertRow(tbl.rows.length);
    for (var i = 0; i < colheadernames.length; i++) {
        var cell = rowheader.insertCell(i);
        cell.setAttribute("class", "customDarkBluePanel glass headerLabel1");
        cell.innerHTML = colheadernames[i];
    }
}
function thisclick(e) {
    if (!e) e = window.event;
    var array = (e.target || e.srcElement).id.split(',');
    var datarows = new Array();
    var numfixedcols;
    for (var i = 0; i < tblcurrColTypes.length; i++) {
        if (tblcurrColTypes[i][1] == array[2]) {
            datarows = tblcurrColTypes[i][0];
        }
    }
    for (var i = 0; i < tblnumfixedcols.length; i++) {
        if (tblnumfixedcols[i][1] == array[2]) {
            numfixedcols = tblnumfixedcols[i][0];
        }
    }
    if (array[1] == 0) {
        for (var i = 0; i < datarows.length; i++) {
            if (datarows[i][0][0] == datarows[array[0]][0][0]) {
                if (datarows[i][0][1] == 1) {
                    datarows[i][0][1] = 0;
                } else {
                    datarows[i][0][1] = 1;
                }
            }
        }
    } else {
        var cols = new Array();
        for (var i = array[1]; i >= 0; i--) {
            cols.push(datarows[array[0]][i][0]);
        }
        for (var i = 0; i < datarows.length; i++) {
            var found = 1;
            for (var c = 0; c < cols.length; c++) {
                if (datarows[i][cols.length - 1 - c][0] != cols[c]) {
                    found = 0;
                }
            }
            if (found == 1) {
                if (datarows[i][array[1]][1] == 1) {
                    datarows[i][array[1]][1] = 0;
                } else {
                    datarows[i][array[1]][1] = 1;
                }
            }
        }
    }
    var tbl = document.getElementById(array[2]);
    for (var r = tbl.rows.length - 1; r > 0; r--) {
        tbl.deleteRow(r);
    }
    drawdrilldowntable2(array[2]);
}
