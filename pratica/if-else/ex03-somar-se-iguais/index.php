<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>São Iguais?</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $a = $_GET['a'] ?? 0;
        $b = $_GET['b'] ?? 1;
    ?>
    <main>
        <h1>São Iguais?</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="a">Informe o valor de A:</label>
            <input type="number" name="a" id="a" value="<?= $a ?>">
            <label for="b">Informe o valor de B:</label>
            <input type="number" name="b" id="b" value="<?= $b ?>">
            <input type="submit" value="OK">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php 
                if ($a == $b) {
                    echo "A e B são Iguais, portanto $a + $b = ". $a + $b;
                } else {
                    echo "A e B são diferentes, portando $a x $b = ". $a * $b;
                }
            ?>
        </p>
    </section>
</body>
</html>