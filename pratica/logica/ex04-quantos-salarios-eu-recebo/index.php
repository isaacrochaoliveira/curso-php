<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $sm = $_GET['sm'] ?? 1293;
        $ss = $_GET['ss'] ?? 2000;
    
        $formato = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

        $ganha = intdiv($ss, $sm);
        $restante = $ss % $sm;
    ?>
    <main>
        <h1>Infome os dados abaixo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sm">Valor do Salário Minimo</label>
            <input type="number" name="sm" id="sm" step="0.01" value="<?= $sm ?>">
            <label for="ss">Informe seu salário</label>
            <input type="number" name="ss" id="ss" step="0.01" value="<?= $ss ?>">
            <input type="submit" value="Ok">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "Ganhando <strong>R$" . numfmt_format_currency($formato, $ss, "BRL") . "</strong>, você está ganhando $ganha salários minimos + ". numfmt_format_currency($formato, $restante, 'BRL');        
        ?>
    </section>
</body>
</html>