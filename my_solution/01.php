<!-- 
    Write a program that takes a character as letter and outputs whether it is a vowel or a consonant.
-->
<?php
    $letter = readLine("Enter a Letter:");
    if (strtolower($letter) == 'a' || strtolower($letter) == 'e' || strtolower($letter) == 'i' || strtolower($letter) == 'o' || strtolower($letter) == 'u') {
        echo $letter . " is a vowel.";
    }
    else if(strlen($letter)>1){
        echo $letter . " consists of more than one letter. \n";
    }
    else if (is_numeric($letter)){
        echo $letter . " is a number, not a letter. \n";
    }
    else{
        echo $letter . " is a consonant.";
    }

?>