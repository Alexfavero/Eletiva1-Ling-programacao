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
            $mes = $_POST['mes'];

            switch ($mes) {
                case 1:
                    echo "JANEIRO";
                    break;
                case 2:
                    echo "FEVEREIRO";
                    break;
                case 3:
                    echo "MARÇO";
                    break;
                case 4:
                    echo "ABRIL";
                    break;
                case 5:
                    echo "MAIO";
                    break;
                case 6:
                    echo "JUNHO";
                    break;
                case 7:
                    echo "JULHO";
                    break;
                case 8:
                    echo "AGOSTO";
                    break;
                case 9:
                    echo "SETEMBRO";
                    break;
                case 10:
                    echo "OUTUBRO";
                    break;
                case 11:
                    echo "NOVEMBRO";
                    break;
                case 12:
                    echo "DEZEMBRO";
                    break;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>