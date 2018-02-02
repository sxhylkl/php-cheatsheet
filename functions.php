<?php
    //PART 6
    # FUNCTION - Block of code that can be repeatedly called

    /*
        Camel Case - myFunction()- used in here
        Lower Case - my_function()
        Pascal Case - MyFunction()s
    */
    // Create simple function
    function simpleFunction() {
        echo 'Hello World!';
    }

    //Run simple function
    // simpleFunction();

    // Function with Params
    function sayHello($name = 'World') { //use default value of World
        echo "Hello $name <br>";
    }

    // sayHello('Joe');
    // sayHello('Bob');
    // sayHello('Tim');

    // Return value
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    //  echo addNumbers(2,3);

    // By Reference

    $myNum = 10;

    function addFive($num) {
        $num += 5;
    }

    function addTen(&$num) { //pasing by reference
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";
    addTen($myNum);
    echo "Value: $myNum<br>";
?>