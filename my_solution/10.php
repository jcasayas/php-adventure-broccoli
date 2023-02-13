<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
 <?php
    $numbers = explode(' ', readLine("Enter a series of numbers:"));
    $n = count($numbers);
    sort($numbers);
    if ($n % 2 != 0){
        $median = $numbers[$n / 2];
        echo $median;
    }
    else {
        $median = ($numbers[($n - 1) / 2] + $numbers[$n / 2]) / 2.0;
        echo $median;
    }
    
?>