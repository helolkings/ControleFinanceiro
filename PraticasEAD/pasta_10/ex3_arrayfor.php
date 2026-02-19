<?php

if(isset($_POST['btnExecutar'])){
    $ganhosOut = trim($_POST['ganhosOut']);
    $ganhosNov = trim($_POST['ganhosNov']);
    $ganhosDez = trim($_POST['ganhosDez']);
    $descontosOut = trim($_POST['descontosOut']);
    $descontosNov = trim($_POST['descontosNov']);
    $descontosDez = trim($_POST['descontosDez']);

    if(
        empty($ganhosOut) || empty($ganhosNov) || empty($ganhosDez) ||
        empty($descontosOut) || empty($descontosNov) || empty($descontosDez)
    ){
        $msgError = '<strong style="color: #FF0000;">Preencher o campo obrigatório!</strong>';
    }else if(
        !is_numeric($ganhosOut) || !is_numeric($ganhosNov) || !is_numeric($ganhosDez) ||
        !is_numeric($descontosOut) || !is_numeric($descontosNov) || !is_numeric($descontosDez)
    ){
        $msgError = '<strong style="color: #FF0000;">Digite apenas caracteres numéricos!</strong>';
    }else{
        
        // Vamos criar todos os Arrays para manipular os dados!
        $vendas = array($ganhosOut, $ganhosNov, $ganhosDez);
        $descontos = array($descontosOut, $descontosNov, $descontosDez);
        $mesesString = array('Outubro', 'Novembro', 'Dezembro');
        $valoresFinais = array();

        // Texto de informação dos dados executados no FOR.
        $rotulo = '<hr><h3>Valor Final das Vendas:</h3>';

        for($i=0; $i < count($vendas); $i++){
            $valorFinalFOR = $vendas[$i] - ($vendas[$i] * ($descontos[$i] / 100));
            $valoresFinais[$i] = number_format($valorFinalFOR, 2, ',', '.');
            $rotulo .= 'Resultado de ' . $mesesString[$i] . ': R$ ' . $valoresFinais[$i] . '<br>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7 - Laço de Repetição & Array</title>
</head>
<body style="font-family: Tahoma;">
    <h2>Informe os valores de Venda e Desconto:</h2>
    <form action="7_exer_laco_rep_array.php" method="POST">
        <p>
            <label>Digite os Valores do Mês de Outubro (R$):</label><br>
            <input type="text" name="ganhosOut" value="<?= isset($ganhosOut) ? $ganhosOut : '' ?>" placeholder="Digite aqui...">
            <br>
            <label>Digite os Descontos do Mês de Outubro (%):</label><br>
            <input type="text" name="descontosOut" value="<?= isset($descontosOut) ? $descontosOut : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite os Valores do Mês de Novembro (R$):</label><br>
            <input type="text" name="ganhosNov" value="<?= isset($ganhosNov) ? $ganhosNov : '' ?>" placeholder="Digite aqui...">
            <br>
            <label>Digite os Descontos do Mês de Novembro (%):</label><br>
            <input type="text" name="descontosNov" value="<?= isset($descontosNov) ? $descontosNov : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite os Valores do Mês de Dezembro (R$):</label><br>
            <input type="text" name="ganhosDez" value="<?= isset($ganhosDez) ? $ganhosDez : '' ?>" placeholder="Digite aqui...">
            <br>
            <label>Digite os Descontos do Mês de Dezembro (%):</label><br>
            <input type="text" name="descontosDez" value="<?= isset($descontosDez) ? $descontosDez : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnExecutar">EXECUTAR</button>
        </p>
    </form>

    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($rotulo) ? $rotulo : '' ?>
    </body>
</html>

