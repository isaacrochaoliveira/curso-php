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
        $a = $_GET['a'] ?? 4;
        $b = $_GET['b'] ?? 2;
        $c = $_GET['c'] ?? 6;

        $aux = 0;
    ?>
    <main>
        <h1>Informe-me três valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="a">A:</label>
            <input type="number" name="a" id="a" value="<?= $a ?>">
            <label for="b">B:</label>
            <input type="number" name="b" id="b" value="<?= $b ?>">
            <label for="c">C:</label>
            <input type="number" name="c" id="c" value="<?= $c ?>">
            <input type="submit" value="Em Ordem Decresente">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            if (($a > $b) && ($a > $c)) {
                if ($b < $c) {
                    $aux = $c;
                    $c = $b;
                    $b = $aux;
                }
            } else {
                if (($a < $b) && ($a > $c)) {
                    $aux = $a;
                    $a = $c;
                    $c = $aux;
                }
            }
            if (($a < $b) && ($a < $c)) {
                $aux = $a;
                $a = $b;
                $b = $aux;

                $aux = $b;
                $b = $c;
                $c = $aux;
            } else {
                if (($a < $b) && ($c < $a)) {
                    $aux = $a;
                    $a = $c;
                    $c = $aux;
                }
            }
            if (($b < $a) && ($b < $c)) {
                if ($a < $c) {
                    $aux = $a;
                    $a = $c;
                    $c = $aux;

                    $aux = $b;
                    $b = $c;
                    $c = $aux;
                }
            }
            echo "Apresentando os números em forma decresente:";

            echo "<p>$a...$b...$c</p>";
        ?>
    </section>
</body>
</html>