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

    <form action="13_for2.php" method="post">
      <select class="" name="n">
        <?php
          for ($i = 1; $i < 11; $i++)
          {
            echo "<option>$i</option>";
          }
        ?>
      </select>
      <input type="submit" name="" value="Tabuada">
    </form>
    <br><br>

    <?php
      $f = isset($_POST["n"]) ? $_POST["n"] : 5;
      $t;
      echo "Tabuada de $f<br><br>";
      for($i = 1; $i < 11; $i++)
      {
        $t= $f*$i;
        echo "$f x $i = $t <br>";
      }
    ?>
  </body>
</html>
