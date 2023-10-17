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
        $te = $_GET['te'] ?? 50;
        $vb = $_GET['vb'] ?? 10;
        $vn = $_GET['vn'] ?? 20;
        $vv = $_GET['vv'] ?? 30;
    ?>
    <main>
        <h1>Informe os dados abaixo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="te">Total de Eleitores</label>
            <input type="number" name="te" id="te" value="<?= $te ?>">
            <label for="vb">Votos Brancos</label>
            <input type="number" name="vb" id="vb" value="<?= $vb ?>">
            <label for="vn">Votos Nulos</label>
            <input type="number" name="vn" id="vn" value="<?= $vn ?>">
            <label for="vv">Votos Válidos</label>
            <input type="number" name="vv" id="vv" value="<?= $vv ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $_pvb = $vb * 100 / $te;
            $_pvn = $vn * 100 / $te;
            $_pvv = $vv * 100 / $te;
            $tv = $vb + $vn + $vv;
            if ($tv <= $te) {
                ?>
                    <p>Votos Brancos: <?= $vb ?> Votos. A Porcentagem de Votos Brancos foi de: <?= number_format($_pvb, 2, ',', '.') ?>%</p>
                    <p>Votos Nulos: <?= $vn ?> Votos. A Porcentagem de Votos Nulos foi de: <?= number_format($_pvn, 2, ',', '.') ?>%</p>
                    <p>Votos Válidos: <?= $vv ?>. A Porcentagem de Votos Válidos foi de: <?= number_format($_pvv, 2, ',', '.') ?>%</p>
                    <p>Número Total de Eleitores <?= $te ?><br>Número total de Votos <?= $tv ?></p>
                <?php
            } else {
                ?>
                    <p>ERRO! Número de Votos excede o número de Eleitores.<br>Total de Votos <?= $tv ?><br>Total de Eleitores <?= $te ?></p>
                <?php
            }
        ?>
    </section>
</body>
</html>