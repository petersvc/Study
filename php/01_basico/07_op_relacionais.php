<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Operadores relacionais</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Operadores relacionais</h1>
  <?php
    $a = 20; $b = 220;
    $nota1 = $_GET["n1"]; $nota2 = $_GET["n2"];
    $media = ($nota1 + $nota2) / 2;
    $sit = $media >= 70 ? "Aprovado" : "Reprovado";
    $c = $a > $b ? $a : $b;
    #echo "$c";
    $c = $a > $b ? $a + $b : $b - $a;
    #echo "<br/>$c";
    echo "<br/>Situação: $sit <br/>Média: ". $media;
  ?>
</body>
</html>
