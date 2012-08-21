<?php

include 'CanvasControlLibrary.class.php';

$movieIndexes = array();
$al = array();
array_push($al, "Phoenix Mills");
$indexs = array();
array_push($indexs, "Fantastic Four");
array_push($indexs, "Ferris Bueller's Day Off");
array_push($indexs, "Incredible Hulk");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Juhu");
$indexs = array();
array_push($indexs, "Iron Man");
array_push($indexs, "Point Break");
array_push($indexs, "Spider Man 2");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Nariman Point");
$indexs = array();
array_push($indexs, "Spider Man 4");
array_push($indexs, "Spider Man 3");
array_push($indexs, "The Avengers");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Chitrapur");
$indexs = array();
array_push($indexs, "Thor");
array_push($indexs, "Wolverine");
array_push($indexs, "X-Men First Class");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Khari Baoli");
$indexs = array();
array_push($indexs, "GI Joe Rise of Cobra");
array_push($indexs, "The Avengers");
array_push($indexs, "Wolverine");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Lakshmi Garden");
$indexs = array();
array_push($indexs, "Thor");
array_push($indexs, "Point Break");
array_push($indexs, "Iron Man");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Gandhi Nagar");
$indexs = array();
array_push($indexs, "Spider Man 2");
array_push($indexs, "Incredible Hulk");
array_push($indexs, "GI Joe Rise of Cobra");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Lake City");
$indexs = array();
array_push($indexs, "The Avengers");
array_push($indexs, "X-Men First Class");
array_push($indexs, "Iron Man");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Rajaji Nagar");
$indexs = array();
array_push($indexs, "Fantastic Four");
array_push($indexs, "Wolverine");
array_push($indexs, "Thor");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Harrington Road");
$indexs = array();
array_push($indexs, "The Avengers");
array_push($indexs, "X-Men First Class");
array_push($indexs, "Iron Man");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Boat Club");
$indexs = array();
array_push($indexs, "GI Joe Rise of Cobra");
array_push($indexs, "Spider Man 3");
array_push($indexs, "Incredible Hulk");
array_push($al, $indexs);
array_push($movieIndexes, $al);
$al = array();
array_push($al, "Chetpet");
$indexs = array();
array_push($indexs, "Thor");
array_push($indexs, "Fantastic Four");
array_push($indexs, "The Avengers");
array_push($al, $indexs);
array_push($movieIndexes, $al);

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
			array_push($selectCinemaComboBox->Data, "Select a Theater");
			array_push($selectCinemaComboBox->Data, "Juhu");
			array_push($selectCinemaComboBox->Data, "Phoenix Mills");
			array_push($selectCinemaComboBox->Data, "Nariman Point");
			break;
		case "Delhi":
			array_push($selectCinemaComboBox->Data, "Select a Theater");
			array_push($selectCinemaComboBox->Data, "Chitrapur");
			array_push($selectCinemaComboBox->Data, "Khari Baoli");
			array_push($selectCinemaComboBox->Data, "Lakshmi Garden");
			break;
		case "Bangalore":
			array_push($selectCinemaComboBox->Data, "Select a Theater");
			array_push($selectCinemaComboBox->Data, "Gandhi Nagar");
			array_push($selectCinemaComboBox->Data, "Lake City");
			array_push($selectCinemaComboBox->Data, "Rajaji Nagar");
			break;
		case "Chennai":
			array_push($selectCinemaComboBox->Data, "Select a Theater");
			array_push($selectCinemaComboBox->Data, "Harrington Road");
			array_push($selectCinemaComboBox->Data, "Boat Club");
			array_push($selectCinemaComboBox->Data, "Chetpet");
			break;
		default:
			array_push($selectCinemaComboBox->Data, "Select a city");
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
		strval($selectCinemaComboBox->Data[intval($selectCinemaComboBox->SelectedID)]) .	" showing at time " . $lp->Text . ".");
}

