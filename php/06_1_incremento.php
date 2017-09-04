<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Incrementadores</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Incrementadores</h1>
  <?php
    echo "i++, ++i, i--, --i</br><br/>";
    $ano = $_GET["aa"];
    echo "<br/>Ano: $ano";
    echo "<br/>Ano++: " . $ano++;
    $ano = $_GET["aa"]; //reseta o valor de ano;
    echo "<br/>++Ano:" . ++$ano;
    $ano = $_GET["aa"]; //reseta o valor de ano;
    echo "<br/>Ano--: " . $ano--;
    $ano = $_GET["aa"]; //reseta o valor de ano;
    echo "<br/>--Ano:" . --$ano;
  ?>
</body>
</html>
