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
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Nome não Informado]";
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[Ano não informado]";
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sexo não Informado]";
    $idade = date("Y") - $ano;

    echo "$nome é $sexo e tem $idade anos";
    ?>
    <br /><a href="form02.php">Voltar</a>
  </div>
</body>

</html>