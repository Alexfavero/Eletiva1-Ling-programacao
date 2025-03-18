<?php

declare(strict_types=1); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Exercicio 5 Resposta</h1>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $a = array();
            $nome = $_POST['nome'];
            $quantidade = $_POST['qtd'];

            function verificarEstoque($quantidade)
            {
                if ($quantidade < 5)
                    echo "Estoque Baixo!!!!";
            };

            for ($i = 0; $i < count($nome); $i++) {
                $a[$nome[$i]] = $quantidade[$i];
            }

            ksort($a);

            foreach ($a as $nome => $quantidade) {
                verificarEstoque($quantidade);
                echo "<p>Nome: " . strtoupper($nome)  . " - Quantidade: $quantidade </p>";
            }
        } catch (Exception $e) {
            echo "<p>Erro: " . $e->getMessage() . "</p>";
        }
    }
    ?>