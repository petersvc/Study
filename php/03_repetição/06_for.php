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

    <form action="13_for3.php" method="post">
      <select class="" name="n">
        <?php
          for ($i = 1; $i < 11; $i++)
          {
            echo "<option>$i</option>";
          }
        ?>
      </select>
      <input type="submit" name="" value="Primo">
    </form>
    <br><br>

    <?php
      $f = isset($_POST["n"]) ? $_POST["n"] : 5;
      $cont = 0;
      $i = 1;
      $p;
      echo "$f é primo?<br><br>";
      for($i = 1; $i <= $f; $i++)
      {
        if($f%$i == 0 ) {
          $cont++;
        };
      }
      $p = $cont == 2 ? "Sim" : "Não";
      echo "$p";
    ?>
  </body>
</html>
