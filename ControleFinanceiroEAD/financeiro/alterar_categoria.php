<?php

require_once 'DAO/CategoriaDAO.php';
$objDAO = new CategoriaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {
	$dados = $objDAO->DetalharCategoria($_GET['cod']);
if (count($dados) == 0) {
    header("location: consultar_categoria.php");
    exit;
}
}

else if (isset($_POST['btnSalvar'])){
    $id = $_POST['cod'];
	$nomeCat = trim($_POST['nomectg']);

    $ret = $objDAO->AlterarCategoria($nomeCat, $id);
    header("location: consultar_categoria.php?ret=$ret");
    exit;
} else {
    header("location: consultar_categoria.php");
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
                        <h2>Alterar/Excluir uma Categoria Financeira</h2>
                        <h5>Aqui você poderá alterar ou excluir todas as suas categorias.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr>
                <form role="form" action="alterar_categoria.php" method="POST">
                    <input type="hidden" value="<?=  $dados[0]['id_categoria'] ?>" name="cod">
                <div class="form-group">
                    <label>Nome da Categoria:</label>
                    <input type="text" class="form-control" name="nomectg" id="nomectg" placeholder="Digite o Nome da Categoria Financeira aqui..." value="<?= $dados[0]['nome_categoria'] ?>">
                        </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarAlterarCadastrarCategoria()">Salvar</button>
                    <button type="submit" class="btn btn-danger" name="btnExcluir">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>