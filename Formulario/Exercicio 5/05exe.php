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
    $n1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
    $n2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
    $media = ($n1 + $n2) / 2;
    echo "A média entre $n1 e $n2 é igual a " . number_format($media, 1);
    if ($media < 5) {
      $situacao = "REPROVADO";
    } else if ($media >= 5 && $media <= 7) {
      $situacao = "RECUPERAÇÃO";
    } else {
      $situacao = "APROVADO";
    }
    echo "<br/> Situação do aluno: $situacao. <br/>";
    ?>

    <a href="form05.html">Voltar</a>
  </div>
</body>

</html>