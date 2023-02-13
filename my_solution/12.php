<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<?php
    function randomPassword($length) {
        $passwordSets = array();
        $passwordSets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
        $passwordSets[] = 'abcdefghjkmnpqrstuvwxyz';
        $passwordSets[] = '0123456789';
        $passwordSets[]  = '~!@#$%^&*(){}[],./?';

        $password = '';

        foreach ($passwordSets as $passwordSet) {
            $password .= $passwordSet[array_rand(str_split($passwordSet))];
        }

        while(strlen($password) < $length) {
            $randomSet = $passwordSets[array_rand($passwordSets)];
            $password .= $randomSet[array_rand(str_split($randomSet))]; 
        }
        echo str_shuffle($password);
    }
    randomPassword(readline("Enter password length: "));
?>