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
        $valor = $_GET['valor'] ?? 1000;
        $forma = $_GET['forma'] ?? 4;

        $formato = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

     ?>
    <main>
        <h1>Informe o preço do produto:</h1>
        <ol start="1">
            <li>À Vista em Dinheiro ou Pix, recebe 15% de desconto</li>
            <li>À Vista no cartão de crédito, recebe 10% de desconto</li>
            <li>Parcelado no cartão em duas vezes, preço normal do produto sem juros</li>
            <li>Parcelado no cartão em três vezes ou mais, preço normal do produto mais juros de 10%</li>
        </ol>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Valor do Produto:</label>
            <input type="number" name="valor" id="valor" step="0.01" value="<?= $valor ?>">
            <label for="forma">Informe a sua forma de pagamento:</label>
            <input type="number" name="forma" id="forma" min="1" max="4" value="<?= $forma ?>">
            <input type="submit" value="Ok">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php 
                echo numfmt_format_currency($formato, $valor, 'BRL') . " ";
                if ($forma == 1) {
                    $desconto = $valor - ($valor * 15 / 100);
                    $economizar = $valor - $desconto;
                    echo "com 15% de desconto sairá: " . numfmt_format_currency($formato, $desconto, "BRL") ."<br>E você vai economizar " . numfmt_format_currency($formato, $economizar, "BRL");
                } else {
                    if ($forma == 2) {
                        $desconto = $valor - ($valor * 10 / 100);
                        $economizar = $valor - $desconto;
                        echo "com 10% de desconto sairá " . numfmt_format_currency($formato, $desconto, "BRL") . "<br>E você vai economizar " . numfmt_format_currency($formato, $economizar, "BRL");
                    } else {
                        if ($forma == 3) {
                            $parcela = $valor / 2;
                            echo "sairá com parcela de 2x de " . numfmt_format_currency($formato, $parcela, "BRL");
                        } else {
                            $parcela = $valor / 3;
                            echo "sairá com parcela de 3x de " . numfmt_format_currency($formato, $parcela, "BRL");
                        }
                    }
                }
            ?>
        </p>
    </section>
</body>
</html>