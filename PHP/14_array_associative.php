<?php
    $Ages = array("Rahim"=>35,"Karim"=>37);
    print_r($Ages);
    $Ages['Rishad']=40;
    print_r($Ages);
    if(array_key_exists('Rishad',$Ages)){
        echo "Rishad's age is ".$Ages['Rishad']."\n";
    }
    else{
        echo "No key exists as Rishad\n";
    }
?>
