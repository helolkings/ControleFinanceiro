<?php

//$numero = 100;
//echo number_format($numero, 2, ',', '.');

require_once 'DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once 'DAO/MovimentoDAO.php';


$tipoMov = '';
$dtInicio = '';
$dtFinal = '';


if (isset($_POST['btnPesquisar'])) {
    $tipoMov = $_POST['tipoMov'];
    $dtInicio = $_POST['dtInicio'];
    $dtFinal = $_POST['dtFinal'];

    $objDAO = new MovimentoDAO();
    $movs = $objDAO->ConsultarMovimento($tipoMov, $dtInicio, $dtFinal);

}else if (isset($_POST['btnExcluir'])) {
    $idMov = $_POST['idMov'];
    $idConta = $_POST['idConta'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];

    $objDAO = new MovimentoDAO();
    $ret = $objDAO->ExcluirMovimento($idMov, $idConta, $valor, $tipo);
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
                    <?php if (isset($movs) && count($movs) > 0) { ?>
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
                                                        <th>Data </th>
                                                        <th>Movimento</th>
                                                        <th>Categoria</th>
                                                        <th>Empresa</th>
                                                        <th>Conta Bancária</th>
                                                        <th>Valor </th>
                                                        <th>Observação</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $total = 0;
                                                    for ($i = 0; $i < count($movs); $i++) {
                                                        if ($movs[$i]['tipo_movimento'] == 1) {
                                                            $total = $total + $movs[$i]['valor_movimento'];
                                                        } else {
                                                            $total = $total - $movs[$i]['valor_movimento'];
                                                        }
                                                    ?>
                                                        <tr class="odd gradeX">
                                                            <td><?= $movs[$i]['data_movimento'] ?></td>
                                                            <td><?= $movs[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?></td>
                                                            <td><?= $movs[$i]['nome_categoria'] ?></td>
                                                            <td><?= $movs[$i]['nome_empresa'] ?></td>
                                                            <td><?= $movs[$i]['banco_conta'] ?> / Ag. <?= $movs[$i]['agencia_conta'] ?> - Núm. <?= $movs[$i]['numero_conta'] ?></td>
                                                            <td>R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?></td>
                                                            <td><?= $movs[$i]['obs_movimento'] ?></td>
                                                            <td>
                                                                <a href="#" class="btn btn-danger" name="btnExcluir" data-toggle="modal" data-target="#modalExcluir<?= $i ?>">Excluir</a>
                                                                <form role="form" action="consultar_movimento.php" method="POST">
                                                                    <input type="hidden" name="idMov" value="<?= $movs[$i]['id_movimento'] ?>">
                                                                    <input type="hidden" name="idConta" value="<?= $movs[$i]['id_conta'] ?>">
                                                                    <input type="hidden" name="valor" value="<?= $movs[$i]['valor_movimento'] ?>">
                                                                    <input type="hidden" name="tipo" value="<?= $movs[$i]['tipo_movimento'] ?>">
                                                                    <div class="modal fade" id="modalExcluir<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                    <h4 class="modal-title" id="myModalLabel">Confirmação de Exclusão</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Realmente deseja excluir o movimento: <br><br>
                                                                                    <b>Data do Movimento:</b> <?= $movs[$i]['data_movimento'] ?><br>
                                                                                    <b>Tipo do Movimento:</b> <?= $movs[$i]['tipo_movimento'] ?><br>
                                                                                    <b>Categoria:</b> <?= $movs[$i]['nome_categoria'] ?><br>
                                                                                    <b>Empresa:</b> <?= $movs[$i]['nome_empresa'] ?><br>
                                                                                    <b>Conta:</b> <?= $movs[$i]['banco_conta'] ?> / Ag. <?= $movs[$i]['agencia_conta'] ?> - Núm. <?= $movs[$i]['numero_conta'] ?><br>
                                                                                    <b>Valor:</b> R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?><br>
                                                                                    <!-- <b>Observação:</b> <?= $movs[$i]['obs_movimento'] ?><br> -->
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                                    <button type="submit" class="btn btn-primary" name="btnExcluir">Sim</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        <center>
                                            <label style="color: <?= $total < 0 ? 'red' : 'green' ?>"> TOTAL: R$ <?= number_format($total, 2, ',', '.') ?></label>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php } else if (isset($_POST['btnPesquisar'])) { ?>
                            <div class="alert alert-info text-center col-md-12">
                                Não existe nenhum movimento para ser exibido.
                            </div>
                        <?php } ?>
                 </div>
             </div>
         </div>
   </div>
</body>
</html>