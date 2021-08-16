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
    <form method="get" action="09exe-03.php">
      Inicio: <input type='number' name='inicio' value='inicio'><br />
      Final: <input type='number' name='final' value='final'><br />
      Incremento: <select type='number' name="incremento" id='incremento'>
        <?php
        $c = 1;
        while ($c <= 5) {
          echo  "<option type='number' value='v$c'>$c</option>";
          $c++;
        }
        ?>
      </select>

      <br /><input type="submit" class="botao" value="Contar" />
    </form>
  </div>
</body>

</html>