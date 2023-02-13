<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
 <?php
    $numbers = explode(' ', readLine("Enter space-separated numbers:"));
    $sum = 0;
    $i =0;
    while ($i<count($numbers)){
        $sum += $numbers[$i];
        $i++;
    }
    echo "The sum of the array of numbers is " . $sum;
?>