<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercicio 1</h1>
    <form method="post" action="ex1resp.php">

        <label for="num1" class="form-label">Número 1</label>
        <input type="number" id="num1" name="num[]" class="form-control" required="">

        <label for="num2" class="form-label">Número 2</label>
        <input type="number" id="num2" name="num[]" class="form-control" required="">

        <label for="num3" class="form-label">Número 3</label>
        <input type="number" id="num3" name="num[]" class="form-control" required="">

        <label for="num4" class="form-label">Número 4</label>
        <input type="number" id="num4" name="num[]" class="form-control" required="">

        <label for="num5" class="form-label">Número 5</label>
        <input type="number" id="num5" name="num[]" class="form-control" required="">

        <label for="num6" class="form-label">Número 6</label>
        <input type="number" id="num6" name="num[]" class="form-control" required="">

        <label for="num7" class="form-label">Número 7</label>
        <input type="number" id="num7" name="num[]" class="form-control" required="">


        <button type=" submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>