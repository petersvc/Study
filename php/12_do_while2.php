<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Do while</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <h1>Do while</h1>
  <br>
  <h2> Calculo fatorial</h2>

  <form action="12_do_while2.php" method="post">
    <input type="text" name="fat" placeholder="Digite um número e clique um enter" size="28" autofocus>
  </form>
  <br>
  <?php
    $f = isset($_POST["fat"]) ? $_POST["fat"] : 5;
    $f2 = $f;
    $i = $f2 - 1;
    do {
      $f2 *= $i;
      $i--;
    } while ($i > 0);
    echo "$f! = $f2";
  ?>


</body>
</html>
