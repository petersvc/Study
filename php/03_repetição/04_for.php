<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

    <h1>For</h1>
    <br>

    <form action="04_for.php" method="post">
      <input type="text" name="f" placeholder="Digite um número e clique um enter" size="28" autofocus>
    </form>
    <br>

    <?php
      $f = isset($_POST["f"]) ? $_POST["f"] : 5;
      $i;
      for($i = 1; $i <= $f; $i++)
      {
        echo "Matrícula $i<br>";
      }
    ?>
  </body>
</html>
