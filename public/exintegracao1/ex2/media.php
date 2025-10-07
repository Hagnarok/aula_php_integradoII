<?php
    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $calc = ($n1+$n2+$n3)/3;
    $status;
    if ($calc >= 7){
        $status = ("Aprovado");
    }
    else{
        $status = ("Reprovado");
    }
    
    echo "<h1> Olá, $nome sua média é $calc e você está $status !</h1>";
?>