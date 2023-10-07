<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritimética e Ponderada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $x1 = $_POST['x1'] ?? 2;
        $x2 = $_POST['x2'] ?? 2;

        $p1 = $_POST['p1'] ?? 2;
        $p2 = $_POST['p2'] ?? 2;
    ?>
    <header>
        <h1>Informe os dados</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="x1">1º Valor</label>
            <input type="number" name="x1" id="x1" value="<?= $x1 ?>" step="0.01">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" value="<?= $p1 ?>">            
            <label for="x2">2° Valor</label>
            <input type="number" name="x2" id="x2" value="<?= $x2 ?>" step="0.01">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" value="<?= $p2 ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "Analisando os valores $x1 e $x2<br>";

            $média = ($x1 + $x2) / 2;
            $ponderada = (($p1 * $x1) + ($p2 * $x2)) / $p1 + $p2;

            $dividendo = ($p1 * $x1) + ($p2 * $x1);
            $divisor = $p1 + $p2;
            $ponderada = $dividendo / $divisor;

            echo $dividendo."<br>";
            echo $divisor;


            echo "<ul><li>A <strong>Média Aritimética Simple</strong> entre os valores é igual a " . number_format($média, 2, ',', '.') . "</li>";
            echo "<li>A <strong>Média Aritimética Ponderada</strong> entre os valores é igual a " . number_format($ponderada, 2, ',', '.');
        ?>
    </section>
</body>
</html>