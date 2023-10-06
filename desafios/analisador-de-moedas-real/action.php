<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando Número Real</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        <p>
            <?php 
                $num = $_POST['num'] ?? 0;
 
                echo "O Número informado foi: <strong>" . number_format($num, 3, ',', '.') . "</strong>";

                $inteiro = (int) $num;
                $real = $num - $inteiro;

                echo "<hr>";
                echo "Parte Inteira: " . number_format($inteiro, 0, ',', '.') . "<br>";
                echo "Parte Real: " . number_format($real, 3, ',', '.');

            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Go Back</button>
    </section>
</body>
</html>