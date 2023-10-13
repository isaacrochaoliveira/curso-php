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
        $t1 = $_GET['t1'] ?? 'Brazil';
        $t2 = $_GET['t2'] ?? 'Argentina';

        $g1 = $_GET['g1'] ?? 0;
        $g2 = $_GET['g2'] ?? 0;
    ?>
    <main>
        <h1>Partida de Futebol</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="t1">Nome do Primeiro Time</label>
            <input type="text" name="t1" id="t1" value="<?= $t1 ?>">
            <label for="t2">Nome do Segundo Time</label>
            <input type="text" name="t2" id="t2" value="<?= $t2 ?>">
            <label for="g1">Quantos gols o primeiro time fez?</label>
            <input type="number" name="g1" id="g1" value="<?= $g1 ?>">
            <label for="g2">Quantos gols o segundo time fez?</label>
            <input type="number" name="g2" id="g2" value="<?= $g2 ?>">
            <input type="submit" value="Terminar Partida">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            if ($g1 > $g2) {
                $dif = $g1 - $g2;
            } else {
                if ($g1 == $g2) {
                    $dif = 0;
                } else {
                    $dif = $g2 - $g1;
                }
            }
            if ($dif >= 4) {
                $sit = "Uma Goleada!";
            } else {
                if (($dif < 4) && ($dif >= 1)) {
                    $sit = "Partida Normal!";
                } else {
                    $sit = "Um Empate!";
                }
            }
        ?>
        <p>A Diferença entre os gols entre <?= $t1 ?> x <?= $t2 ?> foi de: <?= $dif ?></p>
        <p>Essa Diferença caracteriza <?= $sit ?></p>
    </section>
</body>
</html>