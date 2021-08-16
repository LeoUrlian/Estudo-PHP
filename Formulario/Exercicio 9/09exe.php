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
    <form method="get" action="09exe-02.php">
      <?php
      $c = 1;
      while ($c <= 5) {
        echo  "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0' /><br />";
        $c++;
      }
      ?>
      <br /><input type="submit" class="botao" value="Enviar" />
    </form>
  </div>
</body>

</html>