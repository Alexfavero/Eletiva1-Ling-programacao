<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Resposta exercicio 5</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $media = ($nota1 + $nota2 + $nota3) / 3;

            echo "O valor da média é : " . number_format($media, 2);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>