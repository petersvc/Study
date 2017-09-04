<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Variáveis</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Variáveis em PHP</h1>
  <?php
    $num1 = 30;
    $num2 = 20;
    $soma = $num1 + $num2;
    echo "num1 = $num1";
    echo "<br/>num2 = $num2";
    echo "<br/>A soma entre as variáveis num1 e num2 é: $soma";
    echo "<br/>A subtração: ". ($num1 - $num2);
    echo "<br/>A multiplicação: ". ($num1 * $num2);
    echo "<br/>A divisão: ". ($num1 / $num2);
    echo "<br/>O módulo: ". ($num1 % $num2);
  ?>
</body>
</html>
