<?php
    $a = (int) readline("Enter a:");
    $b = (int) readline("Enter b:");
    echo "Numbers between $a and $b inclusive:";
    for($i=$a;$i<=$b;$i++){
        echo "$i ";
    }
    echo "\n";
?>
