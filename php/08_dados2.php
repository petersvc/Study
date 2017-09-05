<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dados do formulário 2</title>
  <?php
    $txt = isset($_POST["t"]) ? $_POST["t"] : "Não informado";
    $tam = isset($_POST["tam"]) ? $_POST["tam"] : "12pt";
    $cor = isset($_POST["cor"]) ? $_POST["cor"] : "#00000";
  ?>
  <style>
  span
  {
    font-size: <?php echo $tam; ?>;
    color: <?php echo $cor; ?>;
  }
  </style>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <?php
    echo "<span>$txt</span>";
  ?>
  <h3><a href="08_formularios2.php">voltar</a></h3>

</body>
</html>
