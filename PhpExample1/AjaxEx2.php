<?php

include 'CanvasControlLibrary.class.php';

$movieIndexes = array(array("Phoenix Mills", array("Fantastic Four", "Ferris Bueller's Day Off", "Incredible Hulk")),
	array("Juhu", array("Iron Man", "Point Break", "Spider Man 2")), array("Nariman Point", array("Spider Man 4", "Spider Man 3", "The Avengers")),
	array("Chitrapur", array("Thor", "Wolverine", "X-Men First Class")), array("Khari Baoli", array("GI Joe Rise of Cobra", "The Avengers", "Wolverine")),
	array("Lakshmi Garden", array("Thor", "Point Break", "Iron Man")), array("Gandhi Nagar", array("Spider Man 2", "Incredible Hulk", "GI Joe Rise of Cobra")),
	array("Lake City", array("The Avengers", "X-Men First Class", "Iron Man")), array("Rajaji Nagar", array("Fantastic Four", "Wolverine", "Thor")),
	array("Harrington Road", array("The Avengers", "X-Men First Class", "Iron Man")), array("Boat Club", array("GI Joe Rise of Cobra", "Spider Man 3", "Incredible Hulk")),
	array("Chetpet", array("Thor", "Fantastic Four", "The Avengers")));

$parameters = array();
$ccl = new CanvasControlLibrary();
$ccl->InvokeServerSideFunction();
$ccl->SendVars($parameters);


function InitializeForm1($obj, $canvasid, $windowid)
{
	$selectCityComboBox = $obj->getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea");
	$selectCityComboBox->Data = array();
	array_push($selectCityComboBox->Data, "Select a city");
	array_push($selectCityComboBox->Data, "Mumbai");
	array_push($selectCityComboBox->Data, "Delhi");
	array_push($selectCityComboBox->Data, "Bangalore");
	array_push($selectCityComboBox->Data, "Chennai");
	$obj->getControlPropsByWindowID($canvasid, $selectCityComboBox->VScrollBarWindowID)->MaxItems = strval(count($selectCityComboBox->Data));
}

function onSelectCityChanged($obj, $canvasid, $windowid)
{
	$selectCityComboBox = $obj->getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea");
	$selectCinemaComboBox = $obj->getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
	$selectCinemaComboBox->Data = array();
	switch (strval($selectCityComboBox->Data[intval($selectCityComboBox->SelectedID)]))
	{
		case "Mumbai":
			$selectCinemaComboBox->Data = array("Select a Theater", "Juhu", "Phoenix Mills", "Nariman Point");
			break;
		case "Delhi":
			$selectCinemaComboBox->Data = array("Select a Theater", "Chitrapur", "Khari Baoli", "Lakshmi Garden");
			break;
		case "Bangalore":
			$selectCinemaComboBox->Data = array("Select a Theater", "Gandhi Nagar", "Lake City", "Rajaji Nagar");
			break;
		case "Chennai":
			$selectCinemaComboBox->Data = array("Select a Theater", "Harrington Road", "Boat Club", "Chetpet");
			break;
		default:
			$selectCinemaComboBox->Data = array("Select a city");
			break;
	}
	$obj->getControlPropsByControlNameID("selectCinemaComboBoxVSVS")->MaxItems = strval(count($selectCinemaComboBox->Data));
}

function DoPaymentForTickets($obj, $canvasid, $windowid)
{
	global $parameters;
	global $movieIndexes;
	$buttonProps = $obj->getControlPropsByWindowID($canvasid, strval($windowid));
	$lp = $obj->getControlPropsByControlNameID($buttonProps->Tag);
	$textbox = $obj->getControlPropsByControlNameID("numTicketsTextBox");
	$selectCinemaComboBox = $obj->getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
	$obj->getControlPropsByControlNameID("l1")->Text = $buttonProps->Tag;
	preg_match("/Poster[0-9]+/", $buttonProps->Tag, $match);
	$movieIndex = intval(str_replace("Poster", "", $match[0]));
	$movieName = "";
	for ($i = 0; $i < count($movieIndexes); $i++)
	{
		if (strval($movieIndexes[$i][0]) == strval($selectCinemaComboBox->Data[intval($selectCinemaComboBox->SelectedID)]))
		{
			$movieName = strval($movieIndexes[$i][1][$movieIndex]);
		}
	}
	array_push($parameters, "The payment was successful.  You have " . $textbox->UserInputText . " tickets to see " . $movieName . " at " .
		strval($selectCinemaComboBox->Data[intval($selectCinemaComboBox->SelectedID)]) . " showing at time " . $lp->Text . ".");
}

