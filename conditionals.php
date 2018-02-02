<?php
    //PART 7
    # CONDITIONALS

    /*
        ==
        ===
        <
        >
        <=
        >=
        != not equals to
        !== not identical
    */

    // $num  = 6;

    // if($num == 5) 
    // {
    //     echo '5 passed';
    // } 
    // elseif($num == 6) 
    // {
    //     echo '6 passed';
    // }
    // else 
    // {
    //     echo 'did not passed';
    // }

    # NESTING IF
     $num = 6;
    /*   if($num > 4) {
        if($num < 10) {
            echo "$num passed";
        }
    } */

    /*
        LOGICAL OPERATORS
        AND &&
        OR ||
        XOR, one has to be true, but not both
    */

    /* if($num > 4 XOR $num < 10) 
    {
        echo "$num passed";
    } */

    $favColor = 'red';

    switch($favColor) {
        case 'red':
            echo 'Your favorite color is red';
        break;
        case 'green':
            echo 'Your favorite color is red';
        break;
        case 'blue':
            echo 'Your favorite color is red';
        break;
        default:
            echo 'Your favorite color is something else';
        break;
    }

?>