<?php if(isset($_GET['pagina'])) $pagina = $_GET['pagina']; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Locadora</title>
</head>

<body>
  <h1>Locadora Top</h1>
  <div>
    <a href=<?php echo "/fatec-locadora-carro/?pagina=src/paginas/listar.php&ordem=veiculo"; ?> >Listar por ordem alfabética</a><br>
    <a href=<?php echo "/fatec-locadora-carro/?pagina=src/paginas/listar.php&ordem=marca"; ?> >Listar por marca e modelo</a><br>
    <a href=<?php echo "/fatec-locadora-carro/?pagina=src/paginas/listar.php&ordem=tipo"; ?> >Listar por tipo</a><br>
  </div>
  <br><br>
  <div>
    <?php if (isset($pagina)) include $pagina; ?>
  </div> 
</body>
</html>