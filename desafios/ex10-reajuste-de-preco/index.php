<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_POST['preco'] ?? 1000;
        $reajuste = $_POST['reajuste'] ?? 10;
    ?>
    <header>
        <h1>Reajustadpr de Preços</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="preco">Preço do Produto</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>" step="0.01">
            <label for=""></label>
        </form>
    </main>
</body>
</html>