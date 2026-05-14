<?php

require_once 'DAO/ContaDAO.php';
$objDAO = new ContaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {
    $dados = $objDAO->DetalharConta($_GET['cod']);
    if (count($dados) == 0) {
        header("location: consultar_conta.php");
        exit;
    }
} else if (isset($_POST['btnSalvar'])) {
    $id = $_POST['cod'];
    $banco = trim($_POST['banco']);
    $agencia = trim($_POST['agencia']);
    $numero = trim($_POST['numero']);
    $saldo = trim($_POST['saldo']);

    $ret = $objDAO->AlterarConta($banco, $agencia, $numero, $saldo, $id);
    header("location: consultar_conta.php?ret=$ret");
    exit;
} else if (isset($_POST['btnExcluir'])) {
    $id = $_POST['cod'];
    $ret = $objDAO->ExcluirConta($id);

    header("location: consultar_conta.php?ret=$ret");
    exit;
} else {
    header("location: consultar_conta.php");
    exit;
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
                     <input type="hidden" value="<?= $dados[0]['id_conta'] ?>" name="cod">
                    <div class="form-group">
                        <label>Nome do Banco:</label>
                        <input type="text" class="form-control" name="banco" id="banco" maxlength="45" placeholder="Digite o Nome do Banco aqui..." value="<?= $dados[0]['banco_conta'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Agência:</label>
                        <input type="number" class="form-control" name="agencia" id="agencia" maxlength="45" placeholder="Digite o Número da Agência aqui..." value="<?= $dados[0]['agencia_conta'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Conta:</label>
                        <input type="number" class="form-control" name="numero" id="numero" maxlength="45" placeholder="Digite o Número da Conta aqui..." value="<?= $dados[0]['numero_conta'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Saldo:</label>
                        <input type="text" class="form-control" name="saldo" id="saldo" maxlength="45" placeholder="Digite o Saldo da Conta aqui..." value="<?= $dados[0]['saldo_conta'] ?>">
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarAlterarCadastrarConta()">Salvar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExcluir">Excluir</button>

                    </button>
                    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de Exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Realmente deseja excluir a conta: <b><?= $dados[0]['banco_conta'] ?> / Agência: <?= $dados[0]['agencia_conta'] ?> - Conta: <?= $dados[0]['numero_conta'] ?> ?</b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" name="btnExcluir">Sim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>