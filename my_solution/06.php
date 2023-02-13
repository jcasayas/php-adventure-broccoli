<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
 <?php
    function triangularNumber($numbers) {
        return $numbers * ($numbers + 1) / 2;
    }
    $n =  readline("Enter number: ");
    for ($i = 1; $i <= $n; $i++) {
        echo triangularNumber($i) . "\n";
    }

?>