<?php
if(isset($_POST['btnEnviar'])){
    $fruta_1 = trim($_POST['fruta_1']);
    $fruta_2 = trim($_POST['fruta_2']);
    $fruta_3 = trim($_POST['fruta_3']);
    $fruta_4 = trim($_POST['fruta_4']);
    $fruta_5 = trim($_POST['fruta_5']);

    if($fruta_1 == '' || $fruta_2 == '' || $fruta_3 == '' || $fruta_4 == '' || $fruta_5 == ''){
        $msgWarning = '<strong style="color:#f40000;">Preencher todos os campos obrigatórios!</strong>';
    }else if(is_numeric($fruta_1) || is_numeric($fruta_2) || is_numeric($fruta_3) || is_numeric($fruta_4) || is_numeric($fruta_5)){
        $msgWarning = '<strong style="color:#f40000;">Digite apenas caracteres de TEXTO!</strong>';
    }else{
        // Variável Array!
        $frutas = array($fruta_1, $fruta_2, $fruta_3, $fruta_4, $fruta_5);

        for($i=0; $i < count($frutas); $i++){
            echo 'Fruta salva na posição ' . $i . ' é a Fruta ' . $frutas[$i] . '.<br>';
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
    <title>1ª Atividade</title>
</head>
<body style="font-family: Tahoma;">
<h2>Relatório de Frutas:</h2>

<!-- Validação de Campos! ----- -->
<?= isset($msgWarning) ? $msgWarning : '' ?>
<!-- Fim da Validação de Campos! -->

<form action="ex1_frutas.php" method="POST">
    <p>
        <label>Digite o Nome da 1ª Fruta:</label>
        <input type="text" name="fruta_1" value="<?= isset($fruta_1) ? $fruta_1 : '' ?>" placeholder="Digite aqui...">
    </p>

    <p>
        <label>Digite o Nome da 2ª Fruta:</label>
        <input type="text" name="fruta_2" value="<?= isset($fruta_2) ? $fruta_2 : '' ?>" placeholder="Digite aqui...">
    </p>

    <p>
        <label>Digite o Nome da 3ª Fruta:</label>
        <input type="text" name="fruta_3" value="<?= isset($fruta_3) ? $fruta_3 : '' ?>" placeholder="Digite aqui...">
    </p>

    <p>
        <label>Digite o Nome da 4ª Fruta:</label>
        <input type="text" name="fruta_4" value="<?= isset($fruta_4) ? $fruta_4 : '' ?>" placeholder="Digite aqui...">
    </p>

    <p>
        <label>Digite o Nome da 5ª Fruta:</label>
        <input type="text" name="fruta_5" value="<?= isset($fruta_5) ? $fruta_5 : '' ?>" placeholder="Digite aqui...">
    </p>

    <button type="submit" name="btnEnviar">Enviar</button>
</form>
</body>
</html>
