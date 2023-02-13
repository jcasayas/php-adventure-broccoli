<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
 <?php
    $string = readLine("Enter a String:");
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I","O", "U");
    $novowels_string = str_replace($vowels, "", $string);
    echo $novowels_string;
?>