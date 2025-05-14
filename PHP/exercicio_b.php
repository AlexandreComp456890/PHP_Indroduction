<?php
    function sortNumbers($num1, $num2, $num3){
        $numArray = array($num1, $num2, $num3);
        rsort($numArray);  
        return $numArray;
    }
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
        $numArray = sortNumbers($_GET['num1'], $_GET['num2'], $_GET['num3']);
        $con = 0;
        foreach ($numArray as $num){
            echo ++$con."º ".$num."<br>";
        }
    }else{
        echo "Fudeu";
    }
?>