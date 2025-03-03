<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Resposta exercicio 3</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $dif = $num1 - $num2;

            if ($num1 == $num2) {
                echo "$num1. Os números inserido são iguais";
            } elseif ($num1 > $num2) {
                for ($cont = 0; $cont <= $num1 - $num2; $cont++)
                    echo $num2 + $cont . " ";
            } elseif ($num2 > $num1) {
                for ($cont = 0; $cont <= $num2 - $num1; $cont++)
                    echo $num1 + $cont . " ";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>