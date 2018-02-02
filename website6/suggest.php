<?php
    // People Array
    $people[] = "Steve";
    $people[] = "John";
    $people[] = "Kathy";
    $people[] = "Evan";
    $people[] = "Anthony";
    $people[] = "Tom";
    $people[] = "Winadi Wiratama";
    $people[] = "Ronda";
    $people[] = "Rachel";
    $people[] = "Jose";
    $people[] = "Brad";
    $people[] = "Winadi";

    // Get Query String
    $q = $_REQUEST['q']; //Biar POST juga bisa

    $suggestion = "";
    // Get Suggestions
    if($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);
        foreach($people as $person) {
            if(stristr($q, substr($person,0,$len))) {
                if($suggestion === "") {
                    $suggestion = $person;
                } else {
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>