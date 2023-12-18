<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php 

        //string
        $nome = 'Roger Correa';
        
        //int
        $idade = 18;

        //float
        $peso = 70.5;

        //bool
        $fumanteSN = true; # true = 1 ; false = void

    ?>

    <h1>Ficha Cadastral</h1>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumanteSN ?></p>

</body>
</html>