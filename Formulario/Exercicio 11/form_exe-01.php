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
    <form action="exe01.php" method="get">
      Numero: <select name="num">
        <?php
        for ($i = 1; $i <= 10; $i++) {
          echo "<option>$i</option>";
        }
        ?>
      </select>

      <br /><br /><input type="submit" class="botao" value="Tabuada" />
    </form>

  </div>
</body>

</html>