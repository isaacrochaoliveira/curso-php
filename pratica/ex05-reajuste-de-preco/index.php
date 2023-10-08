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
        $p = $_GET['preco'] ?? 1500;

        $formato = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

    ?>
    <main>
        <h1>Informe um preço</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.001" value="<?= $p ?>">
            <input type="submit" value="Calcular Aumento">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php
                $rea = $p + ($p * 5 / 100);
                echo "O Valor ". numfmt_format_currency($formato, $p, 'BRL') . " com 5% de aumento ficará " . numfmt_format_currency($formato, $rea, 'BRL');
            ?>
        </p>
    </section>
</body>
</html>