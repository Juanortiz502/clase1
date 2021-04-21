<?php
    getcwd()."/counter.txt";
    $fp = fopen( getcwd()."/counter.txt", "w+"); 
    $file = getcwd()."/counter.txt";
    $texto = "Hola que tal";
    $fp = fopen($file, "w");
    fwrite($fp, $texto);
    $datos = file_get_contents($file);
    echo $datos;
    fclose($fp);
?>