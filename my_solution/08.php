<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->
 <?php
    function numOfWords($string) {
          $string = preg_replace('/\s+/', ' ', trim($string));
          $count = explode(" ", $string);
          echo count($count);
    }
    numOfWords(readline("Enter a string:"));
?>