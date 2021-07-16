<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Arquivos Video/php-aula07/aula07/_css/estilo.css" />
  <title>Operador Relacional</title>
</head>

<body>
  <div>
    <?php
    // $nota1 = $_GET["n1"];
    // $nota2 = $_GET["n2"];
    // $media = ($nota1 + $nota2) / 2;

    // echo "A media entre $nota1 e $nota2 é igual a $media <br/>";
    // echo "A situação do aluno é " . (($media < 6) ? "REPROVADO" : "APROVADO");

    $ano = $_GET["an"];
    $idade = 2021 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos <br/>";

    $tipo = ($idade >= 18 && $idade <= 65) ? "OBRIGATORIO" : "OPCIONAL";
    echo "Portanto seu voto é $tipo";

    ?>
  </div>
</body>

</html>