<?php
require_once 'DAO/UsuarioDAO.php';

if (isset($_POST['btnSalvar'])) {
	$nome = trim($_POST['nome']);
	$email = trim($_POST['email']);
	$senha = trim($_POST['senha']);
	$repsenha = trim($_POST['repsenha']);

	$objDAO = new UsuarioDAO();
	$ret = $objDAO->GravarMeusDados($nome, $email, $senha, $repsenha);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Chamada do Head e seus recursos! -->
<?php include_once '_head.php'; ?>
<body>
	<div id="wrapper">
		<?php
		include_once '_topo.php';
		include_once '_menu.php';
		?>
		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h2>Alterar Dados cadastrais.</h2>
						<h5>Altere aqui seus dados de cadastro.</h5>
						<?php include_once '_msg.php'; ?>
					</div>
				</div>
				<hr>
				<form role="form" action="meus_dados.php" method="POST">
					<div class="col-md-6">
						<div class="form-group">
							<label>Nome:</label>
							<input type="text" class="form-control" placeholder="Digite seu Nome aqui..." name="nome" id="nome">
						</div>
						<div class="form-group">
							<label>E-mail:</label>
							<input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="email" id="email">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Senha:</label>
							<input type="password" class="form-control" placeholder="Digite sua Senha aqui..." name="senha" id="senha">
						</div>
						<div class="form-group">
							<label>Repita sua Senha:</label>
							<input type="password" class="form-control" placeholder="Repita sua Senha aqui..." name="repsenha" id="repsenha">
						</div>
					</div>
					<div style="text-align: center;">
						<button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarCadastrarGravarDados()">Salvar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>