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
        $tab = $_GET['n'] ?? 5;
    ?>
    <main>
        <h1>Tabuada de um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n">Informe um número:</label>
            <input type="number" name="n" id="n" value="<?= $tab ?>">
            <input type="submit" value="Mostrar Tabuada">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $i = 1;
            while ($i <= 10) {
                $mult = $i * $tab;
                echo "$tab x $i = $mult<br>";
                $i += 1;
            }
        ?>
    </section>
</body>
</html>