<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php 

        $nome = 'Roger';
        $corFav = 'vermelho';
        $idade = 18;
        $atividadeFav = 'ler livros';

        //operador .
        echo 'Olá '. $nome . ', vi que sua cor preferida é '. $corFav . ', estou vendo também que possui '. $idade . ' anos e que gosta de '. $atividadeFav .'.';

        //aspas duplas

        echo '<br/>';

        echo "Olá $nome";

    ?>
</body>
</html>