function onSelectCinemaChanged($obj, $canvasid, $windowid)
{
	global $parameters;
	$pictures = array();
	$selectCinemaComboBox = $obj->getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
	switch ($selectCinemaComboBox->Data[intval($selectCinemaComboBox->SelectedID)])
	{
		case "Phoenix Mills":
			array_push($pictures, "fantastic_four.jpg");
			array_push($pictures, "1:30 pm");
			array_push($pictures, "5:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "ferrisbuellersdayoff.jpg");
			array_push($pictures, "9:00 pm");
			array_push($pictures, "11:30 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "IncredibleHulk.jpg");
			array_push($pictures, "6:00 pm");
			array_push($pictures, "8:30 pm");
			array_push($parameters, $pictures);
			break;
		case "Juhu":
			array_push($pictures, "ironman.jpg");
			array_push($pictures, "4:30 pm");
			array_push($pictures, "9:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "pointbreak.jpg");
			array_push($pictures, "6:00 pm");
			array_push($pictures, "7:30 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "Spider-Man-2.jpg");
			array_push($pictures, "5:00 pm");
			array_push($pictures, "10:30 pm");
			array_push($parameters, $pictures);
			break;
		case "Nariman Point":
			array_push($pictures, "spider-man4.jpg");
			array_push($pictures, "7:30 pm");
			array_push($pictures, "8:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "spider_man3.jpg");
			array_push($pictures, "2:00 pm");
			array_push($pictures, "5:30 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "The-Avengers.jpg");
			array_push($pictures, "9:00 pm");
			array_push($pictures, "9:30 pm");
			array_push($pictures, "10:30 pm");
			array_push($pictures, "11:30 pm");
			array_push($parameters, $pictures);
			break;
		case "Chitrapur":
			array_push($pictures, "thor.jpg");
			array_push($pictures, "8:30 pm");
			array_push($pictures, "10:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "wolverine.jpg");
			array_push($pictures, "2:00 pm");
			array_push($pictures, "5:30 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "xmen_first_class.jpg");
			array_push($pictures, "9:00 pm");
			array_push($pictures, "11:30 pm");
			array_push($parameters, $pictures);
			break;
		case "Khari Baoli":
			array_push($pictures, "gijoeriseofcobra.jpg");
			array_push($pictures, "2:30 pm");
			array_push($pictures, "5:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "The-Avengers.jpg");
			array_push($pictures, "8:00 pm");
			array_push($pictures, "9:15 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "wolverine.jpg");
			array_push($pictures, "7:30 pm");
			array_push($pictures, "10:15 pm");
			array_push($parameters, $pictures);
			break;
		case "Lakshmi Garden":
			array_push($pictures, "Thor.jpg");
			array_push($pictures, "8:30 pm");
			array_push($pictures, "10:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "pointbreak.jpg");
			array_push($pictures, "3:00 pm");
			array_push($pictures, "4:15 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "ironman.jpg");
			array_push($pictures, "8:45 pm");
			array_push($pictures, "9:15 pm");
			array_push($parameters, $pictures);
			break;
		case "Gandhi Nagar":
			array_push($pictures, "Spider-Man-2.jpg");
			array_push($pictures, "4:30 pm");
			array_push($pictures, "6:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "IncredibleHulk.jpg");
			array_push($pictures, "7:00 pm");
			array_push($pictures, "9:15 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "gijoeriseofcobra.jpg");
			array_push($pictures, "3:45 pm");
			array_push($pictures, "4:15 pm");
			array_push($parameters, $pictures);
			break;
		case "Lake City":
			array_push($pictures, "The-Avengers.jpg");
			array_push($pictures, "9:30 pm");
			array_push($pictures, "9:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "xmen_first_class.jpg");
			array_push($pictures, "6:00 pm");
			array_push($pictures, "8:15 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "ironman.jpg");
			array_push($pictures, "8:45 pm");
			array_push($pictures, "10:15 pm");
			array_push($parameters, $pictures);
			break;
		case "Rajaji Nagar":
			array_push($pictures, "fantastic_four.jpg");
			array_push($pictures, "9:30 pm");
			array_push($pictures, "11:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "wolverine.jpg");
			array_push($pictures, "8:00 pm");
			array_push($pictures, "9:15 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "Thor.jpg");
			array_push($pictures, "6:45 pm");
			array_push($pictures, "10:15 pm");
			array_push($parameters, $pictures);
			break;
		case "Harrington Road":
			array_push($pictures, "The-Avengers.jpg");
			array_push($pictures, "10:30 pm");
			array_push($pictures, "10:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "xmen_first_class.jpg");
			array_push($pictures, "9:00 pm");
			array_push($pictures, "10:15 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "ironman.jpg");
			array_push($pictures, "8:45 pm");
			array_push($pictures, "11:15 pm");
			array_push($parameters, $pictures);
			break;
		case "Boat Club":
			array_push($pictures, "gijoeriseofcobra.jpg");
			array_push($pictures, "8:30 pm");
			array_push($pictures, "8:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "spider_man3.jpg");
			array_push($pictures, "10:00 pm");
			array_push($pictures, "11:15 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "IncredibleHulk.jpg");
			array_push($pictures, "8:45 pm");
			array_push($pictures, "9:15 pm");
			array_push($parameters, $pictures);
			break;
		case "Chetpet":
			array_push($pictures, "Thor.jpg");
			array_push($pictures, "7:30 pm");
			array_push($pictures, "8:45 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "fantastic_four.jpg");
			array_push($pictures, "5:00 pm");
			array_push($pictures, "6:15 pm");
			array_push($parameters, $pictures);
			$pictures = array();
			array_push($pictures, "The-Avengers.jpg");
			array_push($pictures, "10:45 pm");
			array_push($pictures, "11:15 pm");
			array_push($parameters, $pictures);
			break;
	}
}
?>