<?php
    $a = (int) readline("Enter a:");
    $b = (int) readline("Enter b:");
    echo "Numbers between $a and $b inclusive:";
    do{
        echo "$a ";
        $a++;
    }while($a <= $b);
    echo "\n";
?>
