<?php
    //PART 4
    #Array - Variable that holds multiple values
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed
    $people = array('Kevin','Jeremy','Sara');
    $ids = array(23,55,12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy'; //use index
    $cars[] = 'BMW'; //empty brackets, addedd to last one

    //echo count($cars);
    // print_r($cars); //print entire array
    // var_dump($cars); //all you need to know about array
    //echo $cars[4];
    //echo $people[1];
    //echo $ids[2];

    // Associative arrays
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);

    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    // echo $people['Brad']; 
    // echo $ids[22]; 
    $people['Jill'] = 42;
    // echo $people['Jill'];
    // print_r($people); 
    // var_dump($people);

    // Multi-dimensional
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12)
    );

    echo $cars[1][2];
?>