<?php
    include $_SERVER['DOCUMENT_ROOT'].'/fatec-locadora-carro/src/db/conexao.php';
    
    $veiculo_id = $_GET['veiculo_id'];

    $queryCarro   = $conexao->query("SELECT VEICULO_ID, VEICULO, MARCA, MODELO, TIPO, ANO FROM CARROS 
                                     WHERE VEICULO_ID = {$veiculo_id}");
    $carro = $queryCarro->fetch(PDO::FETCH_ASSOC);
?>

<form action="/fatec-locadora-carro/src/crud/editar.php" method="post">
  <div>
    <div>
        Editar carro
    </div>
    <div>
      <input type="hidden" name="veiculo_id" value="<?php echo $carro['VEICULO_ID']?>">
      <div>
        <div>
          <label for="veiculo">Veiculo </label>
          <input type="text" value="<?php echo $carro['VEICULO']?>" name="veiculo" autofocus required> 
        </div>
      </div>
      <div>
        <div>
          <label for="modelo">Modelo </label>
          <input type="text" value="<?php echo $carro['MODELO']?>" name="modelo" autofocus required> 
        </div>
      </div>
      <div>
        <div>
          <label for="ano">Ano </label>
          <input type="text" value="<?php echo $carro['ANO']?>" name="ano" required> 
        </div>
      </div>
      <div>
        <div>
          <label for="marca">Marca </label>
          <input type="text" value="<?php echo $carro['MARCA']?>" name="marca" autofocus required>
        </div>
      </div>
      <div>
        <div>
          <label for="tipo">Tipo </label>
          <select name="tipo">
            <option value="esportivo">Esportivo</option>
            <option value="passeio">Passeio</option>
            <option value="transporte">Transporte</option>
          </select>
        </div>
      </div>
    </div>
    <div>
      <input type="submit" value="Editar">
    </div>
  </div>
</form>