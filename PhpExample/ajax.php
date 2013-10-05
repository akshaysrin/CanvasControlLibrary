<?php
    include 'CanvasControlLibrary.class.php';

    $ccl;
    $parameters = array();
    $movieIndexes = array();
    $theater = array();
    $movies = array();

    array_push($theater, "Phoenix Mills");
    array_push($movies, "Fantastic Four");
    array_push($movies, "Ferris Bueller's Day Off");
    array_push($movies, "Incredible Hulk");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Juhu");
    $movies = array();
    array_push($movies, "Iron Man");
    array_push($movies, "Point Break");
    array_push($movies, "Spider Man 2");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Nariman Point");
    $movies = array();
    array_push($movies, "Spider Man 4");
    array_push($movies, "Spider Man 3");
    array_push($movies, "The Avengers");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Chitrapur");
    $movies = array();
    array_push($movies, "Thor");
    array_push($movies, "Wolverine");
    array_push($movies, "X-Men First Class");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Khari Baoli");
    $movies = array();
    array_push($movies, "GI Joe Rise of Cobra");
    array_push($movies, "The Avengers");
    array_push($movies, "Wolverine");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Lakshmi Garden");
    $movies = array();
    array_push($movies, "Thor");
    array_push($movies, "Point Break");
    array_push($movies, "Iron Man");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Gandhi Nagar");
    $movies = array();
    array_push($movies, "Spider Man 2");
    array_push($movies, "Incredible Hulk");
    array_push($movies, "GI Joe Rise of Cobra");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Lake City");
    $movies = array();
    array_push($movies, "The Avengers");
    array_push($movies, "X-Men First Class");
    array_push($movies, "Iron Man");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Rajaji Nagar");
    $movies = array();
    array_push($movies, "Fantastic Four");
    array_push($movies, "Wolverine");
    array_push($movies, "Thor");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Harrington Road");
    $movies = array();
    array_push($movies, "The Avengers");
    array_push($movies, "X-Men First Class");
    array_push($movies, "Iron Man");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Boat Club");
    $movies = array();
    array_push($movies, "GI Joe Rise of Cobra");
    array_push($movies, "Spider Man 3");
    array_push($movies, "Incredible Hulk");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    $theater = array();
    array_push($theater, "Chetpet");
    $movies = array();
    array_push($movies, "Thor");
    array_push($movies, "Fantastic Four");
    array_push($movies, "The Avengers");
    array_push($theater, $movies);
    array_push($movieIndexes, $theater);
    
    $ccl = new CanvasControlLibrary();
    $ccl->InvokeServerSideFunction();
    $ccl->SendVars($parameters);

    function InitializeForm1($ccl, $canvasid, $windowid)
    {
        $selectCityComboBox = $ccl->getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea");
        $selectCityComboBox->Data = array();
        array_push($selectCityComboBox->Data, "Select a city");
        array_push($selectCityComboBox->Data, "Mumbai");
        array_push($selectCityComboBox->Data, "Delhi");
        array_push($selectCityComboBox->Data, "Bangalore");
        array_push($selectCityComboBox->Data, "Chennai");
        $ccl->getControlPropsByWindowID($canvasid, $selectCityComboBox->VScrollBarWindowID)->MaxItems = count($selectCityComboBox->Data);
    }

    function onSelectCityChanged($ccl, $canvasid, $windowid)
    {
        $selectCityComboBox = $ccl->getControlPropsByControlNameID("selectCityComboBoxComboBoxTextArea");
        $selectCinemaComboBox = $ccl->getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
        $selectCinemaComboBox->Data = array();
        $tmp = $selectCityComboBox->Data[intval($selectCityComboBox->SelectedID)]->__toString();
            if("Mumbai" == tmp) {
                array_push($selectCinemaComboBox, "Select a Theater");
                array_push($selectCinemaComboBox, "Juhu");
                array_push($selectCinemaComboBox, "Phoenix Mills");
                array_push($selectCinemaComboBox, "Nariman Point");
            }
            else if("Delhi" == tmp) {
                array_push($selectCinemaComboBox, "Select a Theater");
                array_push($selectCinemaComboBox, "Chitrapur");
                array_push($selectCinemaComboBox, "Khari Baoli");
                array_push($selectCinemaComboBox, "Lakshmi Garden");
                }
            else if("Bangalore" == tmp) {
                array_push($selectCinemaComboBox, "Select a Theater");
                array_push($selectCinemaComboBox, "Gandhi Nagar");
                array_push($selectCinemaComboBox, "Lake City");
                array_push($selectCinemaComboBox, "Rajaji Nagar");
                }
            else if("Chennai" == tmp) {
                array_push($selectCinemaComboBox, "Select a Theater");
                array_push($selectCinemaComboBox, "Harrington Road");
                array_push($selectCinemaComboBox, "Boat Club");
                array_push($selectCinemaComboBox, "Chetpet");
                }
            else {
                array_push($selectCinemaComboBox, "Select a city");
                }
        $ccl->getControlPropsByWindowID($canvasid, intval($selectCinemaComboBox->VScrollBarWindowID))->MaxItems = strval(count($selectCinemaComboBox->Data));
    }

    function DoPaymentForTickets($ccl, $canvasid, $windowid)
    {
        $buttonProps = $ccl->getControlPropsByWindowID($canvasid, intval($windowid));
        $lp = $ccl->getControlPropsByControlNameID($buttonProps->Tag);
        $textbox = $ccl->getControlPropsByControlNameID("numTicketsTextBox");
        $selectCinemaComboBox = $ccl->getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
        /*
        $matches = array();
        preg_match("\\d+", $buttonProps->Tag, &$matches);
        $movieIndex = intval($matches[1]);*/
        $movieIndex = 1;
        $movieName = "";
        foreach ($movieIndexes as $movieIndex2)
        {
            if ($movieIndex2[0] == $selectCinemaComboBox->Data[intval($selectCinemaComboBox->SelectedID)]->__toString())
            {
                $movieName = $movieIndex2[1][$movieIndex]->__toString();
            }
        }
        array_push($parameters, "The payment was successful.  You have " . $textbox->UserInputText . " tickets to see " . $movieName .
                " at " . $selectCinemaComboBox->Data[intval($selectCinemaComboBox->SelectedID)]->__toString() .
            " showing at time " . $lp->Text . ".");
    }

    function onSelectCinemaChanged($ccl, $canvasid, $windowid)
    {
        $selectCinemaComboBox = $ccl->getControlPropsByControlNameID("selectCinemaComboBoxComboBoxTextArea");
        $movies = array();
        $timings = array();
        $tmp = $selectCinemaComboBox->Data[intval($selectCinemaComboBox->SelectedID)]->__toString();
            if("Phoenix Mills" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "fantastic_four.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "ferrisbuellersdayoff.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "IncredibleHulk.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $$parameters = $movies;
                }
            else if("Juhu" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "ironman.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "pointbreak.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "Spider-Man-2.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Nariman Point" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "spider-man4.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "spider_man3.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "The-Avengers.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Chitrapur" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "thor.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "wolverine.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "xmen_first_class.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Khari Baoli" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "gijoeriseofcobra.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "The-Avengers.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "wolverine.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Lakshmi Garden" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "Thor.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "pointbreak.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "ironman.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Gandhi Nagar" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "Spider-Man-2.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "IncredibleHulk.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "gijoeriseofcobra.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Lake City" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "The-Avengers.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "xmen_first_class.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "ironman.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Rajaji Nagar" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "fantastic_four.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "wolverine.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "Thor.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Harrington Road" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "The-Avengers.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "xmen_first_class.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "ironman.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Boat Club" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "gijoeriseofcobra.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "spider_man3.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "IncredibleHulk.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
            else if("Chetpet" == tmp) {
                $movies = array();
                $timings = array();
                array_push($timings, "Thor.jpg");
                array_push($timings, "1:30 pm");
                array_push($timings, "5:45 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "fantastic_four.jpg");
                array_push($timings, "9:00 pm");
                array_push($timings, "11:30 pm");
                array_push($movies, $timings);
                $timings = array();
                array_push($timings, "The-Avengers.jpg");
                array_push($timings, "6:00 pm");
                array_push($timings, "8:30 pm");
                array_push($movies, $timings);
                $parameters = $movies;
                }
        $ccl->getControlPropsByWindowID($canvasid, $selectCinemaComboBox->VScrollBarWindowID)->MaxItems = strval(count($selectCinemaComboBox->Data));
    }

?>
