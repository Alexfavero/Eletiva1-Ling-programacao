<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="ms-4">Exercicio 3</h1>
    <form class="ms-4" action="ex3resp.php" method="post">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <h2><?= $i + 1 ?>º Produto</h2>
            <div class="row">
                <div class="mb-3 col-3">
                    <label for="codigo<?= $i + 1 ?>" class="form-label">Código:</label>
                    <input type="number" id="codigo<?= $i + 1 ?>" name="codigo[]" class="form-control" required="">
                </div>
                <div class="mb-3 col-3">
                    <label for="nome<?= $i + 1 ?>" class="form-label">Nome:</label>
                    <input type="text" id="nome<?= $i + 1 ?>" name="nome[]" class="form-control" required="">
                </div>
                <div class="mb-3 col-3">
                    <label for="preco<?= $i + 1 ?>" class="form-label">Preço:</label>
                    <input type="number" id="preco<?= $i + 1 ?>" name="preco[]" step="0.01" class="form-control" required="">
                </div>
            </div>

        <?php endfor; ?>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>