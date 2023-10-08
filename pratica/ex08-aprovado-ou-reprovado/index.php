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
        $n1 = $_GET['n1'] ?? 5;
        $n2 = $_GET['n2'] ?? 5;
        $n3 = $_GET['n3'] ?? 5;
        $n4 = $_GET['n4'] ?? 5;
    ?>
    <main>
        <h1>Informe as nota do Aluno(a)</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">Nota 1º</label>
            <input type="number" name="n1" id="n1" step="0.01" value="<?= $n1 ?>">
            <label for="n2">Nota 2º</label>
            <input type="number" name="n2" id="n2" step="0.01" value="<?= $n2 ?>">
            <label for="n3">Nota 3º</label>
            <input type="number" name="n3" id="n3" step="0.01" value="<?= $n3 ?>">
            <label for="n4">Nota 4º</label>
            <input type="number" name="n4" id="n4" step="0.01" value="<?= $n4 ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php 
                $média = ($n1 + $n2 + $n3 + $n4) / 4;

                echo "O Aluno(a) ficou com a média " . number_format($média, 2, ',', '.')."<br>";
                if ($média > 7) {
                    echo "Aluno(a) Aprovado(a)!!";
                } else {
                    echo "Aluno(a) Reprovado(a)!!";
                }
            ?>
        </p>
    </section>
</body>
</html>