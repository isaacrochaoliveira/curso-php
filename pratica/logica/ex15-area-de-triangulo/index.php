<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática PHP</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $b = $_GET['b'] ?? 10;
        $a = $_GET['a'] ?? 10; 
    ?>
    <main>
        <h1>Informe os dados Abaixo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="b">Base</label>
            <input type="number" name="b" id="b" step="0.01" value="<?= $b ?>">
            <label for="a">Altura</label>
            <input type="number" name="a" id="a" step="0.01" value="<?= $a ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $area = $b * $a;
            $per = 2 * ($b + $a);
        ?>
        <p>A área desse reatângulo é <?= number_format($area, 2, ',', '.') ?></p>
        <p>E o seu perímetro <?= number_format($per, 2, ',', '.') ?></p>
    </section>
</body>
</html>