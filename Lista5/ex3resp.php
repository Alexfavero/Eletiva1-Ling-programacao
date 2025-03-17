<?php

declare(strict_types=1); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Exercicio 2 Resposta</h1>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $produtos = [];
            $codigo = $_POST['codigo'];
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];

            function aplicarDesconto(float $preco): float
            {
                if ($preco > 100.00) {
                    $preco -= $preco * 0.10;
                }
                return $preco;
            }

            for ($i = 0; $i < count($codigo); $i++) {
                $cod = $codigo[$i];
                $nm = $nome[$i];
                $pr = (float)$preco[$i];

                if (array_key_exists($cod, $produtos)) {
                    echo "<p>Erro: O Código $cod já foi adicionado.</p>";
                } else {
                    $produtos[$cod] = [
                        'nome' => $nm,
                        'preco' => aplicarDesconto($pr),
                    ];
                }
            }

            uasort($produtos, function ($a, $b) {
                return strcmp($a['nome'], $b['nome']);
            });

            foreach ($produtos as $codigo => $dados) {
                echo "<p>Código: $codigo - Nome: " . strtoupper($dados['nome']) . " - Preço: R$ " . number_format($dados['preco'], 2, ',', '.') . "</p>";
            }
        } catch (Exception $e) {
            echo "<p>Erro: " . $e->getMessage() . "</p>";
        }
    }
    ?>