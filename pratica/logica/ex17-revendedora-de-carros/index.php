<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática PHP</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $sal = $_GET['salario'] ?? 1_000;
        $carros_vend = $_GET['carros_vend'] ?? 50;
        $tot_vendas = $_GET['tot_vendas'] ?? 50;
        $valor_pcarro = $_GET['valor_pcarro'] ?? 500;

        $formato = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Revendedora de Carros Usados</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário Fixo</label>
            <input type="number" name="salario" id="salario" value="<?= $sal ?>" step="0.01">
            <label for="carros_vend">Carros Vendidos</label>
            <input type="number" name="carros_vend" id="carros_vend" value="<?= $carros_vend ?>">
            <label for="tot_vendas">Total de Vendas</label>
            <input type="number" name="tot_vendas" id="tot_vendas" value="<?= $tot_vendas ?>">
            <label for="valor_pcarro">Valor p/ Carro</label>
            <input type="number" name="valor_pcarro" id="valor_pcarro" value="<?= $valor_pcarro ?>" step="0.01">
            <input type="submit" value="Ok">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $acresimo = $carros_vend * $valor_pcarro;
            $sal += $acresimo;
            $sal_final = $sal + ($sal * 5 / 100);
        ?>
        <p>Com o total de:</p>
        <ul>
            <li>Número de Carros Vendidos: <?= $carros_vend ?></li>
            <li>Número de Vendas: <?= $tot_vendas ?></li>
            <li>Acrésimo de 5% a cada venda Realizada</li>
            <li>Valor de cada carro vendido: <?= numfmt_format_currency($formato, $valor_pcarro, "BRL") ?></li>
            <li>Acrésimo a cada carro Vendido: R$<?= number_format($acresimo, 2, ',', '.') ?></li>
        </ul>
        <p>O Salário Final desde funcionário será de: <?= numfmt_format_currency($formato, $sal_final, "BRL") ?></p>
    </section>
</body>
</html>