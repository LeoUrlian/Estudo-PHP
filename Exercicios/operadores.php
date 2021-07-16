<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Arquivos Video/php-aula05/aula05/_css/estilo.css" />
  <title>Operadores</title>
</head>

<body>
  <div>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h2>Valores Recebidos: a = $n1 e b = $n2</h2>";
    echo "<br/><br/>A soma vale " . ($n1 + $n2);
    echo "<br/>A divisão vale " . ($n2 - $n1);
    echo "<br/>A multiplicação vale " . ($n2 * $n1);
    echo "<br/>A divisão vale " . ($n2 / $n1);
    echo "<br/>O modulo vale " . ($n2 % $n1);
    ?>
  </div>
</body>

</html>