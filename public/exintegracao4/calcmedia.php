<?php
    $notas = [10,4,6,7,3];
    $soma = 0;
    $qnt_notas = count($notas); 
    
    foreach($notas as $nota){
        $soma += $nota; 
    }

    echo "A soma de suas notas é: " . $soma . "<br>";
    echo "A média de suas notas é: " . ($soma/$qnt_notas);

?>