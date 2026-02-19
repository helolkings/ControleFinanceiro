<?php
require_once 'DAO/CategoriaDAO.php';

if (isset($_POST['btnSalvar'])) {
	$nomectg = trim($_POST['nomectg']);

	$objDAO = new CategoriaDAO();
	$ret = $objDAO->CadastrarCategoria($nomectg);
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
						<h2>Nova Categoria</h2>
						<h5>Aqui você poderá cadastrar todas as suas Categorias.</h5>
						<?php include_once '_msg.php'; ?>
					</div>
				</div>
				<!-- /. ROW  -->
				<hr>
				<form role="form" action="nova_categoria.php" method="POST">
					<div class="form-group">
						<label>Nome da Categoria Financeira:</label>
						<input type="text" class="form-control" placeholder="Digite o Nome da Categoria aqui..." name="nomectg" id="nomectg">
					</div>
					<button type="submit" class="btn btn-success" name="btnSalvar">Salvar</button>
				</form>
			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
</body>
</html>