<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $n = $_GET['n'] ?? 2;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n">Número:</label>
            <input type="number" name="n" id="n" value="<?= $n ?>">
            <input type="submit" value="Verificar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php 
                if ($n % 2 == 0) {
                    echo "O Número $n é par!";
                } else {
                    echo "O Número $n é Ímpar!";
                }
            ?>
        </p>
    </section>
</body>
</html>