<?php

require_once 'DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once 'DAO/MovimentoDAO.php';
require_once 'DAO/CategoriaDAO.php';
require_once 'DAO/EmpresaDAO.php';
require_once 'DAO/ContaDAO.php';

$daocat = new CategoriaDAO();
$daoemp = new EmpresaDAO();
$daocon = new ContaDAO();



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

$categorias = $daocat->ConsultarCategoria();
$empresas = $daoemp->ConsultarEmpresa();
$contas = $daocon->ConsultarConta();


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
                            <input type="text" class="form-control" placeholder="Digite o Valor aqui..." name="valor" id="valor" maxlength="60" value="<?= isset($valor) ? $valor : '' ?>">
                        </div>
                        <div class="form-group">
                            <label>Selecione uma Categoria Financeira:</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <option value="" <?= !isset($categoria) || $categoria === '' ? 'selected' : '' ?>>Selecione</option>
                                <?php foreach ($categorias as $item) { ?>
                                    <option value="<?= $item['id_categoria'] ?>"> <?= $item['nome_categoria'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione uma Empresa:</label>
                            <select class="form-control" name="empresa" id="empresa">
                                <option value="" <?= !isset($empresa) || $empresa === '' ? 'selected' : '' ?>>Selecione</option>
                                <?php foreach ($empresas as $item) { ?>
                                    <option value="<?= $item['id_empresa'] ?>"> <?= $item['nome_empresa'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Selecione uma Conta Bancária:</label>
                            <select class="form-control" name="conta" id="conta">
                                <option value="" <?= !isset($conta) || $conta === '' ? 'selected' : '' ?>>Selecione</option>
                                <?php foreach ($contas as $item) { ?>
                                <option value="<?= $item['id_conta'] ?>"> 
                                <?= 'Banco: ' . $item['banco_conta']  . ', ' . 'Agência: ' . $item['agencia_conta']  . ' / ' . 'Número: ' . $item['numero_conta']  ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Digite uma Observação (opicional):</label>
                            <textarea class="form-control" rows="6" placeholder="Digite uma Obeservação aqui..." maxlength="250" name="obs"><?= isset($obs) ? $obs : '' ?></textarea>
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