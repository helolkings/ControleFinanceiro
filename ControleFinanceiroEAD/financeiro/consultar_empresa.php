<?php

require_once 'DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once 'DAO/EmpresaDAO.php';


//if (isset($_POST['btnAlterar'])) {
   
    $objDAO = new EmpresaDAO();
    $empresas = $objDAO->ConsultarEmpresa();
    
//}
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
                        <h2>Consultar Empresa</h2>
                        <h5>Consulte todas as suas Empresas aqui. </h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr>
                <form role="form" action="consultar_empresa.php" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Empresas cadastradas. Caso deseje alterar, clique no botão.
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nome da Empresa</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i = 0; $i<count($empresas) ; $i++){ ?>
                                            <tr class="odd gradeX">
                                                <td><?= $empresas[$i]['nome_empresa'] ?></td>
                                                <td><?= $empresas[$i]['telefone_empresa'] ?></td>
                                                <td><?= $empresas[$i]['endereco_empresa'] ?></td>
                                                <td>
                                                    <a href="alterar_empresa.php?cod=<?=  $empresas[$i]['id_empresa'] ?>" class="btn btn-warning btn-sm" name="btnAlterar">Alterar</a>
                                                </td>
                                            </tr>
                                             <?php } ?>
                                        </tbody>
                                    </table>
                                    </form>
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