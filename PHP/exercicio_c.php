<?php
    function sum($num1, $num2){
        return $num1 + $num2;
    }
    function aboveTwenty($result){
        if ($result > 20){
            echo "Above 20, adding 8.<br>";
            return $result + 8;
        }else{
            echo "Below 20, subtracting 5.<br>";
            return $result - 5;
        }
    }

    if (isset($_GET['num1']) && isset($_GET['num2'])){
        $result = sum(htmlspecialchars($_GET['num1']), htmlspecialchars($_GET['num2']));
        echo "The sum of the numbers equals: $result. <br>";
        echo "The final result is: ". aboveTwenty($result). ".";
    }else{
        echo "You did a dodo";
    }
    
?>