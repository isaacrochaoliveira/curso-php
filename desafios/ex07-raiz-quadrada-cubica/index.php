<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada e Cúbica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_POST['num'] ?? 64;
    ?>
    <header>
        <h1>Informe um número</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?= $num ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $sqrt = sqrt($num);
            $cub = $num ** (1/3);

            echo "Analisando o <strong>número $num, temos</strong>:";
            echo "<ul><li>A sua raiz quadrada é ". number_format($sqrt, 3, ',', '.') ."</li>";
            echo "<li>A sua raiz cúbica é ". number_format($cub, 3, ',', '.') ."</li>";
        ?>
    </section>

</body>
</html>