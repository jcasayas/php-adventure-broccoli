<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
 <?php 
    $n = readline("Enter Integers: ");
    $sum = 0;
    $i = 0;
    while ($i < strlen($n)) {
            $sum += $n[$i];
            $i++;
        }
    echo "The sum of the digits of " . $n . " is: " . $sum;
?>