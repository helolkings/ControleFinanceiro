<?php
require_once 'DAO/ContaDAO.php';

if (isset($_POST['btnSalvar'])) {
    $banco = trim($_POST['banco']);
    $agencia = trim($_POST['agencia']);
    $numero = trim($_POST['numero']);
    $saldo = trim($_POST['saldo']);

    $objDAO = new ContaDAO();
    $ret = $objDAO->AlterarConta($banco, $agencia, $numero, $saldo);
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once '_head.php'; ?>

<body>
    <div id="wrapper">
        <?php include_once '_topo.php'; ?>
        <?php include_once '_menu.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Alterar Conta</h2>
                        <h5>Aqui você poderá alterar ou excluir sua Contas Bancária.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr>
                <form role="form" action="alterar_conta.php" method="POST">
                    <div class="form-group">
                        <label>Nome do Banco:</label>
                        <input type="text" class="form-control" name="banco" id="banco" placeholder="Digite o Nome do Banco aqui..." value="<?= isset($banco) ? $banco : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Agência:</label>
                        <input type="number" class="form-control" name="agencia" id="agencia" placeholder="Digite o Número da Agência aqui..." value="<?= isset($agencia) ? $agencia : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Conta:</label>
                        <input type="number" class="form-control" name="numero" id="numero" placeholder="Digite o Número da Conta aqui..." value="<?= isset($numero) ? $numero : '' ?>">
                    </div>
                    <div class="form-group">
                        <label>Saldo:</label>
                        <input type="text" class="form-control" name="saldo" id="saldo" placeholder="Digite o Saldo da Conta aqui..." value="<?= isset($saldo) ? $saldo : '' ?>">
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarAlterarCadastrarConta()">Salvar</button>
                    <button type="submit" class="btn btn-danger" name="btnExcluir">Excluir</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>