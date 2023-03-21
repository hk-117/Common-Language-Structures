<?php
    function cmp($a,$b){
        if( $a==$b ) return 0;
        return ($a < $b)? -1:1;
    }
    
    $fruits = array("Mango","Banana","PineApple","Apple","Orange");
    print_r($fruits);
    echo "Total size of the array = ".count($fruits)."\n";

    array_push($fruits,"JackFruit");
    print_r($fruits);
    echo "Total size of the array = ".count($fruits)."\n";

    array_pop($fruits);
    print_r($fruits);
    echo "Total size of the array = ".count($fruits)."\n";

    $position = array_search("Mango",$fruits);
    if($position != ""){
        echo "Position = $position\n";
    }
    else{
        echo "Not found\n";
    }

    echo "Sorted Array: \n";
    usort($fruits,"cmp");
    print_r($fruits);
?>
