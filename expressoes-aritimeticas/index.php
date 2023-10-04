<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Ariméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ordem de Precidência</h1>
    </header>
    <section>
        <?php 
            echo "4° - **<br>";
            echo "3° - * - / - %<br>";
            echo "2° - + - -<br>";
            echo "1° - ()<br>";
        ?>
    </section>
</body>
</html>