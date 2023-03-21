<?php
    function normalDefaultVal($variable, $increaseBy=10){
        return $variable+$increaseBy;
    }

    function SwapByRefs(&$a, &$b){
        $tmp = $a;
        $a = $b;
        $b = $tmp;
    }

    echo normalDefaultVal(20)."\n";
    echo normalDefaultVal(20,15)."\n";

    $ar = array(10,20);
    print_r($ar);
    SwapByRefs($ar[0],$ar[1]);
    print_r($ar);
?>
