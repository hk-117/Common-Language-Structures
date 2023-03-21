<?php
    for($i=0 ; $i<50; $i++){
        if($i % 2){
            continue;
        }
        else{
            echo "$i\n";
        }
        if($i == 23 || $i==46){
            break;
        }
    }
?>
