<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com Números Aleatórios</h1>
    </header>
    <section>
        <p>Gerando um número Aleatório entr 0 e 100...</p>
        <?php 
            //$ale = rand(0, 100) = Ele usa um algoritmo criado em 1951 = Linear Congretial Generator;
            // $ale = mt_rand() = Algoritmo dessa função saiu em 1997 = Mersenne Twister
            //random_int() gera número aleatórios criptograficamente seguros
            $ale = mt_rand(0, 100);
            echo "O valor gerador foi <strong>$ale</strong>";
        ?>
        <p><a href="./index.php">&#x1F61C; Gerar Outro</a></p>
    </section>
</body>
</html>