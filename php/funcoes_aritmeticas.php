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
  <h1>Funções aritméticas</h1>
  <?php

    //Atribuindo valores, paramêtros pela url para variáveis
    //A pagina só será exibida se parametros forem passados
    //exemplo: http://localhost/study/php/funcoes_aritmeticas.php?a=93&b=37

    $num1 = $_GET["a"]; //valor digitado na url
    $num2 = $_GET["b"]; //valor digitado na url
    $num3 = -15;
    $num4 = 25;
    $num5 = 105.6;
    $num6 = 8560.1568;
    $soma = $num1 + $num2;
    echo "num1 = $num1";
    echo "<br/>num2 = $num2";
    echo "<br/>A soma entre as variáveis num1 e num2 é: $soma";
    echo "<br/>A subtração: ". ($num1 - $num2);
    echo "<br/>A multiplicação: ". ($num1 * $num2);
    echo "<br/>A divisão: ". ($num1 / $num2);
    echo "<br/>O módulo: ". ($num1 % $num2);
    echo "<br/>Valor absoluto de $num3: ". abs($num3);
    echo "<br/>O quadrado de $num3: ". pow($num3,2);
    echo "<br/>A raiz quadrada de $num4: ". sqrt($num4);
    echo "<br/>O valor arredondado de $num5: ". round($num5);
    echo "<br/>O valor truncado de $num5: ". intval($num5);
    echo "<br/>O valor formatado (<i>number format</i>) $num6: ". number_format($num6,2,",", ".");

  ?>
</body>
</html>
