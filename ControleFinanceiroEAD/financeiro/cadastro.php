<?php
require_once 'DAO/UsuarioDAO.php';

if (isset($_POST['btnCadastrar'])) {
	$nome = trim($_POST['nome']);
	$email = trim($_POST['email']);
	$senha = trim($_POST['senha']);
	$repsenha = trim($_POST['repsenha']);

	$objDAO = new UsuarioDAO();
	$ret = $objDAO->CadastrarUsuario($nome, $email, $senha, $repsenha);
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>

<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<br>
				<h2>Cadastrar uma Conta de Usuário</h2>
				<h5>(Faça seu Cadastro aqui)</h5>
				<br/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Preencha todos os campos solicitados:</strong>
					</div>
					<div class="panel-body">
						<?php include_once '_msg.php'; ?>
						<form role="form" action="cadastro.php" method="POST">
							<br>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" placeholder="Digite seu Nome..." name="nome" id="nome" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">@</span>
								<input type="text" class="form-control" placeholder="Digite seu E-mail..." name="email" id="email" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" placeholder="Crie uma Senha (mínimo 6 caracteres)..." name="senha" id="senha" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" placeholder="Repita a Senha criada..." name="repsenha" id="repsenha" />
							</div>
							<button type="submit" class="btn btn-success" name="btnCadastrar" onclick="return ValidarCadastrarGravarDados()">Cadastrar</button>
						</form>
						<hr>
						<span>Já possui Cadastro?</span>
						<a href="index.php">Clique Aqui!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>