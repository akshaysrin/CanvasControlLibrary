<?php
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

include 'CanvasControlLibrary.class.php';

$parameters = array();
$ccl = new CanvasControlLibrary();
$ccl->InvokeServerSideFunction();
$ccl->SendVars($parameters);

function ClickMe($obj, $canvasid, $windowid)
{
    $lp = $obj->getControlPropsByControlNameID("l1");
    if (count($obj->CurrentSessionObj->Data) == 0)
    {
        array_push($obj->CurrentSessionObj->Data, 1);
    }
    else
    {
        $obj->CurrentSessionObj->Data[0] = $obj->CurrentSessionObj->Data[0] + 1;
    }
    $lp->Text = $obj->CurrentSessionObj->Data[0];
    $i1 = $obj->getControlPropsByControlNameID("i1");
    $i1->ImageURL = "Bombay.png";
}

?>