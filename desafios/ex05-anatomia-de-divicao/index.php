<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de Uma Divição</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .text-align {
            text-align: center;
        }
        .d-flex {
            display: flex;
        }
        .justify-content-around {
            justify-content: space-around;
        }
        .fs-40 {
            font-size: 25px;
        }
        .border-right {
            border-right: 3px solid #000;
        }
        .border-top {
            border-top: 3px solid #000;
        }
        .pr-5 {
            padding-right: 2rem;
        }
        .mb-0 {
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    <?php 
        $dividendo = $_POST['dividendo'] ?? 8;
        $divisor = $_POST['divisor'] ?? 3;
        
        $valor =  intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;

    ?>
    <main>
        <h1>Anatomia de Uma Divição</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            echo <<< HTML
                <div class="d-flex justify-content-around fs-40">
                    <div>
                        <h1 class='border-right pr-5 mb-0'>$dividendo</h1>
                        <h1 class="border-right">$resto</h1>
                    </div>
                    <div>
                        <h1>$divisor</h1>
                        <h1 class="border-top">$valor</h1>
                    </div>
                </div>
            HTML;
        ?>
    </section>

</body>
</html>