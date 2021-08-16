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
    $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
    $final = isset($_GET["final"]) ? $_GET["final"] : 0;
    $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : "";

    if ($incremento == "n1") {
      while ($inicio <= $final) {
        $v = "num" . $inicio;
        $inicio++;
      }
    }
    echo "$inicio";

    ?>
    <br /><br /><a href="javascript:history.go(-1)" class="botao">Voltar</a> <!-- no href é um codigo javascript para voltar para a pagina anterior -->
  </div>
</body>

</html>