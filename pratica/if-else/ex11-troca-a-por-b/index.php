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
        $n1 = $_GET['n1'] ?? 5;
        $n2 = $_GET['n2'] ?? 3;
    ?>
    <main>
        <h1>Informe dois número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">Nº 1</label>
            <input type="number" name="n1" id="n1" value="<?= $n1 ?>">
            <label for="n2">Nº 2</label>
            <input type="number" name="n2" id="n2" value="<?= $n2 ?>">
            <button type="submit">Trocar números</button>
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php 
                $aux = $n1;

                $n1 = $n2;
                $n2 = $aux;

                echo "Valor da N1: $n1<br>Valor de N2: $n2";
            ?>
        </p>
    </section>
</body>
</html>