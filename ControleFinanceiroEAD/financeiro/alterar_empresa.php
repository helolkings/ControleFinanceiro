<?php


require_once 'DAO/EmpresaDAO.php';


if (isset($_POST['btnSalvar']));
else if (isset($_POST['btnExcluir'])) {
    $empresa = trim($_POST['empresa']);
    $telefone = trim($_POST['telefone']);
    $endereco = trim($_POST['endereco']);

    $objDAO = new EmpresaDAO();
    $ret = $objDAO->AlterarEmpresa($empresa, $telefone, $endereco);
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

                <div class="form-group">
                    <label>Nome da Empresa:</label>
                    <input type="text" class="form-control" placeholder="Digite o Nome da Empresa aqui..." name="empresa" id="empresa">
                </div>
                <div class="form-group">
                    <label>Telefone:</label>
                    <input type="text" class="form-control" placeholder="Digite o Telefone da Empresa aqui..." name="telefone" id="telefone">
                </div>
                <div class="form-group">
                    <label>Endereço:</label>
                    <input type="text" class="form-control" placeholder="Digite o Endereço da Empresa aqui..." name="endereco" id="endereco">
                </div>
                <button type="submit" class="btn btn-success" name="btnSalvar">Salvar</button>
                <button type="submit" class="btn btn-danger" name="btnExcluir">Excluir</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>