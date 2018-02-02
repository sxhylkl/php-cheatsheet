<?php
    // PART 3
    // Single line comment
    # Single line comment
    /* 
        Multi line 
        comment
    */

    #VARIABLES
    /*
        - Prefix $
        - Start with a letter or an underscore
        - Only letters, numbers, and underscores
    */
    #DATA TYPES
    /*
        String
        Integers
        floats
        Booleans
        Objects
        NULL
        Resource
    */
    $Output = 'Hello World!';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 ='Hello';
    $string2 = 'World';
    $greeting = $string1 .' '. $string2.'!'; //String Concatenate
    $greeting2 = "$string1 $string2"; // Another way to concatenate

    $string3 = "They\"re Here";

    $float1 = 4.4;
    $bool1 = true;

    define('GREETING', 'Hello Everyone'); // Constant, case sensitive
    define('GREETING2', 'Hello Everyone', true ); // Constant, not case sensitive

    echo GREETING;
?>