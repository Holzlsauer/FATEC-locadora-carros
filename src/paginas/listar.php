<?php
    include $_SERVER['DOCUMENT_ROOT'].'/fatec-locadora-carro/src/db/conexao.php';
    
    $ordem = $_GET['ordem'];

    $query = $conexao->query("SELECT VEICULO_ID, VEICULO, MARCA, MODELO, TIPO, ANO FROM CARROS ORDER BY {$ordem}");
?>

<div>
  <table>
    <thead>
        <tr>
          <th>Código  </th>
          <th>Veículo  </th>
          <th>Marca  </th>
          <th>Modelo  </th>
          <th>Tipo  </th>
          <th>Ano  </th>
          <th>  </th>   
        </tr>
    </thead>
    <tbody>
      <?php while($carro = $query->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
          <td>
            <?php echo $carro['VEICULO_ID']; ?>
          </td>
          <td>
            <?php echo $carro['VEICULO']; ?>
          </td>
          <td>
            <?php echo $carro['MARCA']; ?>
          </td>
          <td>
            <?php echo $carro['MODELO']; ?>
          </td>
          <td>
            <?php echo $carro['TIPO']; ?>
          </td>
          <td>
            <?php echo $carro['ANO']; ?>
          </td>
          <td>
            <a href=<?php echo "/fatec-locadora-carro/?pagina=src/paginas/edicao.php&veiculo_id={$carro['VEICULO_ID']}"; ?> >
              Editar  
            </a>
            <a href=<?php echo "/fatec-locadora-carro/?pagina=src/paginas/exclusao.php&veiculo_id={$carro['VEICULO_ID']}"; ?> >
              Excluir  
            </a>   
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <div>
    <a href=<?php echo "/fatec-locadora-carro/?pagina=src/paginas/cadastro.php"; ?> >Cadastrar novo carro</a>
  </div>
</div>