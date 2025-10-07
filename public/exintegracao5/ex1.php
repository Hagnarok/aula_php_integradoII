<?php
    $notas = [
        "Matemática" => 10,
        "Português" => 7.4,
        "Geografia" => 6,
        "Artes" => 4
    ];

    foreach($notas as $mate => $nota){
        if($nota <= 6){
            echo "Aluno foi REPROVADO em " . $mate . " e tirou ". $nota . "<br>";
        };
        if($nota > 6){
            echo "Aluno foi APROVADO em " . $mate . " e tirou ". $nota . "<br>";
        };        
    };

?>
