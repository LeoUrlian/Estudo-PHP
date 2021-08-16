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
    $n = isset($_GET["num"]) ? $_GET["num"] : 1;
    echo "<h2>Analisando o número $n ...</h2>";

    echo "Valores multiplos: ";
    $mult = 0;
    for ($c = 1; $c <= $n; $c++) {
      if ($n % $c == 0) {
        $mult++;
        echo "$c ";
      }
    }
    echo "<p>Total de multiplos: $mult</p>";
    echo "<h2>Resultado: $n <span class='foco'>";
    if ($mult <= 2) {
      echo "É PRIMO";
    } else {
      echo "NÃO É PRIMO";
    }
    echo "</span></h2>";
    ?>
    <br /><br /><a href="javascript:history.go(-1)" class="botao">Voltar</a>
  </div>
</body>

</html>