<?php
    function celsius($f){
        $c = (5*($f-32)/9);
        echo "A temperatura em graus Farenheit $f é equivale a $c em graus Celsius";
    }
    if (isset($_GET['tempF'])){
        celsius(htmlspecialchars($_GET['tempF']));
    }
?>