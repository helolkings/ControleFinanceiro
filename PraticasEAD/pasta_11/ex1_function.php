<?php


require_once 'file_function.php';


if(isset($_POST['btnEnviar'])){
    $nome = trim($_POST['nome']);
    $desc = trim($_POST['info']);
    $senha = trim($_POST['senha']);
    $repsenha = trim($_POST['repsenha']);
   
    if($nome == '' || $desc == '' || $senha == '' || $repsenha == ''){
        $msgError = '<strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
    }else if(ValidarNome($nome) == -1){
       $msgError = '<strong style="color: #f40000;">O NOME deve conter no mínimo 3 caracteres!</strong>';
    }else if(ValidarDescricao($desc) == -2){
       $msgError = '<strong style="color: #f40000;">A DESCRIÇÃO deve conter no mínimo 50 caracteres!</strong>';
    }else if(ValidarSenha($senha) == -3){
       $msgError = '<strong style="color: #f40000;">A SENHA deve conter entre 6 e 8 caracteres!</strong>';
    }else if(CompararSenhas($repsenha, $senha) == -4){
       $msgError = '<strong style="color: #f40000;">As SENHAS devem ser iguais!</strong>';
    }else{
       $msgError = '<strong style="color: #046b00ff;">Formulário preenchido com SUCESSO!</strong>';
    }
}


    ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 Function</title>
</head>
<body style="font-family: tahoma;">
   
<h2>Preencha os dados do Formulário:</h2>


  <?= isset($msgError) ? $msgError : '' ?>


    <form action="1ex.php" method="POST">
        <p>
            <label>Digite seu Nome:</label>
            <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite uma Descrição:</label>
            <input type="text" name="info" value="<?= isset($desc) ? $desc : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite uma Senha:</label>
            <input type="number" name="senha" value="<?= isset($senha) ? $senha : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Repita sua Senha:</label>
            <input type="number" name="repsenha" value="<?= isset($repsenha) ? $repsenha : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnEnviar">ENVIAR</button>
        </p>
    </form>
</body>
</html>

