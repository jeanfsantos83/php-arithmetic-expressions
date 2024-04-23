<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Expressões Aritméticas</title>
</head>
<body>
    <h1>Expressões Aritméticas</h1>
    <!-- 
        Ordem de precedência em expressões aritméticas
        ->  Parênteses => ()
        -> Exponenciação => **
        -> Multiplicação - Divisão - Resto da Divisão => * / %
        -> Adição - Subtração => + -
    -->
    <?php
        $res = 5 + 2 / 2;
        $res = 50 / 2 + 3 ** 2;
        $res = 50 / (2 + 3) ** 2;
        echo "O resultado é $res";    
    ?>    
</body>
</html>