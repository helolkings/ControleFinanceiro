<?php

require_once 'DAO/EmpresaDAO.php';
$objDAO = new EmpresaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {
    $dados = $objDAO->DetalharEmpresa($_GET['cod']);
    if (count($dados) == 0) {
        header("location: consultar_empresa.php");
        exit;
    }
} else if (isset($_POST['btnSalvar'])) {
    $id = $_POST['cod'];
    $empresa = trim($_POST['empresa']);
    $telefone = trim($_POST['telefone']);
    $endereco = trim($_POST['endereco']);

    $ret = $objDAO->AlterarEmpresa($empresa, $telefone, $endereco, $id);
    header("location: consultar_empresa.php?ret=$ret");
    exit;
} else if (isset($_POST['btnExcluir'])) {
    $id = $_POST['cod'];
    $ret = $objDAO->ExcluirEmpresa($id);

    header("location: consultar_empresa.php?ret=$ret");
    exit;
} else {
    header("location: consultar_empresa.php");
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
                        <h2>Alterar/Excluir uma Empresa</h2>
                        <h5>Aqui você poderá alterar ou excluir sua Empresa.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr>
                <form role="form" action="alterar_empresa.php" method="POST">
                    <input type="hidden" value="<?= $dados[0]['id_empresa'] ?>" name="cod">
                    <div class="form-group">
                        <label>Nome da Empresa:</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome da Empresa aqui..." name="empresa" id="empresa" maxlength="45" value="<?= $dados[0]['nome_empresa'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Telefone:</label>
                        <input type="text" class="form-control" placeholder="Digite o Telefone da Empresa aqui..." name="telefone" id="telefone" maxlength="14" value="<?= $dados[0]['telefone_empresa'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Endereço:</label>
                        <input type="text" class="form-control" placeholder="Digite o Endereço da Empresa aqui..." name="endereco" id="endereco" maxlength="50" value="<?= $dados[0]['endereco_empresa'] ?>">
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarAlterarCadastrarEmpresa()">Salvar</button>
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
                                    Realmente deseja excluir a empresa: <b><?= $dados[0]['nome_empresa'] ?>?</b>
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