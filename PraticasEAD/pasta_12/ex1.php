<?php


    require_once 'ClassDAO.php';


    $tipo_gas = '';


    if(isset($_POST['btnCalcular'])){
        $tipo_gas = $_POST['tipo_gas'];
        $litros = trim($_POST['litros']);


        $objDAO = new ClassDAO();
        $total = $objDAO->CalcularCombustivel($tipo_gas, $litros);


        if($total == 'vazio'){
            $noticar_msg = '<strong style="color: #FF0000;">Preencher o campo obrigatório!</strong>';
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
    <h2>Calculo de Combustível:</h2>


    <!-- Validações de Campos! -->
    <?= isset($noticar_msg) ? $noticar_msg : '' ?>
    <!-- Fim das Validações de Campos! -->        


    <form action="1_atividade.php" method="POST">
        <p>
            <label>Selecione o Tipo do Combustível:</label>
            <select name="tipo_gas">
                <option value="">Selecione</option>
                <option value="1" <?= $tipo_gas == 1 ? 'selected' : '' ?>>Etanol</option>
                <option value="2" <?= $tipo_gas == 2 ? 'selected' : '' ?>>Gasolina</option>
                <option value="3" <?= $tipo_gas == 3 ? 'selected' : '' ?>>Diesel</option>
            </select>
        </p>
        <p>
            <label>Informa a Quantidade de Litros:</label>
            <input type="number" name="litros" value="<?= isset($litros) ? $litros : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnCalcular">Calcular</button>
        </p>
    </form>


    <?php if(isset($total) && $total != 'vazio'){ ?>
        <strong>Resultado Final:</strong>
        <input disabled value="R$ <?= number_format($total, 2, ',', '.') ?>">
    <?php } ?>
</body>
</html>

