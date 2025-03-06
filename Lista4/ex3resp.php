<?php

declare(strict_types=1); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>

    <form method="post" action="resposta.php">
        <h1>Exercicio 3 Resposta</h1>

        <?php

        function verificarContem(string $palavra1, string $palavra2): void
        {
            $contem = strpos($palavra1, $palavra2);

            if ($contem === false) {
                echo "A palavra $palavra2 NÃO esta dentro da palavra $palavra1";
            } else {
                echo "A palavra $palavra2 ESTA dentro da palavra $palavra1";
            }
        }


        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $palavra1 = $_POST['palavra1'];
                $palavra2 = $_POST['palavra2'];
                verificarContem(strtolower($palavra1), strtolower($palavra2));
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>