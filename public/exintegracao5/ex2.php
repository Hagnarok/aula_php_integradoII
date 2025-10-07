<?php
    $carrinho = [
        ["nome" => "Pão", "preco" => 3.50, "quantidade" => 2],
        ["nome" => "Picanha", "preco" => 120, "quantidade" => 1],
        ["nome" => "Cerveja", "preco" => 5.56, "quantidade" => 25]
    
    ];
    echo "Sua lista de compras: <br> <br>";
    foreach($carrinho as $produto){
        echo "Nome: ", $produto["nome"] . "<br>";
        echo "Preço: R$ ", number_format($produto["preco"],2) . "<br>";
        echo "Quantidade: ", $produto["quantidade"] . "<br> <br>";
          
    };
    $valor = 0;
    foreach($carrinho as $produto){
        $valor += $produto["preco"] * $produto["quantidade"];

        
          
    };
    echo "Total: R$ " . number_format($valor,2);

?>
