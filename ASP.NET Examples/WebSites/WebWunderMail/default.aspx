<%@ Page Language="C#" AutoEventWireup="true" CodeFile="default.aspx.cs" Inherits="login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1, IE=EmulateIE9" /> <!-- Eliminated IE=edge for compatibility for IE 10 on Windows 7 -->
    <script src="CanvasControlLibrary.js" type="text/javascript"></script>
</head>
<body>
    <form id="form1" runat="server" method="post">
    <div>
        <canvas id="canvas" width="1800" height="900" tabindex="0"></canvas>
        <script type="text/javascript">
            var loginEmailAddress = '';
            var loginPassword = '';
            var elemId = 'canvas';
            var loginFormWindowIDs = new Array();
            var uids = new Array();
            var origUids = new Array();
            var emailServerAddress;
            registerCanvasElementId(elemId);
            function loginForm() {
                loginFormWindowIDs.push(createLabel(elemId, 'emailAddressLabel', 10, 10, 100, 20, 'Email Address ::', '#000000', 12, '12pt Ariel', null, highestDepth));
                var emailAddressTextBoxWindowID = createTextBox(elemId, 'emailAddressTextBox', 200, 5, 200, 30, highestDepth, 'Email Address',
                    '#C0C0C0', 20, '12pt Ariel', '#000000', 12, '12pt Ariel', 500, '.+', 0, '', 1, '#C0C0C0', 1, 0, '#D0D0D0', 2, 2, 2, 1, 10, 1,
                    '#FFFFFF', '#F0F0F0', 0, '', 0, null, null, null, null, null, null, null, '#000000', '#FFAFAF', 1, null, null);
                loginFormWindowIDs.push(emailAddressTextBoxWindowID);
                loginFormWindowIDs.push(createLabel(elemId, 'passwordLabel', 10, 60, 100, 20, 'Password ::', '#000000', 12, '12pt Ariel', null, highestDepth));
                var passwordTextBoxWindowId = createTextBox(elemId, 'passwordTextBox', 200, 55, 200, 30, highestDepth, 'Password', '#C0C0C0', 20, '12pt Ariel', '#000000',
                    12, '12pt Ariel', 500, '.+', 1, '*', 1, '#C0C0C0', 1, 0, '#D0D0D0', 2, 2, 2, 1, 10, 1, '#FFFFFF', '#F0F0F0', 0, '', 0, null, null, null, null,
                    null, null, null, '#000000', '#FFAFAF', 0, null, null);
                loginFormWindowIDs.push(passwordTextBoxWindowId);
                loginFormWindowIDs.push(createLabel(elemId, 'emailServerAddressLabel', 10, 100, 200, 20, 'Email Server Address ::', '#000000', 12, '12pt Ariel', null, highestDepth));
                var emailServerAddressTextBoxWindowID = createTextBox(elemId, 'emailServerAddressTextBox', 200, 95, 200, 30, highestDepth, 'Email Server Address',
                    '#C0C0C0', 20, '12pt Ariel', '#000000', 12, '12pt Ariel', 500, '.+', 0, '', 1, '#C0C0C0', 1, 0, '#D0D0D0', 2, 2, 2, 1, 10, 1,
                    '#FFFFFF', '#F0F0F0', 0, '', 0, null, null, null, null, null, null, null, '#000000', '#FFAFAF', 0, null, null);
                loginFormWindowIDs.push(emailServerAddressTextBoxWindowID);
                loginFormWindowIDs.push(createButton(elemId, 'loginButton', 10, 140, 400, 30, 'Login', '#0000FF', 12, '12pt Ariel', 5, highestDepth, 1, 0,
                    function (canvasid, windowid) {
                        loginEmailAddress = getTextBoxProps(canvasid, emailAddressTextBoxWindowID).UserInputText;
                        loginPassword = getTextBoxProps(canvasid, passwordTextBoxWindowId).UserInputText;
                        emailServerAddress = getTextBoxProps(canvasid, emailServerAddressTextBoxWindowID).UserInputText;
                        for (var i = 0; i < loginFormWindowIDs.length; i++) {
                            destroyControl(canvasid, loginFormWindowIDs[i]);
                        }
                        invokeServerSideFunction('Ajax.aspx', 'getFolders', elemId, 1, function (params) {
                            var rootnodes = new Array();
                            var inboxnode;
                            var foldersplitnames = new Array();
                            for (var i = 0; i < params.length; i++) {
                                foldersplitnames.push([params[i], params[i].split('/')]);
                            }
                            for (var i = 0; i < foldersplitnames.length; i++) {
                                if (foldersplitnames[i][1].length == 1) {
                                    foldersplitnames[i].push(addChildNodes(rootnodes, null, null, 1, foldersplitnames[i][0], foldersplitnames[i]));
                                    if (foldersplitnames[i][0].toLowerCase() == 'inbox') {
                                        inboxnode = foldersplitnames[i][2];
                                    }
                                } else {
                                    for (var j = 0; j < foldersplitnames.length; j++) {
                                        var found = true;
                                        for (var k = 0;  k < foldersplitnames[j][1].length; k++) {
                                            if (foldersplitnames[j][1].length != foldersplitnames[i][1].length - 1 || foldersplitnames[j][1][k] != foldersplitnames[i][1][k]) {
                                                found = false;
                                                break;
                                            }
                                        }
                                        if (found == true) {
                                            foldersplitnames[i].push(addChildNodes(rootnodes, foldersplitnames[j][2], null, 1,
                                                foldersplitnames[i][1][foldersplitnames[i][1].length - 1], foldersplitnames[i]));
                                            break;
                                        }
                                    }
                                }
                            }
                            createTreeView(elemId, 'foldersTreeView', 0, 0, 300, 900, highestDepth, rootnodes, '#000000', '12pt Ariel', 12, function (canvasid, windowid) {
                            }, null, 0, 0, 0, inboxnode);
                            invalidateRect(elemId, null, 0, 0, 1800, 900);
                            invokeServerSideFunction('Ajax.aspx', 'getEmailHeaders', elemId, 1, function (params) {
                                var rowData = new Array();
                                for (var i = 0; i < params.length; i++) {
                                    uids.push(params[i].splice(5, 1));
                                }
                                origUids = uids;
                                createGrid(elemId, 'EmailDataGrid', 316, 0, 1469, 900, highestDepth, params, ['From', 'Subject', 'Date Sent', 'Date Received', 'Has Attachments'],
                                    '#000000', 12, '12pt Ariel', '#FFFFFF', 14, '14pt Ariel', null, null, function (canvasid, windowid, c, r) {
                                        invokeServerSideFunction('Ajax.aspx', 'getMailMessage', elemId, 1, function (params) {
                                            alert(params);
                                        }, [loginEmailAddress, loginPassword, emailServerAddress, uids[r - 1][0]]);
                                        invalidateRect(elemId, null, 0, 0, 1800, 900);
                                    }, 20, 30, [400, 539, 180, 180, 170], 0, null, 0, '#000026', '#000026', '#f7f7f7', '#f7f7f7', '#FFFFFF', '#FFFFFF', null, 1,
                                    '#fcb931', 0, null, 1, [[0, "Alphabetical", "Ascending"], [1, "Alphabetical", "Ascending"], [3, "Date", "Descending"]], 0,
                                    null, 0, function (gridProps) {
                                        if (gridProps.SortedData && gridProps.SortedData.length > 1 && checkIfAllUnsorted(gridProps) == 0) {
                                            var sortedRows = new Array();
                                            var sortedUIDS = new Array();
                                            sortedRows.push(gridProps.SortedData[0]);
                                            sortedUIDS.push(uids[0]);
                                            for (var r = 1; r < gridProps.SortedData.length; r++) {
                                                var rowOutcomeHighestPlacement = sortedRows.length;
                                                for (var r3 = 0; r3 < sortedRows.length; r3++) {
                                                    var prevOutcome = 1;
                                                    for (var c = 0; c < gridProps.SortedData[r].length; c++) {
                                                        var c2 = getGridSortedColumnIndex(gridProps, c);
                                                        if (c2 > -1) {
                                                            if (gridProps.SortableColumnsArray[c2][1] == "Alphabetical" && gridProps.SortableColumnsArray[c2][2] != "Unsorted") {
                                                                var localOutcome;
                                                                if (gridProps.SortableColumnsArray[c2][1] == "Alphabetical") {
                                                                    localOutcome = gridProps.SortedData[r][c] && sortedRows[r3][c] ?
                                                                        gridProps.SortedData[r][c].localeCompare(sortedRows[r3][c]) :
                                                                        gridProps.SortedData[r][c] && !sortedRows[r3][c] ? 1 :
                                                                        !gridProps.SortedData[r][c] && !sortedRows[r3][c] ? 0 : -1;
                                                                } else if (gridProps.SortableColumnsArray[c2][1] == "Numerical" ||
                                                                    gridProps.SortableColumnsArray[c2][1] == "Date") {
                                                                    localOutcome = gridProps.SortedData[r][c] && sortedRows[r3][c] ? 
                                                                        Number(gridProps.SortedData[r][c]) > Number(sortedRows[r3][c]) ? 1 :
                                                                        Number(gridProps.SortedData[r][c]) < Number(sortedRows[r3][c]) ? -1 : 0 :
                                                                        !gridProps.SortedData[r][c] && !sortedRows[r3][c] ? 0 :
                                                                        gridProps.SortedData[r][c] && !sortedRows[r3][c] ? 1 : -1;
                                                                }
                                                                if (gridProps.SortableColumnsArray[c2][2] == "Ascending") {
                                                                    if (localOutcome == 1) {
                                                                        localOutcome = -1;
                                                                    } else if (localOutcome = -1) {
                                                                        localOutcome = 1;
                                                                    }
                                                                }
                                                                if (localOutcome <= prevOutcome) {
                                                                    prevOutcome = localOutcome;
                                                                }
                                                            }
                                                        }
                                                    }
                                                    if (prevOutcome == 1) {
                                                        rowOutcomeHighestPlacement = r3;
                                                        break;
                                                    } else {
                                                        rowOutcomeHighestPlacement = r3 + 1;
                                                    }
                                                }
                                                sortedRows.splice(rowOutcomeHighestPlacement, 0, gridProps.SortedData[r]);
                                                sortedUIDS.splice(rowOutcomeHighestPlacement, 0, uids[r]);
                                            }
                                            gridProps.SortedData = sortedRows;
                                            uids = sortedUIDS;
                                        } else {
                                            gridProps.SortedData = gridProps.RowData;
                                            uids = origUids;
                                        }
                                    }, 0, null, 0, null);
                                invalidateRect(elemId, null, 0, 0, 1800, 900);
                            }, [loginEmailAddress, loginPassword, emailServerAddress]);
                        }, [loginEmailAddress, loginPassword, emailServerAddress]);
                    }, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null));
                invalidateRect(elemId, null, 0, 0, 1800, 900);
            }
            loginForm();
        </script>

    </div>
    </form>
</body>
</html>
