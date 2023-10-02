<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings em PHP</title>
</head>

<body>
    <h1>Manipulação de Strings em PHP</h1>

    <?php
    // Double Quoted = "Curso"
    // Single Quoted = 'Curso'



    // Concatenação 
    // "Curso" . "PHP" = "CursoPHP"

    // Nas Double Quoted Existe interpretação do conteúdo
    // Nas Single Quote Não Existe

    //$nome = "Gustavo";
    //echo "Olá $nome!";
    //echo 'Olá $nome!';

    // $nome = 'Gustavo';
    // $sobrenome = "Guanabara \u{1F383}";
    // echo "$nome $sobrenome";

    // const CANAL = "Curso em Vídeo \u{1F499}";
    // echo "Eu adoro o " . CANAL;

    //echo "Estamos no ano de " . Date('Y');

    // $nome = "Gustavo";
    // $sobrenome = "Guanabara";
    // $apelido = "Gafanhoto";
    // echo "$nome \n \t \"$apelido\" \t\t $sobrenome";

    // Heredoc
    // $canal = 'Curso em Vídeo';
    // $ano = Date('Y');

    // echo <<< TESTE

    // Olá Galera do $canal
    //         Tudo bem Com vocês?
    //     Como está sendo esse ano de $ano;
    // Abraços! \u{1F596}
    // TESTE;
    
    // NowDoc 
    // $canal = 'Curso em Vídeo';
    // $ano = Date('Y');
    // echo <<< 'FRASE'
    //     I'm learning PHP -
    //         $canal in this year of 
    //             $ano
    // FRASE;
    ?>
</body>

</html>