<?php
    include $_SERVER['DOCUMENT_ROOT'].'/fatec-locadora-carro/src/db/conexao.php';
?>

<form action="/fatec-locadora-carro/src/crud/cadastrar.php" method="post">
  <div>
    <div>
        Cadastrar carro
    </div>
    <div>
      <div>
        <div>
          <label for="veiculo">Veiculo </label>
          <input type="text" value="" name="veiculo" autofocus required> 
        </div>
      </div>
      <div>
        <div>
          <label for="modelo">Modelo </label>
          <input type="text" value="" name="modelo" autofocus required> 
        </div>
      </div>
      <div>
        <div>
          <label for="ano">Ano </label>
          <input type="text" value="" name="ano" required> 
        </div>
      </div>
      <div>
        <div>
          <label for="marca">Marca </label>
          <input type="text" value="" name="marca" autofocus required>
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
      <input type="submit" value="Cadastrar">
    </div>
  </div>
</form>