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

  <?php
    $i = 0;
    do
    {
      //printf("Indivíduo %d<br>", ++$i);
      echo "$i ";
      $i += 2;
    }
    while ($i <= 10);

    $i = 10;
    echo "<br/>";

    do
    {
      echo "$i ";
      $i -= 2;
    }
    while ($i >= 0);
  ?>
</body>
</html>
