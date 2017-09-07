<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>While</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <h1>While</h1>

  <?php
    $i = 0;
    while ($i < 10) {
      //printf("Indivíduo %d<br>", ++$i);
      echo "Indivíduo " . ++$i . "<br>";
    }
  ?>
</body>
</html>
