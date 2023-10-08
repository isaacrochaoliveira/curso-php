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
        $nome = $_GET['nome'] ?? 'sem-nome';
        $idade = $_GET['idade'] ?? 0;
    ?>
    <main>
        <h1>Informe os dados abaixo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?= $nome ?>">
            <label for="idade">Idade</label>
            <input type="number" name="idade" id="idade" value="<?= $idade ?>">
            <button type="submit">Seguir</button>
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "Olá $nome, tudo bem?<br>";
            if ($idade >= 18) {
                echo "Você tem $idade anos e já é maior de idade";
            } else {
                echo "Você tem $idade anos e não é ainda maior de idade";
            }
        ?>
    </section>
</body>
</html>