<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulários 2</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <h1>Trocar css</h1>

  <form class="vai3" action="08_dados2.php" method="post">
    <label for="itxt">Texto: </label>
    <input type="text" name="t" value=""><br/>
    <label for="itam">Tamanho</label>
    <select name="tam" id="itam">
      <option value="8pt">8</option>
      <option value="10pt">10</option>
      <option value="14pt">14</option>
      <option value="20pt">20</option>
      <option value="80pt">80</option>
    </select>
    <label for="icor">Cor:</label>
    <input type="color" name="cor" id="icor">
    <input type="submit" name="manda" value="Gerar">
  </form>
</body>
</html>
