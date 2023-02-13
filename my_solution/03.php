<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php
    function howFrequent($string){
        $freq = array();
            for($i = 0; $i <strlen($string); $i++){
                array_push($freq, 1);
                for($j = $i+1; $j < strlen($string); $j++){
                    if($string[$i] == $string[$j]){
                        $freq[$i]++;
                        $string[$j] ='0';
                    }
                }
            }
        for($i = 0; $i < count($freq); $i++){
            if($string[$i] != ' ' && $string[$i] != '0'){
                echo($string[$i] . "-" . $freq[$i]) . "\n";
            }
        }
    }
    howFrequent(readLine("Enter a String:"));
?>