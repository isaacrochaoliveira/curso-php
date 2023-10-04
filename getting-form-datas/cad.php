<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Let's see an answer</h1>
    </header>
    <main>
        <?php 
            // $_REQUEST = Junção de $_GET - $_POST - $_COOKIES
            $nome = $_GET["nome"] ?? 'Sem Nome'; //Qualicência Nula ??
            $sobrenome = $_GET['sobrenome'] ?? 'Desconhecido'; // Qualicência Nula ??
            echo "<p>It's a pleasure to meet you <strong>$nome $sobrenome</strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Go back on page</a></p>
    </main>
</body>
</html>