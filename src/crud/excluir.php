<?php
    include $_SERVER['DOCUMENT_ROOT'].'/fatec-locadora-carro/src/db/conexao.php';

    $veiculo_id = $_POST['veiculo_id'];

    $comando = $conexao->prepare("DELETE FROM CARROS WHERE VEICULO_ID = {$veiculo_id}");

    $comando->execute();

    header('Location: /fatec-locadora-carro?pagina=src/paginas/listar.php');