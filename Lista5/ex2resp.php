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
            $a = array();
            $nome = $_POST['nome'];
            $nota1 =  $_POST['nota1'];
            $nota2 =  $_POST['nota2'];
            $nota3 =  $_POST['nota3'];

            for ($i = 0; $i < count($nome); $i++) {
                $media = ((float)$nota1[$i] + (float) $nota2[$i] + (float)$nota3[$i]) / 3;
                $a[$nome[$i]] = $media;
            }

            arsort($a);

            foreach ($a as $nome => $media) {
                echo "<p>Nome: " . strtoupper($nome) . " Média: " . number_format($media, 2, ',', '.' . "</p>   ");
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