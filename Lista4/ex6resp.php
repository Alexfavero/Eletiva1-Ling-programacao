<?php

declare(strict_types=1); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <h1>Exercicio 6 Resposta</h1>

    <?php

    function arredondar(float $numero): void
    {
        if (is_float($numero)) {
            echo "O número $numero arredondado é " . round($numero);
        } else {
            echo "Retorne um número de ponto flutuante (decimal)";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $numero = floatval($_POST['numero']);
            arredondar($numero);
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>