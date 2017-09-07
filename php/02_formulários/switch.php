<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Switch</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>Switch case</h1>
  <form method="post" action="10_switch.php">
    Numero: <input type="number" name="nu">

  </form>
  <?php
    $num = isset($_POST["nu"]) ? $_POST["nu"] : 10;
    switch ($num)
    {
      case 1:
        $num *= 3;
        break;
      case 2:
        $num += 12;
      break;
      default:
        $num = 10;
    }
    echo "$num";
  ?>
</body>

</html>
