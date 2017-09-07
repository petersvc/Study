<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Operadores lógicos</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Operadores lógicos</h1>
  <?php
    $ano = $_GET["a"];
    $idade = 2017 - $ano;
    echo "Idade: $idade";
    $voto = $idade > 17 && $idade < 65? "Obrigatório" : "Não obrigatório";
    echo "<br/>Voto: $voto";
  ?>
</body>
</html>
