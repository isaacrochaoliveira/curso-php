<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do Tempo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $tempo = $_POST['tempo'] ?? 2_000_000;
        $sobra = $tempo;
      
        $sem = intdiv($sobra, 604_800);
        $sobra = $sobra % 604_800;
        
        $dia = intdiv($sobra, 86_400);
        $sobra = $sobra % 86_400;

        $hr = intdiv($sobra, 3_600);
        $sobra = $sobra % 3_600;
        
        $min = intdiv($sobra, 60);
        $sobra = $sobra % 60;
        ?>
    <header>
        <h1>Calculadora de Tempo</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="tempo">Qual é o total de segundos</label>
            <input type="number" name="tempo" id="tempo" value="<?= $tempo ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php 
            echo "Analisando o valor que você digitou: " . number_format($tempo, 0, ',', '.') . " equivalem a um total de:";

            echo <<< HTML
                <ul>
                    <li>
                        $sem Semanas
                    </li>
                    <li>
                        $dia Dias
                    </li>
                    <li>
                        $hr Horas
                    </li>
                    <li>
                        $min Minutos
                    </li>
                    <li>
                        $sobra Segundos
                    </li>
                </ul>
            HTML;
        ?>
    </section>
</body>
</html>