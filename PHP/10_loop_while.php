<?php
    $a = (int) readline("Enter a:");
    $b = (int) readline("Enter b:");
    echo "Numbers between $a and $b inclusive:";
    while($a <= $b){
        echo "$a ";
        $a++;
    }
    echo "\n";
?>
