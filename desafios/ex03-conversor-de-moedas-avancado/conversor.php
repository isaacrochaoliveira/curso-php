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
        <pre>
            <?php 
            
            //Consumindo API
            $inicio = Date('m-d-Y', strtotime('-7 days'));
            $fim = Date('m-d-Y');
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $inicio .'%27&@dataFinalCotacao=%27'. $fim .'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            // var_dump($dados);

            $cotacao = $dados['value'][0]['cotacaoCompra'];

            $reais = $_GET['moedas'];

            $dolar = $reais / $cotacao;

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