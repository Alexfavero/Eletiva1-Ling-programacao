<?php

declare(strict_types=1); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>


    <h1>Exercicio 1 Resposta</h1>

    <?php





    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $a = array();
            $nome = $_POST['nome'];
            $tel = $_POST['tel'];
            for ($i = 0; $i < count($nome); $i++) {
                // Verificar se o nome ou telefone já existem no mapa
                if (array_key_exists($nome[$i], $a)) {
                    echo "<p>Erro: O nome " . strtoupper($nome[$i]) . " já foi adicionado.<p>";
                } elseif (in_array($tel[$i], $a)) {
                    echo "<p>Erro: O telefone " . $tel[$i] . " já foi adicionado.<p>";
                } else {
                    $a[$nome[$i]] = $tel[$i]; // Adicionar contato ao mapa
                }
            }

            ksort($a);

            foreach ($a as $nome => $tel) {
                echo "<p>Nome: " . strtoupper($nome) . " Tel: $tel<p>";
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