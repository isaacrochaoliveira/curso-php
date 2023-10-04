<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
    </header>
    <section>
        <?php
        $n = $_GET['n'] ?? "0";
        $ante = $n - 1;
        $suce = $n + 1;
        echo "O número escolhido foi $n<br>O seu antecessor é $ante<br>O seu sucessor é $suce";
        ?>
    </section>
</body>

</html>