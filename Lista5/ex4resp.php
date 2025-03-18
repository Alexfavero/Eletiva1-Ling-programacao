<?php

declare(strict_types=1); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Exercicio 4 Resposta</h1>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $a = array();
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];

            function calcImposto($preco)
            {
                $preco += (float) $preco * 0.15;
                return $preco;
            }

            for ($i = 0; $i < count($nome); $i++) {
                $a[$nome[$i]] = calcImposto($preco[$i]);
            }

            asort($a);

            foreach ($a as $nome => $preco) {
                echo "<p>Nome: " . strtoupper($nome)  . " - Preço: $preco R$</p>";
            }
        } catch (Exception $e) {
            echo "<p>Erro: " . $e->getMessage() . "</p>";
        }
    }
    ?>