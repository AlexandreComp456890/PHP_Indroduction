<?php
    function algorithm(){
        $chico = 1.50;
        $juca = 1.10;
        $ano = 0;

        while ($chico > $juca){
            $chico += 0.02;
            $juca += 0.03;
            $ano++;
        }
        echo "Altura do Chico: $chico<br>Altura do Juca: $juca<br>";
        return $ano;
    }

    echo "Anos para que Juca ultrapasse a altura de Chico: ". algorithm()." anos";
?>