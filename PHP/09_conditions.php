<?php
    $value = (int) readline("Enter an integer number:");
    if($value > 0){
        echo "$value is greater than 0.\n";
    }
    else if($value < 0){
        echo "$value is less than 0.\n";
    }
    else{
        echo "It is 0.\n";
    }
?>
