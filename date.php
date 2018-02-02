<?php
//PART 8
// DATE
    // echo date('d'); //Day
    // echo date('m'); //Month
    // echo date('Y'); //Year
    // echo date('l'); //Day of the week

    // echo date('Y/m/d'); 
    // echo date('m-d-Y'); 

//TIME
    // echo date('h'); //Hour
    // echo date('i'); // Min
    // echo date('s'); // Seconds
    // echo date('a'); // AM or PM

    //SET TIME ZONE
     date_default_timezone_set('Asia/Jakarta');
    // echo date('h:i:sa');

    // $timestamp = mktime(10, 14, 54, 9, 10, 1981); // Make Time

    // echo $timestamp; 
    // echo date('m/d/Y h:i:sa',$timestamp); 
    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Months');

    //echo $timestamp2;
    echo date('m/d/Y h:i:sa', $timestamp5); 

    // http://php.net/manual/en/function.date.php
?>