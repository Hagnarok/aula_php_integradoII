<?php
    echo "Multiplos de 5. <br>";
    $contador = 1;
    while($contador <= 50){
        $multi = $contador % 5;
        if ($multi === 0){
            echo"$contador <br>";
        };
        $contador++;
    };
?>