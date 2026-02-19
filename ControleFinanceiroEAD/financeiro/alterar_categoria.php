<?php
require_once 'DAO/CategoriaDAO.php';

if (isset($_POST['btnExcluir']));
else if (isset($_POST['btnSalvar'])) {
	$nomectg = trim($_POST['nomectg']);

	$objDAO = new CategoriaDAO();
	$ret = $objDAO->AlterarCategoria($nomectg);
	$ret = $objDAO->ExcluirCategoria($nomectg); 
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
                <div class="form-group">
                    <label>Nome da Categoria:</label>
                    <input type="text" class="form-control" name="nomectg" id="nomectg" placeholder="Digite o Nome da Categoria Financeira aqui...">
                        </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar">Salvar</button>
                    <button type="submit" class="btn btn-danger" name="btnExcluir">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>