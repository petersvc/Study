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
  <h1>Operadores de atribuição: exercício</h1>
  <?php
    $porcentagem = 0.1;
    $preco_produto = $_GET["p"];
    echo "Preço do produto: $preco_produto<br/>";
    $preco_produto *= $porcentagem;
    echo "Preço do produto com 10% de desconto: $preco_produto";
    $preco_produto = $_GET["p"]; //reseta a variável
    echo "<br/>Com 10% de aumento: ".($preco_produto + $preco_produto * $porcentagem);
  ?>
</body>
</html>
