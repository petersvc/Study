<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulários</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <h1>Formulários</h1>
  <h2>Calcular raiz quadrada</h2>
  <form class="vai" action="08_2_dados.php" method="post">
    Valor: <input type="number" name="n">
    <input type="submit" name="e" value="Calcular raiz">
  </form>
  <h2>Dados de uma pessoa</h2>
  <form class="vai2" action="08_2_dados.php" method="post">
    Nome: <input type="text" name="nome">
    Ano de Nascimento: <input type="text" name="ano">
    <fieldset>
      <input type="radio" name="sexo" id="m" value="homen">
      <label for="m">Masculino</label>
      <input type="radio" name="sexo" id="f" value="mulher">
      <label for="f">Feminino</label>
    </fieldset>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
