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
        $nasc = $_POST['nasc'] ?? 2000;
    ?>
    <main>
        <h1>Informe seu ano de nascimento</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nasc">Ano de Nascimento:</label>
            <input type="number" name="nasc" id="nasc" value="<?= $nasc ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php 
                $idade = Date('Y') - $nasc;
                $meses = $idade * 12;
                $dias = $meses * 30;

                echo "Até hoje você viveu <strong>$idade</strong> anos de vida!<br>";
                echo "Até hoje você viveu <strong>$meses</strong> meses de vida!<br>";
                echo "Até hoje você viveu <strong>$dias</strong> dias da sua vida!";
            ?>
        </p>
    </section>
</body>
</html>