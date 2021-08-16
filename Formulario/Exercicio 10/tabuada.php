<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="_css/estilo.css" />
  <title>Formulários</title>
</head>

<body>
  <div>
    <?php
    $n = isset($_GET["t"]) ? $_GET["t"] : 1;
    echo "<h3> Mostrando a tabuada de $n :</h3>";

    $c = 1;
    do {
      $tab = $n * $c;
      echo " $n X $c = $tab <br/>";
      $c++;
    } while ($c <= 10);
    ?>

    <br /><br /><a href="javascript:history.go(-1)" class="botao">Voltar</a>
  </div>
</body>

</html>