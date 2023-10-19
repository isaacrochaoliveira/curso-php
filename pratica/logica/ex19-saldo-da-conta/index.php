<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática PHP</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $numero_conta = $_GET['numero_conta'] ?? 173;
        $saldo = $_GET['saldo'] ?? 120.120;
        $debito = $_GET['debito'] ?? 80.130;
    ?>
    <main>
        <h1>Saldo da Conta com PHP</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero_conta">Número da Conta</label>
            <input type="number" name="numero_conta" id="numero_conta" value="<?= $numero_conta ?>">
            <label for="saldo">Saldo</label>
            <input type="number" name="saldo" id="saldo" value="<?= $saldo ?>" step="0.001">
            <label for="debito">Débito</label>
            <input type="number" name="debito" id="debito" value="<?= $debito ?>" step="0.001">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>