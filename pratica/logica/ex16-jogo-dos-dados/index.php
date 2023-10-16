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
        $names = ['Ana', 'Milena', 'Paula', 'Melissa'];
        $randoms = [mt_rand(1, 20), mt_rand(1, 20), mt_rand(1, 20), mt_rand(1, 20)];

        $winners = [];
        $numbers_winners = [];
    ?>
    <main>
        <h1>Jogo dos Dados</h1>
        <?php 
            for ($i = 0; $i < count($names); $i++) {
                echo "<p>A ". $names[$i] ." tirou " . $randoms[$i] . "</p>";
            }
        ?>
    </main>
    <section>
        <h2>Placar Final</h2>
        <?php 
            if () {
                
            }
        ?>
    </section>
</body>
</html>