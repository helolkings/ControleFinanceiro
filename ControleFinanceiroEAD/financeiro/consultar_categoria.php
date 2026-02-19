<?php
require_once 'DAO/CategoriaDAO.php';

if (isset($_POST['btnAlterar'])) {
	

	$objDAO = new CategoriaDAO();
	$ret = $objDAO->ConsultarCategoria();
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
                        <h2>Consultar Categoria</h2>
                        <h5>Consulte todas as suas Categorias cadastradas aqui.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr>
                <form role="form" action="consultar_categoria.php" method="POST">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Categorias cadastradas. Caso deseje alterar, clique no botão.</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome da categoria</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>[exemplo]</td>
                                        <td>
                                            <a href="alterar_categoria.php" class="btn btn-warning btn-sm" nome="btnAlterar" >Alterar</a>
                                        </td>
                                    </tr>
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