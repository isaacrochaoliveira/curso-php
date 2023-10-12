<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?? 135;
        $formato = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        $_100 = 0;
        $_50 = 0;
        $_10 = 0;
        $_5 = 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" step="5" value="<?= $saque ?>">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 

            $sobra = 0;

            $_100 = intdiv($saque, 100);
            $sobra = $saque % 100;

            $_50 = intdiv($sobra, 50);
            $sobra = $sobra % 50;

            // $_20 = intdiv($sobra, 20);
            // $sobra = $sobra % 20;

            $_10 = intdiv($sobra, 10);
            $sobra = $sobra % 10;

            $_5 = intdiv($sobra, 5);
        ?>
        <h2>Saque de <?= numfmt_format_currency($formato, $saque, "BRL") ?> realizado!</h2>
        <p>O Caixa Eletrônico vai te entregar as segunites notas:</p>
        <ul>
            <li>
                <img src="100-reais.jpg" class="nota" alt="">
                x<?= $_100 ?>
            </li>
            <li>
                <img src="50-reais.jpg" alt="" class="nota">
                x<?= $_50 ?>
            </li>
            <!-- <li>
                <img src="20-reais.jpg" alt="">
                x<?= $_20 ?>
            </li> -->
            <li>
                <img src="10-reais.jpg" alt="" class="nota">
                x<?= $_10 ?>
            </li>
            <li>
                <img src="5-reais.jpg" alt="" class="nota">
                x<?= $_5 ?>
            </li>
        </ul>
    </section>
</body>
</html>