<?php
    $seq = array(2,1,3,4,10);

    foreach( $seq as $val ){
        echo "$val\n";
    }

    $Ages = array("Rahim"=>10, "Karim"=>20, "Latim"=>21);

    foreach( $Ages as $val){
        echo "$val\n";
    }

    foreach( $Ages as $key=>$val){
        echo "$key => $val\n";
    }
?>