function onSelectCinemaChanged($obj, $canvasid, $windowid)
{
	global $parameters;
	$pictures = array();
	$selectCinemaComboBox = $obj->getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
	switch ($selectCinemaComboBox->Data[intval($selectCinemaComboBox->SelectedID)])
	{
		case "Phoenix Mills":
			$parameters = array(array("fantastic_four.jpg", "1:30 pm", "5:45 pm"), array("ferrisbuellersdayoff.jpg", "9:00 pm", "11:30 pm"), array("IncredibleHulk.jpg", "6:00 pm", "8:30 pm"));
			break;
		case "Juhu":
			$parameters = array(array("ironman.jpg", "4:30 pm", "9:45 pm"), array("pointbreak.jpg", "6:00 pm", "7:30 pm"), array("Spider-Man-2.jpg", "5:00 pm", "10:30 pm"));
			break;
		case "Nariman Point":
			$parameters = array(array("spider-man4.jpg", "7:30 pm", "8:45 pm"), array("spider_man3.jpg", "2:00 pm", "5:30 pm"), array("The-Avengers.jpg", "9:00 pm", "9:30 pm", "10:30 pm", "11:30 pm"));  
			break;
		case "Chitrapur":
			$parameters = array(array("thor.jpg", "8:30 pm", "10:45 pm"), array("wolverine.jpg", "2:00 pm", "5:30 pm"), array("xmen_first_class.jpg", "9:00 pm", "11:30 pm"));
			break;
		case "Khari Baoli":
			$parameters = array(array("gijoeriseofcobra.jpg", "2:30 pm", "5:45 pm"), array("The-Avengers.jpg", "8:00 pm", "9:15 pm"), array("wolverine.jpg", "7:30 pm", "10:15 pm"));
			break;
		case "Lakshmi Garden":
			$parameters = array(array("Thor.jpg", "8:30 pm", "10:45 pm"), array("pointbreak.jpg", "3:00 pm", "4:15 pm"), array("ironman.jpg", "8:45 pm", "9:15 pm"));
			break;
		case "Gandhi Nagar":
			$parameters = array(array("Spider-Man-2.jpg", "4:30 pm", "6:45 pm"), array("IncredibleHulk.jpg", "7:00 pm", "9:15 pm"), array("gijoeriseofcobra.jpg", "3:45 pm", "4:15 pm"));
			break;
		case "Lake City":
			$parameters = array(array("The-Avengers.jpg", "9:30 pm", "9:45 pm"), array("xmen_first_class.jpg", "6:00 pm", "8:15 pm"), array("ironman.jpg", "8:45 pm", "10:15 pm"));
			break;
		case "Rajaji Nagar":
			$parameters = array(array("fantastic_four.jpg", "9:30 pm", "11:45 pm"), array("wolverine.jpg", "8:00 pm", "9:15 pm"), array("Thor.jpg", "6:45 pm", "10:15 pm"));
			break;
		case "Harrington Road":
			$parameters = array(array("The-Avengers.jpg", "10:30 pm", "10:45 pm"), array("xmen_first_class.jpg", "9:00 pm", "10:15 pm"), array("ironman.jpg", "8:45 pm", "11:15 pm")); 
			break;
		case "Boat Club":
			$parameters = array(array("gijoeriseofcobra.jpg", "8:30 pm", "8:45 pm"), array("spider_man3.jpg", "10:00 pm", "11:15 pm"), array("IncredibleHulk.jpg", "8:45 pm", "9:15 pm"));
			break;
		case "Chetpet":
			$parameters = array(array("Thor.jpg", "7:30 pm", "8:45 pm"), array("fantastic_four.jpg", "5:00 pm", "6:15 pm"), array("The-Avengers.jpg", "10:45 pm", "11:15 pm"));
			break;
	}
}
?>