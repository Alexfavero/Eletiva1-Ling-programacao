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

    function verificarData(int $dia, int $mes, int $ano): void
    {
        $valid = checkdate($mes, $dia, $ano);

        if ($valid === true) {
            echo "a data $dia / $mes / $ano é VÁLIDA";
        } else {
            echo "a data $dia / $mes / $ano é INVÁLIDA";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];

            verificarData(intval($dia), intval($mes), intval($ano));
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>