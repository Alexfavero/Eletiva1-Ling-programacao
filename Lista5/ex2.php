<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exercicio 2</h1>
    <form action="ex2resp.php" method="post">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <h2><?= $i + 1 ?>º Aluno</h2>
            <div class="row">
                <div class="mb-3 col-3">
                    <label for="nome<?= $i + 1 ?>" class="form-label">Nome:</label>
                    <input type="text" id="nome<?= $i + 1 ?>" name="nome[]" class="form-control" required="">
                </div>
                <div class="mb-3 col-2">
                    <label for="nota1<?= $i + 1 ?>" class="form-label">Nota:</label>
                    <input type="number" id="nota1<?= $i + 1 ?>" name="nota1[]" class="form-control" min="0" max="10" required="">
                </div>
                <div class="mb-3 col-2">
                    <label for="nota2<?= $i + 1 ?>" class="form-label">Nota:</label>
                    <input type="number" id="nota2<?= $i + 1 ?>" name="nota2[]" class="form-control" min="0" max="10" required="">
                </div>
                <div class="mb-3 col-2">
                    <label for="nota3<?= $i + 1 ?>" class="form-label">Nota:</label>
                    <input type="number" id="nota3<?= $i + 1 ?>" name="nota3[]" class="form-control" min="0" max="10" required="">
                </div>
            </div>

        <?php endfor; ?>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>