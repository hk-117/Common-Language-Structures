<?php
    do{
        $a = (int) readline("Enter a: ");
        $b = (int) readline("Enter b: ");
        echo "1.Add\n2.Subtract\n3.Multiply\n4.Divide\n5.Modulus\n6.Exit\n";
        $c = (int) readline("Enter choice: ");
        switch($c){
            case 1:
                $res = $a+$b;
                break;
            case 2:
                $res = $a-$b;
                break;
            case 3:
                $res = $a*$b;
                break;
            case 4:
                $res = $a/$b;
                break;
            case 5:
                $res = $a%$b;
                break;
            case 6:
                echo "Exiting...\n";
                exit();
            default:
                $res = "Invalid";
                echo "Try again!\n";
        }
        if($res !== "Invalid")
            echo "Operation result: $res\n";

    }while($c!=6);
?>
