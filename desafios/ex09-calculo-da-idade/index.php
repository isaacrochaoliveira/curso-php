<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_atual = $_POST['ano_atual'] ?? Date('Y');
        $ano_nasc = $_POST['nasc'] ?? 2000; 
    ?>
    <header>
        <h1>
            Calculando a sua idade
        </h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?= $ano_nasc?>">
            <label for="ano_atual">Quer saber sua idade em que ano? (Atualmente estamos em 2023)</label>
            <input type="number" name="ano_atual" id="ano_atual" value="<?= $ano_atual ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano_atual - $ano_nasc;
            echo "Quem nasceu em $ano_nasc vai ter $idade anos em $ano_atual";
        ?>
    </section>
</body>
</html>