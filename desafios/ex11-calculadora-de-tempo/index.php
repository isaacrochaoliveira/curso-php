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
        $tempo = $_POST['tempo'] ?? 1234000;
      
        $sem = $tempo / 604.800;
        $sem_resto = $tempo % 604.800;
        
        $dia = intdiv($sem_resto, 86.400);
        $dia_resto = $sem_resto % 86.400;

        
        $hr = intdiv($dia_resto, 3600);
        $hr_resto = $dia_resto % 3600;
        
        $min = intdiv($hr_resto, 60);
        
        $seg = $tempo % 60;
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

            echo $sem_resto;
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
                        $seg Segundos
                    </li>
                </ul>
            HTML;
        ?>
    </section>
</body>
</html>