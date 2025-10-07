<?php
    echo "Sua lista de compras: <br>";
    $produtos = [
        ["Produto" => "Café", "Preco" => 40],
        ["Produto" => "Shampoo", "Preco" => 20],
        ["Produto" => "Picanha", "Preco" => 120],
        ["Produto" => "Coca", "Preco" => 12],
    ];
    $soma = 0;
    foreach($produtos as $produto){
        echo "Produto: " . $produto["Produto"] . " - Preço: R$" . $produto["Preco"] . "<br>";
        $soma += $produto["Preco"];
    }
    echo"<br> O total de sua compra ficou em R$: " .$soma;

?>