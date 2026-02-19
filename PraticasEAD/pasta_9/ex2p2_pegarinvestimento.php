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
        $msgWarning = '<strong style="color: #f40000;">Digite apenas caracteres NUMERICOS!</strong>';
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
    <title>2ª Página</title>
</head>
<body style="font-family: Tahoma;">
    <h2>Informações da Operação Financeira:</h2>

    <!-- ------- Validação de Campos! ------- -->
    <?= isset($msgWarning) ? $msgWarning : '' ?>
    <!-- ---- Fim da Validação de Campos! ---- -->

    <form action="ex2p2_pegarinvestimento.php" method="POST">
        <p>
            <label>Digite seu Nome:</label>
            <input type="text" name="nome" value="<?= isset($nome_usuario) ? $nome_usuario : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o Valor da Operação:</label>
            <input type="text" name="valor" value="<?= isset($investimento) ? $investimento : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Tipo da Operação:</label>
            <select name="sigla_op">
                <option value="">Selecione</option>
                <option value="G">Ganho</option>
                <option value="P">Perda</option>
            </select>
        </p>
        <p>
            <label>Escolha um Banco:</label>
            <select name="sigla_banco">
                <option value="">Selecione</option>
                <option value="SA">Santander</option>
                <option value="IT">Itaú</option>
                <option value="SI">Sicredi</option>
            </select>
        </p>
        <p>
            <button type="submit" name="btnEnviar">Enviar</button>
        </p>
    </form>
</body>
</html>
