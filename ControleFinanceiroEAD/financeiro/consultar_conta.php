<?php
require_once 'DAO/ContaDAO.php';

if (isset($_POST['btnAlterar'])) {
	

	$objDAO = new ContaDAO();
	$ret = $objDAO->ConsultarConta();
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
                        <h2>Consultar Contas Bancárias</h2>
                        <h5>Consulte todas as suas contas cadastradas aqui. </h5>
                         <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr>
                <form role="form" action="consultar_conta.php" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span>Contas cadastradas. Caso deseje alterar, clique no botão.</span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Banco</th>
                                                <th>Agência</th>
                                                <th>Número da Conta</th>
                                                <th>Saldo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>[exemplo]</td>
                                                <td>[exemplo]</td>
                                                <td>[exemplo]</td>
                                                <td>[exemplo]</td>
                                                <td>
                                                    <a href="alterar_conta.php" class="btn btn-warning" name="btnAlterar">Alterar</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <form/>
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
</body>

</html>