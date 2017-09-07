<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dados dos formulários</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php/*
    $valor = sqrt($_POST["n"]);
    echo "Digitou: $valor";
    */
  ?>

  <?php
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "não informado";
    $idade = isset($_POST["ano"]) ? 2017 - $_POST["ano"] : "não informado";
    $sexos = isset($_POST["sexo"]) ? $_POST["sexo"] : "não informado";
    echo "Nome: $nome<br/>Idade: $idade<br/>Sexo: $sexos";
  ?>
  <h3><a href="08_1_formularios.php">voltar</a></h3>

</body>
</html>
