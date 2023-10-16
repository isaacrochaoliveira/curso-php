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
        $j1 = "Ana";
        $j2 = "João";
        $j3 = "Maria";
        $j4 = "Paula";

        // Random
        $random_1 = mt_rand(1, 20);
        $random_2 = mt_rand(1, 20);
        $random_3 = mt_rand(1, 20);
        $random_4 = mt_rand(1, 20);

    ?>
    <main>
        <h1>Jogo dos Dados</h1>
        <p>A <?= $j1 ?> Tirou <?= $random_1 ?></p>
        <p>O <?= $j2 ?> Tirou <?= $random_2 ?></p>
        <p>A <?= $j3 ?> Tirou <?= $random_3 ?></p>
        <p>A <?= $j4 ?> Tirou <?= $random_4 ?></p>
    </main>
    <section>
        <h2>Placar Final</h2>
        <p>Em 1º Lugar: </p>
        <p>Em 2º Lugar: </p>
        <p>Em 3º Lugar: </p>
        <p>Em 4º Lugar: </p>
    </section>
</body>
</html>