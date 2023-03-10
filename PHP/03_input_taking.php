<?php
    $num = (int) readline("Enter a number: ");
    $str = readline("Enter a string: ");
    echo "Number is:$num and String is:$str\n";

    echo "Input array of Tokens: ";
    $arr = explode(' ',readline());
    print_r($arr);
    
    echo "Using fscanf(), Enter a and b: ";
    fscanf(STDIN,"%d %d",$a,$b);
    printf("a = $a and b = $b\n");

    echo "Using readline(), Enter a and b: ";
    list($a,$b) = explode(' ',readline());
    printf("a = $a and b = $b\n");
?>
