<?php


require_once 'DAO/MovimentoDAO.php';


if (isset($_POST['btnPesquisar'])) {
    $tipoMov = $_POST['tipoMov'];
    $dtInicio = $_POST['dtInicio'];
    $dtFinal = $_POST['dtFinal'];

    $objDAO = new MovimentoDAO();
    $ret = $objDAO->ConsultarMovimento($tipoMov, $dtInicio, $dtFinal);
}
?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>

<body>
    <div id="wrapper">
        <?php include_once '_topo.php'; ?>
        <?php include_once '_menu.php'; ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Consultar Movimento Financeiro</h2>
                        <h5>Consulte aqui todos os movimentos financeiros realizados</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr>
                <form role="form" action="consultar_movimento.php" method="POST">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione o Movimento Financeiro:</label>
                            <select class="form-control" name="tipoMov" id="tipoMov">
                                <option value="">Selecione</option>
                                <option value="0" <?= isset($tipoMov) && $tipoMov == 0 ? 'selected' : '' ?>>TODOS</option>
                                <option value="1" <?= isset($tipoMov) && $tipoMov == 1 ? 'selected' : '' ?>>Entrada</option>
                                <option value="2" <?= isset($tipoMov) && $tipoMov == 2 ? 'selected' : '' ?>>Saída</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione uma Data de Início:</label>
                            <input type="date" class="form-control" name="dtInicio" id="dtInicio" value="<?= isset($dtInicio) ? $dtInicio : '' ?>" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione uma Data Final:</label>
                            <input type="date" class="form-control" name="dtFinal" id="dtFinal" value="<?= isset($dtFinal) ? $dtFinal : '' ?>" />
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary" name="btnPesquisar" onclick="return ValidarConsultarMovimento()">Pesquisar</button>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Resultado Encontrado
                                </div>

                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Tipo do Movimento</th>
                                                    <th>Data</th>
                                                    <th>Valor</th>
                                                    <th>Observação</th>
                                                    <th>Categoria Financeira</th>
                                                    <th>Empresa</th>
                                                    <th>Conta Bancária</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>[exemplo]</td>
                                                    <td>[exemplo]</td>
                                                    <td>[exemplo]</td>
                                                    <td>[exemplo]</td>
                                                    <td>[exemplo]</td>
                                                    <td>[exemplo]</td>
                                                    <td>[exemplo]</td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger" name="btnExcluir">Excluir</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                     </form>
                               </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>