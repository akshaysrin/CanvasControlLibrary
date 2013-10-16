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
            var emailServerAddress;
            var currMailboxName = '';
            var gridWindowID = 0;
            var labelwindowid = 0;
            var panelwindowid = 0;
            registerCanvasElementId(elemId);
            function loginForm() {
                var emailAddressLabel = new CCLLabel();
                emailAddressLabel.CanvasID = elemId;
                emailAddressLabel.ControlNameID = 'emailAddressLabel';
                emailAddressLabel.X = 10;
                emailAddressLabel.Y = 10;
                emailAddressLabel.Width = 100;
                emailAddressLabel.Height = 20;
                emailAddressLabel.Text = 'Email Address ::';
                emailAddressLabel.TextColor = '#000000';
                emailAddressLabel.TextHeight = 12;
                emailAddressLabel.TextFontString = '12pt Ariel';
                emailAddressLabel.Depth = highestDepth;
                loginFormWindowIDs.push(emailAddressLabel.Initialize());
                var emailAddressTextBoxWindowID = createTextBox(elemId, 'emailAddressTextBox', 200, 5, 200, 30, highestDepth, 'Email Address',
                    '#C0C0C0', 20, '12pt Ariel', '#000000', 12, '12pt Ariel', 500, '.+', 0, '', 1, '#C0C0C0', 1, 0, '#D0D0D0', 2, 2, 2, 1, 10, 1,
                    '#FFFFFF', '#F0F0F0', 0, '', 0, null, null, null, null, null, null, null, '#000000', '#FFAFAF', 1, null, null, 1);
                loginFormWindowIDs.push(emailAddressTextBoxWindowID);
                loginFormWindowIDs.push(createLabel(elemId, 'passwordLabel', 10, 60, 100, 20, 'Password ::', '#000000', 12, '12pt Ariel', null, highestDepth));
                var passwordTextBoxWindowId = createTextBox(elemId, 'passwordTextBox', 200, 55, 200, 30, highestDepth, 'Password', '#C0C0C0', 20, '12pt Ariel', '#000000',
                    12, '12pt Ariel', 500, '.+', 1, '*', 1, '#C0C0C0', 1, 0, '#D0D0D0', 2, 2, 2, 1, 10, 1, '#FFFFFF', '#F0F0F0', 0, '', 0, null, null, null, null,
                    null, null, null, '#000000', '#FFAFAF', 0, null, null, 2);
                loginFormWindowIDs.push(passwordTextBoxWindowId);
                loginFormWindowIDs.push(createLabel(elemId, 'emailServerAddressLabel', 10, 100, 200, 20, 'Email Server Address ::', '#000000', 12, '12pt Ariel', null, highestDepth));
                var emailServerAddressTextBoxWindowID = createTextBox(elemId, 'emailServerAddressTextBox', 200, 95, 200, 30, highestDepth, 'Email Server Address',
                    '#C0C0C0', 20, '12pt Ariel', '#000000', 12, '12pt Ariel', 500, '.+', 0, '', 1, '#C0C0C0', 1, 0, '#D0D0D0', 2, 2, 2, 1, 10, 1,
                    '#FFFFFF', '#F0F0F0', 0, '', 0, null, null, null, null, null, null, null, '#000000', '#FFAFAF', 0, null, null, 3);
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
                                        currMailboxName = foldersplitnames[i][0];
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
                            createTreeView(elemId, 'foldersTreeView', 0, 0, 300, 900, highestDepth, rootnodes, '#000000', '12pt Ariel', 12, function (canvasid, windowid, node) {
                                currMailboxName = getMailboxName(node);
                                getEmailHeaders();
                            }, null, 0, 0, 0, inboxnode);
                            invalidateRect(elemId, null, 0, 0, 1800, 900);
                            invokeServerSideFunction('Ajax.aspx', 'getEmailHeaders', elemId, 1, function (params) {
                                var uids = new Array();
                                var rowData = new Array();
                                for (var i = 0; i < params.length; i++) {
                                    uids.push(params[i].splice(5, 1)[0]);
                                }
                                gridWindowID = createGrid(elemId, 'EmailDataGrid', 316, 0, 1469, 450, highestDepth, params, ['From', 'Subject', 'Date Sent',
                                    'Date Received', 'Has Attachments'], '#000000', 12, '12pt Ariel', '#FFFFFF', 14, '14pt Ariel', null, null,
                                    function (canvasid, windowid, c, r) {
                                        var gridProps = getGridProps(canvasid, windowid);
                                        invokeServerSideFunction('Ajax.aspx', 'getMailMessage', elemId, 1, function (params) {
                                            var multilinelableprops = getMultiLineLabelProps(elemId, labelwindowid);
                                            multilinelableprops.Text = params[0][3];
                                            invalidateRect(elemId, null, 0, 0, 1800, 900);
                                        }, [loginEmailAddress, loginPassword, emailServerAddress, (gridProps.HasUIDs == 1 ? gridProps.SortedUIDs :
                                            gridProps.OrigUIDs)[r - 1], currMailboxName]);
                                        invalidateRect(elemId, null, 0, 0, 1800, 900);
                                    }, 20, 30, [400, 539, 180, 180, 170], 0, null, 0, '#000026', '#000026', '#f7f7f7', '#f7f7f7', '#FFFFFF', '#FFFFFF', null, 1,
                                    '#fcb931', 0, null, 1, [[0, "Alphabetical", "Ascending"], [1, "Alphabetical", "Ascending"], [3, "Date", "Descending"]], 0,
                                    null, 0, null, 1, uids, 0, null, 0, null);
                                var gridProps = getGridProps(elemId, gridWindowID);
                                invokeServerSideFunction('Ajax.aspx', 'getMailMessage', elemId, 1, function (params) {
                                    if (panelwindowid == 0) {
                                        panelwindowid = createPanel(elemId, 'DisplayedEmailPanel', 316, 450, 1469, 450, highestDepth, 1, '#C0C0C0', 0, null,
                                            null, 0, null, null, null, null, null, null, null, null, null, null, 1, null, null);
                                        if (labelwindowid == 0) {
                                            labelwindowid = createMultiLineLabel(elemId, "DisplayedEmail", 316, 450, 1469, highestDepth, 0, params[0][3],
                                                '#000000', 12, '12pt Ariel', 5, 0);
                                            registerChildWindow(elemId, labelwindowid, panelwindowid);
                                        } else {
                                            var mlblprops = getMultiLineLabelProps(elemId, labelwindowid);
                                            mlblprops.Text = params[0][3];
                                        }
                                    } else {
                                        var mlblprops = getMultiLineLabelProps(elemId, labelwindowid);
                                        mlblprops.Text = params[0][3];
                                    }
                                    invalidateRect(elemId, null, 0, 0, 1800, 900);
                                }, [loginEmailAddress, loginPassword, emailServerAddress, (gridProps.HasUIDs == 1 ? gridProps.SortedUIDs :
                                            gridProps.OrigUIDs)[(gridProps.HasUIDs == 1 ? gridProps.SortedUIDs :
                                            gridProps.OrigUIDs).length - 1], currMailboxName]);
                                invalidateRect(elemId, null, 0, 0, 1800, 900);
                            }, [loginEmailAddress, loginPassword, emailServerAddress, currMailboxName]);
                        }, [loginEmailAddress, loginPassword, emailServerAddress]);
                    }, null, '#bee6fd', '#a7d9f5', '#eaf6fd', '#d9f0fc', '#3c7fb1', null));
                invalidateRect(elemId, null, 0, 0, 1800, 900);
            }
            function getMailboxName(node) {
                var str = '';
                if (node.TreeviewNodeInstancesParentNode != null) {
                    str = getMailboxName(node.TreeviewNodeInstancesParentNode) + '/' + str;
                }
                str = str + node.Label;
                return str;
            }
            function getEmailHeaders() {
                invokeServerSideFunction('Ajax.aspx', 'getEmailHeaders', elemId, 1, function (params) {
                    var uids = new Array();
                    var rowData = new Array();
                    for (var i = 0; i < params.length; i++) {
                        uids.push(params[i].splice(5, 1)[0]);
                    }
                    var gridProps = getGridProps(elemId, gridWindowID);
                    gridProps.RowData = params;
                    gridProps.SortedData = params;
                    gridProps.OrigUIDs = uids;
                    gridProps.SortedUIDs = uids;
                    if (gridProps.HasSorting == 1 && checkIfAllUnsorted(getGridProps(elemId, gridWindowID)) == 0) {
                        if (gridProps.CustomSortFunction != null) {
                            gridProps.CustomSortFunction(getGridProps(canvasid, windowid));
                        } else {
                            sortGridData(getGridProps(elemId, gridWindowID));
                        }
                    }
                    invalidateRect(elemId, null, 0, 0, 1800, 900);
                }, [loginEmailAddress, loginPassword, emailServerAddress, currMailboxName]);
            }
            loginForm();
        </script>

    </div>
    </form>
</body>
</html>
