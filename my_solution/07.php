<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
 <?php
    $string = explode(' ', readLine("Enter strings:"));
    $longestWord = 0;
    for ($i = 0; $i < count($string); $i++){
        if (strlen($string[$i]) > strlen($longestWord)){
            $longestWord = $string[$i];
        }
    }
    echo $longestWord . " is the longest string in the array.";
?>