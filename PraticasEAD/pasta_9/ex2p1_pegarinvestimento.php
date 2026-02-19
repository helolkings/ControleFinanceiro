<?php
if(isset($_POST['btnEnviar'])){
    $nome_usuario = trim($_POST['nome']);
    $investimento = trim($_POST['valor']);
    $sigla_op = trim($_POST['sigla_op']);
    $sigla_banco = trim($_POST['sigla_banco']);

    if($nome_usuario == '' || $investimento == '' || $sigla_op == '' || $sigla_banco == ''){
        $msgWarning = '<strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
    }else if(is_numeric($nome_usuario) || is_numeric($sigla_op) || is_numeric($sigla_banco)){
        $msgWarning = '<strong style="color: #f40000;">Digite apenas caracteres de TEXTO!</strong>';
    }else if(!is_numeric($investimento)){
        $msgWarning = '<strong style="color: #f40000;">Digite apenas caracteres NUMÉRICOS!</strong>';
    }else if($sigla_op != 'G' && $sigla_op != 'P'){
        $msgWarning = '<strong style="color: #f40000;">Digite apenas as SIGLAS G ou P!</strong>';
    }else if(
        $sigla_banco != 'SA' && $sigla_banco != 'IT' && $sigla_banco != 'SI' &&
        $sigla_banco != 'sa' && $sigla_banco != 'it' && $sigla_banco != 'si'
    ){
        $msgWarning = '<strong style="color: #f40000;">Digite apenas as SIGLAS SA, IT ou SI!</strong>';
    }else{
        header("location: ex2p3_pegarinvestimento.php?user=$nome_usuario&valor=$investimento&opr=$sigla_op&banco=$sigla_banco");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1ª Página</title>
</head>
<body style="font-family: Tahoma;">
    <h2>Informações de Operação Financeira:</h2>

    <!-- ------ Validação de Campos! ------ -->
    <?= isset($msgWarning) ? $msgWarning : '' ?>
    <!-- ------ Fim da Validação de Campos! ------ -->

    <form action="ex2p1_pegarinvestimento.php" method="POST">
        <p>
            <label>Digite seu Nome:</label>
            <input type="text" name="nome" value="<?= isset($nome_usuario) ? $nome_usuario : '' ?>" placeholder="Digite aqui...">
        </p>

        <p>
            <label>Digite o Valor da Operação:</label>
            <input type="text" name="valor" value="<?= isset($investimento) ? $investimento : '' ?>" placeholder="Digite aqui...">
        </p>

        <p>
            <h3>Tipo da Operação:</h3>
            <ul>
                <li>Ganho (Sigla G): 3%.</li>
                <li>Perda (Sigla P): 5%.</li>
            </ul>
            <input type="text" name="sigla_op" value="<?= isset($sigla_op) ? $sigla_op : '' ?>" placeholder="Digite aqui...">
        </p>

        <p>
            <h3>Escolha um Banco:</h3>
            <ul>
                <li>Santander (Sigla SA).</li>
                <li>Itáu (Sigla IT).</li>
                <li>Sicredi (Sigla SI).</li>
            </ul>
            <input type="text" name="sigla_banco" value="<?= isset($sigla_banco) ? $sigla_banco : '' ?>" placeholder="Digite aqui...">
        </p>

        <button type="submit" name="btnEnviar">Enviar</button>
    </form>
</body>
</html>
