<?php
    include $_SERVER['DOCUMENT_ROOT'].'/fatec-locadora-carro/src/db/conexao.php';
    
    $veiculo    = $_POST['veiculo'];
    $marca      = $_POST['marca'];
    $modelo     = $_POST['modelo'];
    $tipo       = $_POST['tipo'];
    $ano        = $_POST['ano'];
    
    $comando = $conexao->prepare("INSERT INTO CARROS (VEICULO, MARCA, MODELO, TIPO, ANO)".
                                 "VALUES ('{$veiculo}', '{$marca}', '{$modelo}', '{$tipo}', '{$ano}')");
    $comando->execute();

    header('Location: /fatec-locadora-carro?pagina=src/paginas/listar.php');