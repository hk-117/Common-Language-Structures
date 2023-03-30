<?php
    $testFile = fopen("file.txt","w");
    $input = "Zubayer Islam\n";
    fwrite($testFile,$input);
    fclose($testFile);

    $testFile = fopen("file.txt","a");
    $input = "CUET\n";
    fwrite($testFile,$input);
    fclose($testFile);
    
    $testFile = file("file.txt");
    foreach ( $testFile as $line){
        echo $line;
    }
?>
