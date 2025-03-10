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

    function verificarData(int $dia, int $mes, int $ano): bool
    {
        $valid = checkdate($mes, $dia, $ano);

        if ($valid === true) {
            return true;
        } else {
            echo "a data $dia / $mes / $ano é INVÁLIDA<br>";
            return false;
        }
    }



    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $dia1 = $_POST['dia1'];
            $mes1 = $_POST['mes1'];
            $ano1 = $_POST['ano1'];

            $dia2 = $_POST['dia2'];
            $mes2 = $_POST['mes2'];
            $ano2 = $_POST['ano2'];

            $ver1 = verificarData(intval($dia1), intval($mes1), intval($ano1));
            $ver2 = verificarData(intval($dia2), intval($mes2), intval($ano2));

            if ($ver1 && $ver2) {
                $data1 = DateTime::createFromFormat('d/m/Y', "$dia1/$mes1/$ano1");
                $data2 = DateTime::createFromFormat('d/m/Y', "$dia2/$mes2/$ano2");

                $diferenca = $data1->diff($data2);

                echo "A diferença entre as duas datas é de " . $diferenca->days . " dias.<br>";
            }
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>