<?php
require_once 'DAO/UtilDAO.php';

    $objDAO = new UtilDAO();
    $ret = $objDAO->UsuarioLogado();

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
                        <h2>Sistema de Controle Financeiro.</h2>
                        <h5>Seja bem vindo(a) [nome_usuario], os módulos de trabalho você encontra no MENU lateral.</h5>
                         <?php include_once '_msg.php'; ?>
                        <form role="form" action="inicial.php" method="POST">
                    </div>
                </div>
                <hr/>
            </div>
        </div>
    </div>
</body>
<form/>

</html>