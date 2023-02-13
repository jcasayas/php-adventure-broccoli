<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php
    $numbers = explode(' ', readLine("Enter a series of numbers:"));
    $sum = 0; $i = 0;
    while ($i < count($numbers)){
        $sum += $numbers[$i];
        $i++;
    }
    $average = $sum / count($numbers) ;
    echo $average . " is the average of the numbers."
?>