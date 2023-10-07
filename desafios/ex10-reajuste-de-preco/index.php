<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        
        $preco = $_POST['preco'] ?? 1000;
        $reajuste = $_POST['reajuste'] ?? 10;
        
        $r = $preco + ($preco * $reajuste / 100);
        
        $formato = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <header>
        <h1>Reajustadpr de Preços</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="preco">Preço do Produto</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>" step="0.01">
            <label for="reajuste">Qual será o percentual do reajuste?</label>
            <input type="number" name="reajuste" id="reajuste" step="0.01" value="<?= $reajuste ?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 

            echo "O produto que custava " . numfmt_format_currency($formato, $preco, 'BRL') . ", com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($formato, $r, "BRL");
        ?>
    </section>
</body>
</html>