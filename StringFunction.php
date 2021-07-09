<?php
    $name = "This is me";
    echo $name;
    echo "<br>";
    //prints the length of the string 
    echo strlen($name);
    echo "<br>";
    //counts the number of words in the string 
    echo str_word_count($name);
    echo "<br>";
    // Reverse the inputted string 
    echo strrev($name);
    echo "<br>";
    // Gives the position of the entered string by comparing
    echo strpos($name , "me");
    echo "<br>";
    // Replaces the word in the string 
    echo str_replace("me","he" , $name);
    echo "<br>";
    // Repeats the strin g
    echo str_repeat($name , 4);
    echo "<br>";
    // Remove the right spaces in the string
    echo rtrim("    This is a sentence      ");
    echo "<br>";
    // Remove the left spaces in the string 
    echo ltrim("     This is again a sentence    ");
    echo "<br>";
    
?>