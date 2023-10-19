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
        $cf = $_GET['cf'] ?? 0;
        $cp = $_GET['cp'] ?? 0;
    ?>
    <main>
        <h1>Probabilidade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="cf">Casos Favoráveis</label>
            <input type="number" name="cf" id="cf" value="<?= $cf ?>" step="0.01">
            <label for="cp">Casos Possíveis</label>
            <input type="number" name="cp" id="cp" value="<?= $cp ?>" step="0.01">
            <input type="submit" value="Calcular Probabilidade">
        </form>
    </main>
    <section>
        <?php 
            $div = $cf / $cp;
            $resultado = $cf / $cp * 100;
        ?>
        <h2>Resultado</h2>

        <p>(<?= $cf ?> / <?= $cp ?>) = <?= number_format($div, 2, ',', '.') ?> x 100 = <?= number_format($resultado, 2, ',', '.'); ?>%</p>
    </section>
</body>
</html>