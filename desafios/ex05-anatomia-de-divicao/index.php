<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de Uma Divição</title>
    <link rel="stylesheet" href="../style.css">
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
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $valor ?></td>
            </tr>
        </table>
    </section>

</body>
</html>