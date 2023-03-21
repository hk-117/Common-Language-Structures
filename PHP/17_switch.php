<?php
    printf("1.Red\n2.Green\n3.Blue\nChoose Your color:");
    $choice = (int) readline();
    switch($choice){
        case 1:
            echo "Red is selected\n";
            break;
        case 2:
            echo "Green is selected\n";
            break;
        case 3:
            echo "Blue is selected\n";
            break;
        default:
            echo "Nothing is selected\n";
    }
?>
