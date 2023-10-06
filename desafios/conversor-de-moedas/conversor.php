<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <section>
        <?php 
        
        $reais = $_GET['moedas'];

        $dolar = $reais / 5.17;

        // Jeito Tradicional
        //$reaisF = number_format($reais, 2, ',', '.');
        //$dolarF = number_format($dolar, 2, ',', '.');

        //Jeito Profissional com Internacionalização
        // Biblioteca = intl (Internallization PHP)
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

        echo "Seus ". numfmt_format_currency($padrao, $reais, "BRL") ." equivalem ". numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <p><a href="./index.html">Voltar</a></p>
    </section>
</body>
</html>