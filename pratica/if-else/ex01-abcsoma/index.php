<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $a = $_GET['a'] ?? 0;
        $b = $_GET['b'] ?? 0;
        $c = $_GET['c'] ?? 0;
    ?>
    <main>
        <h1>Informe A, B, C</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="a">A:</label>
            <input type="number" name="a" id="a" min="0" value="<?= $a ?>">
            <label for="b">B:</label>
            <input type="number" name="b" id="b" min="0" value="<?= $b ?>">
            <label for="c">C:</label>
            <input type="number" name="c" id="c" min="0" value="<?= $c ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php
                $soma = $a + $b;
                if ($soma > $c) {
                    echo "A soma entre $a + $b = $soma, que é maior que o 3º valor informado, o qual foi $c";
                } else {
                    echo "A soma entre $a + $b = $soma, que é menor que o 3º valor informado, o qual foi $c";
                }
            ?>
        </p>
    </section>
</body>
</html>