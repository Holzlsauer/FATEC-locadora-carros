<?php
    include $_SERVER['DOCUMENT_ROOT'].'/fatec-locadora-carro/src/db/conexao.php';
    
    $veiculo_id    = $_POST['veiculo_id'];
    $veiculo       = $_POST['veiculo'];
    $marca         = $_POST['marca'];
    $modelo        = $_POST['modelo'];
    $tipo          = $_POST['tipo'];
    $ano           = $_POST['ano'];
    
    $comando = $conexao->prepare("UPDATE CARROS SET VEICULO = '{$veiculo}', ".
                                                    "MARCA = '{$marca}', ".
                                                    "MODELO = '{$modelo}', ".
                                                    "TIPO = '{$tipo}', ".
                                                    "ANO = '{$ano}' WHERE VEICULO_ID = {$veiculo_id}");
    $comando->execute();

    header('Location: /fatec-locadora-carro?pagina=src/paginas/listar.php');