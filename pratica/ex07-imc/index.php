<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $peso = $_GET['peso'] ?? 80.00;
        $altura = $_GET['altura'] ?? 1.90;
    ?>
    <main>
        <h1>Informe os dados Abaixo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="peso">Peso:</label>
            <input type="number" name="peso" id="peso" step="0.01" value="<?= $peso ?>">
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura" step="0.01" value="<?= $altura ?>">
            <input type="submit" value="Calcular IMC">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php 
                $imc = $peso / ($altura ** 2);

                echo "IMC: " . number_format($imc, 2, ',', '.')."<br>";

                if ($imc < 18.5) {
                    echo "Com esse IMC, você está Abaixo do Peso";
                } else {
                    if (($imc >= 18.5) && ($imc < 24.9)) {
                        echo "Com esse IMC, você está com o peso ideal. Parabéns!";
                    } else {
                        if (($imc >= 25) && ($imc < 29.9)) {
                            echo "Com esse IMC, você está levemente acima do peso";
                        } else {
                            if (($imc >= 30) && ($imc < 34.9)) {
                                echo "Com esse IMC, você está com Obesidade Grave!";
                            } else {
                                if (($imc >= 35) && ($imc < 39.9)) {
                                    echo "Com esse IMC, você está com Obesidade Grau II (Severa)";
                                } else {
                                    echo "Com esse IMC, você está com Obesidade GRAU III (Mórbida)";
                                }
                            }
                        }
                    }
                }
            ?>
        </p>
    </section>
</body>
</html>