<div>
    <div>
        <h4>Excluir carro</h4>
        <p>Deseja realmente excluir esse carro?</p>
        <form action="/fatec-locadora-carro/src/crud/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['veiculo_id']?>" name="veiculo_id">
            <input type="submit" value="Excluir">
        </form>
    </div>
</div>