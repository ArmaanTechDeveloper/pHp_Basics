<?php

    // Operators in PHP

    /*
        1 - Assignment operators
        2 - Arithmetic operators
        3 - logical operators
        4 - Comparison operators
    */

    $numOne = 4; $numTwo = 5; // <-- These are assignment operators

    // Arithmetic operators

    echo "For a + b The result is ".($numOne + $numTwo);
    echo "<br>";
    echo "For a - b The result is ".($numOne - $numTwo);
    echo "<br>";
    echo "For a / b The result is ".($numOne / $numTwo);
    echo "<br>";
    echo "For a * b The result is ".($numOne * $numTwo);
    echo "<br>";
    echo "For a % b The result is ".($numOne % $numTwo);
    echo "<br>";


    // Comparison operator
    $x= 9; $y = 9;
    echo "For x == y"."The value is ";
    echo var_dump($x == $y);
    echo "<br>";
    echo " for x<>y The value is ";
    echo var_dump($x <> $y); // this checks the not equal to


    // logical operators
    /*
        and or operators are logical operators
        you can write it as - "and" and "or" operator directly 

    */
?>
