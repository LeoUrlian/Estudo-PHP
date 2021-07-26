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
    $e = isset($_GET["uf"]) ? $_GET["uf"] : "";
    switch ($e) {
      case "GO":
      case "MT":
      case "MS":
      case "DF":
        echo "Você mora na <span class='foco'>Região Centro-Oeste</span>";
        break;
      case "AC":
      case "AM":
      case "AP":
      case "PA":
      case "RO":
      case "RR":
      case "TO":
        echo "Você mora na <span class='foco'>Região Norte</span>";
        break;
      case "AL":
      case "BA":
      case "CE":
      case "MA":
      case "PI":
      case "PE":
      case "PB":
      case "RN":
      case "SE":
        echo "Você mora na <span class='foco'>Região Nordeste</span>";
        break;
      case "PR":
      case "RS":
      case "SC":
        echo "Você mora na <span class='foco'>Região Sul</span>";
        break;
      case "ES":
      case "MG":
      case "RJ":
      case "SP":
        echo "Você mora na <span class='foco'>Região Sudeste</span>";
        break;
    }
    ?>
    <br /><br /><a href="javascript:history.go(-1)" class="botao">Voltar</a> <!-- no href é um codigo javascript para voltar para a pagina anterior -->
  </div>
</body>

</html>