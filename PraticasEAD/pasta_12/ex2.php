<?php


    require_once 'ClassDAO.php';


    $unidade_medida = '';


    if(isset($_POST['btnConverter'])){
        $unidade_medida = $_POST['unidade_medida'];
        $temperatura = $_POST['qtd'];


        $objDAO = new ClassDAO();
        $retorno = $objDAO->Conversor($unidade_medida, $temperatura);


        if($retorno == 'vazio'){
            $noticar_msg = '<strong style="color: #FF0000;">Preencher o campo obrigatório!</strong>';
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2ª Atividade</title>
</head>
<body style="font-family: Tahoma">
    <h2>Conversor de Temperatura:</h2>


    <!-- Validações de Campos! -->
    <?= isset($noticar_msg) ? $noticar_msg : '' ?>
    <!-- Fim das Validações de Campos! -->  


    <form action="2_atividade.php" method="POST">
        <p>
            <label>Selecione uma Unidade de Medida:</label>
            <select name="unidade_medida">
                <option value="">Selecione</option>
                <option value="1" <?= $unidade_medida == 1 ? 'selected' : null ?>>Celsius -> Fahrenheit</option>
                <option value="2" <?= $unidade_medida == 2 ? 'selected' : null ?>>Fahrenheit -> Celsius</option>
            </select>
        </p>
        <p>
             <label>Quantidade de Temperatura:</label>
            <input type="number" name="qtd" value="<?= isset($temperatura) ? $temperatura : '' ?>" placeholder="Digite aqui">
        </p>
        <p>
            <button type="submit" name="btnConverter">CONVERTER</button>
        </p>
    </form>


    <?php if(isset($retorno) && $retorno != 'vazio'){ ?>
        <strong>Resultado Final:</strong>
        <input disabled value="<?= $retorno ?>">
    <?php } ?>
</body>
</html>

