<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Operadores de atribuição</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Operadores de atribuição</h1>
  <?php
    $soma = 10; $subtracao = 30; $multiplicacao = 3;
    $divisao = 2; $modulo = 5; $concat = 3;
    $num1 = 28;
    $num2 = 25;
    $soma += $num2;
    $subtracao -= $num2;
    $multiplicacao *= $num2;
    $concat .= $num1 . $num2 . $num1 + $num2;
    echo "Atribuição soma: $soma";
    echo "<Br/> Atribuição subtração: $subtracao";
    echo "<br/>Multiplicacao: $multiplicacao";
    echo "<br/>Concatenação: $concat";
  ?>
</body>
</html>
