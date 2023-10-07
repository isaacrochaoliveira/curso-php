<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Minimo com PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
z    <?php 
        $sal = $_POST['sal'] ?? 1000;
        $sal_min = 1000;
        $qtde_sal = intdiv($sal, $sal_min);
        $resto = $sal % $sal_min;

        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        $salF = numfmt_format_currency($padrao, $sal, 'BRL');
        $restoF = numfmt_format_currency($padrao, $resto, 'BRL');
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="sal">Salário</label>
            <input type="number" name="sal" id="sal" value="<?= $sal ?>" step="0.001">
            <input type="submit" value="Calcular">
        </form>

    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo <<< HTML
                <p>
                    Quem Recebe um salário de $salF ganha <strong>$qtde_sal salários minimos</strong> + $restoF
                </p>
            HTML;
        ?>
    </section>
</body>
</html>