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
function drawdrilldowntable(tblid, showtotals, numfixedcols) {
    expandedimg = document.createElement('span');
    expandedimg.style.paddingRight = '5px';
    expandedimg.innerHTML = '&nbsp;+&nbsp;';
    collapsedimg = document.createElement('span');
    collapsedimg.style.paddingRight = '5px';
    collapsedimg.innerHTML = '&nbsp;-&nbsp;';
    tblnumfixedcols.push([numfixedcols, tblid, showtotals]);
    var tbl = document.getElementById(tblid);
    var found = 0;
    var currColTypes = new Array();
    for (var i = 0; i < tblcurrColTypes.length; i++) {
        if (tblcurrColTypes[i][tblcurrColTypes[i].length - 1] == tblid) {
            for (k = 0; k < tblcurrColTypes[i].length - 1; k++) {
                currColTypes.push(tblcurrColTypes[i][k]);
            }
            break;
        }
    }
    for (var i = 0; i < currColTypes[0].length; i++) {
        var row = tbl.insertRow(tbl.rows.length);
        var cell = row.insertCell(0);
        var topcell = cell;
        var expcollapse = (currColTypes[0][i][currColTypes[0][i].length - 1] == 0 ? expandedimg.cloneNode(true) : collapsedimg.cloneNode(true));
        expcollapse.setAttribute('class', 'customGreenPanel sublisttext');
        expcollapse.setAttribute('id', '0,' + i.toString() + ',' + tblid);
        expcollapse.onclick = thisclick;
        cell.appendChild(expcollapse);
        var text = document.createElement('span');
        text.innerHTML = currColTypes[0][i][0];
        cell.appendChild(text);
        if (currColTypes[0][i][(showtotals == 1 ? 2 : 1)] == 0 && showtotals == 1) {
            var k = 1;
            cell = row.insertCell(k);
            cell.setAttribute("class", "customTransparentPanel sublisttext");
            cell.innerHTML = 'TOTAL';
            cell.colSpan = currColTypes.length - 1;
            cell = row.insertCell(++k);
            cell.setAttribute("class", "customTransparentPanel sublisttext");
            cell.innerHTML = currColTypes[0][i][1];
        } else {
            drawnextrow(tbl, currColTypes, 1, [currColTypes[0][i][0]], showtotals, numfixedcols);
            if (showtotals == 1) {
                row = tbl.insertRow(tbl.rows.length);
                var m = 0;
                cell = row.insertCell(m);
                cell.setAttribute("class", "customTransparentPanel sublisttext");
                cell.innerHTML = 'TOTAL';
                cell.colSpan = currColTypes.length - 1;
                cell = row.insertCell(++m);
                cell.setAttribute("class", "customTransparentPanel sublisttext");
                cell.innerHTML = currColTypes[0][i][1];
            }
            topcell.rowSpan = tbl.rows.length - topcell.parentNode.rowIndex;
            topcell.style.verticalAlign = "top";
            topcell.setAttribute("class", "customTransparentPanel sublisttext");
        }
    }
}
function thisclick(e) {
    if (!e) e = window.event;
    var array = (e.target || e.srcElement).id.split(',');
    var numfixedcols = 1;
    var showtotals = 1;
    for (var t = 0; t < tblnumfixedcols.length; t++) {
        if (tblnumfixedcols[t][1] == array[2]) {
            numfixedcols = tblnumfixedcols[t][0];
            showtotals = tblnumfixedcols[t][2];
        }
    }
    var u = parseInt(array[0]);
    var h = parseInt(array[1]);
    var currColTypes = new Array();
    for (var i = 0; i < tblcurrColTypes.length; i++) {
        if (tblcurrColTypes[i][tblcurrColTypes[i].length - 1] == array[2]) {
            for (k = 0; k < tblcurrColTypes[i].length - 1; k++) {
                currColTypes.push(tblcurrColTypes[i][k]);
            }
            break;
        }
    }
    var array2 = [currColTypes[u][h][0]];
    if (currColTypes[u][h][currColTypes[u][h].length - 1] == 1) {
        currColTypes[u][h][currColTypes[u][h].length - 1] = 0;
        //togglestatusforallcols(currColTypes, array2, 0, numfixedcols, showtotals);
    } else {
        currColTypes[u][h][currColTypes[u][h].length - 1] = 1;
        //togglestatusforallcols(currColTypes, array2, 1, numfixedcols, showtotals);
    }
    var tbl = document.getElementById(array[2]);
    for (var r = tbl.rows.length - 1; r > 0; r--) {
        tbl.deleteRow(r);
    }
    drawdrilldowntable(array[2], showtotals, numfixedcols);
}
function togglestatusforallcols(currColTypes, array, status, numfixedcols, showtotals) {
    for (var i = 0; i < currColTypes.length; i++) {
        for (var j = 0; j < currColTypes[i].length; j++) {
            var found = 1;
            for (var k = 0; k < currColTypes[i][j].length - 1 && k < array.length; k++) {
                if (array[k] != currColTypes[i][j][k]) {
                    found = 0;
                    break;
                }
            }
            if (found == 1) {
                currColTypes[i][j][currColTypes[i][j].length - 1] = status;
            }
        }
    }
}
function drawnextrow(tbl, currColTypes, x, array, showtotals, numfixedcols) {
    for (var f = 0; f < currColTypes[x].length; f++) {
        var topcell;
        if (currColTypes[x][f][currColTypes[x][f].length - 1] == 0) {
            var found = 1;
            for (var j = 0; j < array.length; j++) {
                if (currColTypes[x][f][j] != array[j]) {
                    found = 0;
                    break;
                }
            }
            if (found == 1) {
                var row = tbl.insertRow(tbl.rows.length);
                var cell;
                var l = 0;
                cell = row.insertCell(l);
                topcell = cell;
                if (x != currColTypes.length - 1) {
                    var expcollapse = (currColTypes[x][f][currColTypes[x][f].length - 1] == 0 ? expandedimg.cloneNode(true) : collapsedimg.cloneNode(true));
                    expcollapse.setAttribute('class', 'customGreenPanel sublisttext');
                    expcollapse.setAttribute('id', x.toString() + ',' + f.toString() + ',' + tbl.id);
                    expcollapse.onclick = thisclick;
                    cell.appendChild(expcollapse);
                }
                var text = document.createElement('span');
                text.innerHTML = currColTypes[x][f][x];
                cell.appendChild(text);
                var e = 0;
                topcell.rowSpan = tbl.rows.length - topcell.parentNode.rowIndex;
                topcell.style.verticalAlign = "top";
                topcell.setAttribute("class", "customTransparentPanel sublisttext");
                if (showtotals == 1) {
                    cell = row.insertCell(++e);
                    cell.setAttribute("class", "customTransparentPanel sublisttext");
                    cell.innerHTML = 'TOTAL';
                    if (x < currColTypes.length - 2) {
                        cell.colSpan = currColTypes.length - x - 1;
                    }
                    cell = row.insertCell(++e);
                    cell.setAttribute("class", "customTransparentPanel sublisttext");
                    cell.innerHTML = currColTypes[x][f][currColTypes[x][f].length - 2];
                }
            }
        } else {
            var found = 1;
            for (var j = 0; j < array.length; j++) {
                if (currColTypes[x][f][j] != array[j]) {
                    found = 0;
                    break;
                }
            }
            if (found == 1) {
                var row = tbl.insertRow(tbl.rows.length);
                var cell;
                var l = 0;
                cell = row.insertCell(l);
                topcell = cell;
                if (x != currColTypes.length - 1) {
                    var expcollapse = (currColTypes[x][f][currColTypes[x][f].length - 1] == 0 ? expandedimg.cloneNode(true) : collapsedimg.cloneNode(true));
                    expcollapse.setAttribute('class', 'customGreenPanel sublisttext');
                    expcollapse.setAttribute('id', x.toString() + ',' + f.toString() + ',' + tbl.id);
                    expcollapse.onclick = thisclick;
                    cell.appendChild(expcollapse);
                }
                var text = document.createElement('span');
                text.innerHTML = currColTypes[x][f][x];
                cell.setAttribute("class", "customTransparentPanel sublisttext");
                cell.appendChild(text);
                if (x == currColTypes.length - 1) {
                    l++;
                    for (var p = 0; p < numfixedcols; p++) {
                        cell = row.insertCell(l);
                        cell.setAttribute("class", "customTransparentPanel sublisttext");
                        cell.innerHTML = currColTypes[x][f][currColTypes[x][f].length - p - 2];
                    }
                }
                if (x + 1 < currColTypes.length) {
                    if (currColTypes[x][f][currColTypes[x][f].length - 1] == 1) {
                        var array2 = array.concat(currColTypes[x][f][x]);
                        var str;
                        if (showtotals == 1) {
                            str = currColTypes[x][f][currColTypes[x][f].length - 2];
                        }
                        drawnextrow(tbl, currColTypes, x + 1, array2, showtotals, numfixedcols);
                        if (showtotals == 1) {
                            row = tbl.insertRow(tbl.rows.length);
                            var m = 0;
                            cell = row.insertCell(m);
                            cell.setAttribute("class", "customTransparentPanel sublisttext");
                            cell.innerHTML = 'TOTAL';
                            if (x < currColTypes.length - 2) {
                                cell.colSpan = currColTypes.length - x - 1;
                            }
                            cell = row.insertCell(++m);
                            cell.setAttribute("class", "customTransparentPanel sublisttext");
                            cell.innerHTML = str;
                        }
                        topcell.rowSpan = tbl.rows.length - topcell.parentNode.rowIndex;
                        topcell.style.verticalAlign = "top";
                        topcell.setAttribute("class", "customTransparentPanel sublisttext");
                    }
                }
            }
        }
    }
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
