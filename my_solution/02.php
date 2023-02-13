<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php
    $string = readline("Enter a string: ");
    $reverse = strtolower($string) == strtolower(strrev($string));
    if ($reverse == $string) {
        echo "$string is a Palindrome";
    }
    else{
        echo "$string is not a Palindrome";
    }
?>