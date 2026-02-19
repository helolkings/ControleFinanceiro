<?php

if(isset($_POST['btnExecutar'])){
    $nome = trim($_POST['nome']);
    $idade = trim($_POST['idade']);
    $numero = trim($_POST['numero']);

    if($nome == '' || $idade == '' || $numero == ''){
        $msgWarning = '<strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
    }else if(is_numeric($nome)){
        $msgWarning = '<strong style="color: #f40000;">Digite apenas caracteres de TEXTO!</strong>';
    }else if(!is_numeric($idade) || !is_numeric($numero)){
        $msgWarning = '<strong style="color: #f40000;">Digite apenas caracteres NUMÉRICOS!</strong>';
    }else{

        for($i = 1; $i <= $numero; $i++){
            echo '<ol>
                    <li>Nome: ' . $nome . '</li>
                    <li>Idade: ' . $idade . '</li>
                    <li>Quantidade de Repetições: ' . $numero . '</li>
                  </ol>';
        }

        echo '<hr>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3ª Atividade</title>
</head>
<body style="font-family: Tahoma;">
    <h2>Configurando Repetições com FOR:</h2>

    <!-- ------ Validação de Campos! ------ -->
    <?= isset($msgWarning) ? $msgWarning : '' ?>
    <!-- --- Fim da Validação de Campos! --- -->

    <form action="ex2_lacofor.php" method="POST">
        <p>
            <label>Digite seu Nome:</label>
            <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>" placeholder="Digite aqui...">
        </p>

        <p>
            <label>Digite sua Idade:</label>
            <input type="number" name="idade" value="<?= isset($idade) ? $idade : '' ?>" placeholder="Digite aqui...">
        </p>

        <p>
            <label>Digite um Número Qualquer:</label>
            <input type="number" name="numero" value="<?= isset($numero) ? $numero : '' ?>" placeholder="Digite aqui...">
        </p>

        <button type="submit" name="btnExecutar">Executar</button>
    </form>
</body>
</html>
