<?php


require_once 'DAO/MovimentoDAO.php';


if (isset($_POST['btnRealizarMovimento'])) {
    $tipo = $_POST['tipo'];
    $data = $_POST['data'];
    $valor = trim($_POST['valor']);
    $categoria = $_POST['categoria'];
    $empresa = $_POST['empresa'];
    $conta = $_POST['conta'];
    $obs = trim($_POST['obs']);

    $objDAO = new MovimentoDAO();
    $ret = $objDAO->RealizarMovimento($tipo, $data, $valor, $categoria, $empresa, $conta, $obs);
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
                        <h2>Realizar Movimentação Financeira (Fluxo de Caixa)</h2>
                        <h5>Aqui você poderá realizar seus movimentos de entrada e saída</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr>
                <form role="form" action="realizar_movimento.php" method="POST">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione o Movimento Financeiro:</label>
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="" <?= !isset($tipo) || $tipo === '' ? 'selected' : '' ?>>Selecione</option>
                                <option value="1" <?= isset($tipo) && $tipo == 1 ? 'selected' : '' ?>>Entrada</option>
                                <option value="2" <?= isset($tipo) && $tipo == 2 ? 'selected' : '' ?>>Saída</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Selecione a Data:</label>
                            <input type="date" class="form-control" name="data" id="data" value="<?= isset($data) ? $data : '' ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Digite o Valor ($):</label>
                            <input type="text" class="form-control" placeholder="Digite o Valor aqui..." name="valor" id="valor" value="<?= isset($valor) ? $valor : '' ?>">
                        </div>
                        <div class="form-group">
                            <label>Selecione uma Categoria Financeira:</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <option value="" <?= !isset($categoria) || $categoria === '' ? 'selected' : '' ?>>Selecione</option>
                                <option value="1" <?= isset($categoria) && $categoria == 1 ? 'selected' : '' ?>>Teste</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione uma Empresa:</label>
                            <select class="form-control" name="empresa" id="empresa">
                                <option value="" <?= !isset($empresa) || $empresa === '' ? 'selected' : '' ?>>Selecione</option>
                                <option value="1" <?= isset($empresa) && $empresa == 1 ? 'selected' : '' ?>>Teste</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Selecione uma Conta Bancária:</label>
                            <select class="form-control" name="conta" id="conta">
                                <option value="" <?= !isset($conta) || $conta === '' ? 'selected' : '' ?>>Selecione</option>
                                <option value="1" <?= isset($conta) && $conta == 1 ? 'selected' : '' ?>>Teste</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Digite uma Observação (opicional):</label>
                            <textarea class="form-control" rows="6" placeholder="Digite uma Obeservação aqui..." name="obs"><?= isset($obs) ? $obs : '' ?></textarea>
                        </div>
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-success" name="btnRealizarMovimento" onclick="return ValidarRealizarMovimento()">Realizar Movimento</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>