<?php


require_once 'DAO/UsuarioDAO.php';


if (isset($_POST['btnAcessar'])) {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    $objDAO = new UsuarioDAO();
    $ret = $objDAO->ValidarLogin($email, $senha);
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>


<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br>
                <br>
                <h2>Sistema de Controle Financeiro</h2>
                <h5>(Faça seu Login de Acesso)</h5>
                <br>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Preencha todos os dados solicitados</strong>
                    </div>
                    <div class="panel-body">
                        <!-- chama as mgs de validaçao -->
                        <?php include_once '_msg.php'; ?>
                        <br/>
                        <!-- alteração para encontrar a pag -->
                        <form role="form" action="index.php" method="POST">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <!-- name e id no imput -->
                                <input type="email" class="form-control" placeholder="Digite Seu E-mail aqui..." name="email" id="email" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <!-- name e id no imput -->
                                <input type="password" class="form-control" placeholder="Digite Sua Senha aqui..." name="senha" id="senha" />
                            </div>
                            <!-- name btn no button -->
                            <button type="submit" class="btn btn-primary" name="btnAcessar" onclick="return ValidarLogin()">Acessar</button>
                        </form>
                        <span>Caso não tenha cadastro,</span> <a href="cadastro.php">Clique Aqui!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>