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
        $l = $_GET['litros'] ?? 0;
        $g = $_GET['gasolina'] ?? '';
        $total = 0;

        $formato = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Tabela de Posto Getúlio</h1>
        <p>Etanol</p>
        <ul>
            <li>Até 20 litros: desconto de 3% por litro: R$4,39</li>
            <li>Acima de 20 litros: Desconto de 5% por litro R$4,39.</li>
        </ul>
        <p>Gasolina:</p>
        <ul>
            <li>Até 20 litros: desconto de 4% por litro: R$5,39</li>
            <li>Acima de 20 litros, desconto de 6% por litro: R$5,39</li>
        </ul>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="litros">Quantos Litros?</label>
            <input type="number" name="litros" id="listros" value="<?= $l ?>" step="0.001">
            <label for="gasolina">Tipo de Gasolina</label>
            <select name="gasolina" id="gasolina">
                <option value="Etanol">Etanol</option>
                <option value="Gasolina">Gasolina</option>
            </select>
            <input type="submit" value="Ok">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            if ($g == 'Etanol') {
                $preco = 4.39;
                if ($l <= 20) {
                    $total = $preco - ($preco * 3 / 100);
                    $dec = 3;
                } else {
                    $total = $preco - ($preco * 5 / 100);
                    $dec = 5;
                }
            } else {
                if ($g == 'Gasolina') {
                    $preco = 5.39;
                    if ($l <= 20) {
                        $total = $preco - ($preco * 4 / 100); 
                        $dec = 4;
                    } else {
                        $total = $preco - ($preco * 6 / 100);
                        $dec = 6;
                    }
                } else {
                    $total = 0;
                    $dec = 0;
                }
            }
        ?>
        <p>Com o decressimo de <?= $dec ?>%. O Preço a pagar pelo consumidor será de <?= numfmt_format_currency($formato, $total, 'BRL') ?></p>
    </section>
</body>
</html>