<?php 
    include 'cabecalho.php';
    echo ' <img src="https://cdn.culturagenial.com/imagens/melhores-filmes-de-acao-og.jpg?class=ogImageWide" alt="a" height="240px" width="240px"> <p> </p>';
    include 'cadastro.html';

    $nome_filme = $_POST["nome_filme"];
    $genero_filme = $_POST["genero_filme"];
    $genero_filme = strtolower(trim($genero_filme));

    if($genero_filme === "terror"){
        echo "<p> Filme cadastrado: <strong> $nome_filme </strong> ($genero_filme) </p> <br>";
        echo '<p style="color: red;"> Atenção filme de TERROR cadastrado!</p>';
    }
    else if ($genero_filme === "comedia" || $genero_filme === "comédia"){
        echo "<p> Filme cadastrado: <strong> $nome_filme </strong> ($genero_filme) </p> <br>";
        echo '<p style="color: green;"> Atenção filme de COMÉDIA cadastrado!</p>';
    }
    else{
        echo "<p> Filme cadastrado: <strong> $nome_filme </strong> ($genero_filme) </p> <br>";
    }

    include 'rodape.php'; 
?>