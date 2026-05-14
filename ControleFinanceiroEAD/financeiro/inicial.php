<?php
require_once 'DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
//$ret = $objDAO->UsuarioLogado();
require_once 'DAO/MovimentoDAO.php';
$objDAO = new MovimentoDAO;
$total_entrada = $objDAO->TotalDeEntrada();
$total_saida = $objDAO->TotalDeSaida();
$movs = $objDAO->UltimosMovimentos();

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
                        <h2>Sistema de Controle Financeiro</h2>
                        <h5>Olá, <?= UtilDAO::NomeLogado() ?>. Os módulos de trabalho você encontra no MENU lateral.</h5>
                        <?php include_once '_msg.php'; ?>
                        <form role="form" action="inicial.php" method="POST">
                    </div>
                </div>
                <hr />

                <hr>
                <div class="row">

                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center;">
                                <b>BALANÇO DE ENTRADAS E SAÍDAS (%)</b>
                            </div>
                            <div class="panel-body" style="background-color: #f5f5f5;">
                                <div id="morris-donut-chart" style="cursor: pointer;"></div>
                            </div>
                        </div>
                       <script>

    const entrada = <?= $total_entrada[0]['total'] != '' ? $total_entrada[0]['total'] : 0 ?>;
    const saida = <?= $total_saida[0]['total'] != '' ? $total_saida[0]['total'] : 0 ?>;
    const total = entrada + saida;

    Morris.Donut({
        element: 'morris-donut-chart',

        data: total == 0
            ? [{ label: "SEM DADOS", value: 100 }]
            : [
                { label: "Entradas", value: entrada },
                { label: "Saídas", value: saida }
            ],

        colors: total == 0
            ? ['#dcdcdc']
            : ['#28a745', '#dc3545'],

        formatter: function(value) {

            if(total == 0){
                return '0%';
            }

            const porcentagem = ((value / total) * 100).toFixed(1);

            return porcentagem + '%';
        }
    });

</script>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-arrow-up fa-5x"></i>
                                <h3>R$ <?= $total_entrada[0]['total'] != '' ? number_format($total_entrada[0]['total'], 2, ',', '.') : '0' ?> </h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                TOTAL DE ENTRADAS
                            </div>
                        </div>
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa-arrow-down fa-5x"></i>
                                <h3>R$ <?= $total_saida[0]['total'] != '' ? number_format($total_saida[0]['total'], 2, ',', '.') : '0' ?> </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                TOTAL DE SAÍDAS
                            </div>
                        </div>
                    </div>
                    </div>
                    <hr>
                    <?php if (count($movs) > 0) { ?>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <b>Últimos 10 Movimentos</b>
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
                                                        <!-- <th>Observação</th> -->

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
                                                            <!-- <td><?= $movs[$i]['obs_movimento'] ?></td> -->
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
                        <?php } else { ?>
                            <div class="alert alert-info text-center col-md-12">
                                Não existe nenhum movimento para ser exibido.
                            </div>
                        <?php } ?>
                        </div>
                </div>
            </div>
        </div>
</body>
</form>

</html>