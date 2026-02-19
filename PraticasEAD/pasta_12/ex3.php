<?php


    require_once 'ClassDAO.php';


    if(isset($_POST['btnCalcular'])){
        $meses = trim($_POST['meses']);
        $ganhos = trim($_POST['ganhos']);
        $lucro = trim($_POST['lucro']);
        $perda = trim($_POST['perda']);


        $objDAO = new ClassDAO();
        $retorno = $objDAO->CalcularSalario($meses, $ganhos, $lucro, $perda);


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
    <title>3ª Atividade</title>
</head>
<body style="font-family: Tahoma">
    <h2>Calculo de Faturamento:</h2>


    <!-- Validações de Campos! -->
    <?= isset($noticar_msg) ? $noticar_msg : '' ?>
    <!-- Fim das Validações de Campos! -->  


    <form action="3_atividade.php" method="POST">
        <p>
            <label>Meses trabalhados:</label>
            <input type="text" name="meses" value="<?= isset($meses) ? $meses : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho Médio Mensal:</label>
            <input type="text" name="ganhos" value="<?= isset($ganhos) ? $ganhos : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Percentual de Lucro Total (%):</label>
            <input type="text" name="lucro" value="<?= isset($lucro) ? $lucro : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Percentual de Perda Total (%):</label>
            <input type="text" name="perda" value="<?= isset($perda) ? $perda : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnCalcular">CALCULAR</button>
        </p>
    </form>
    <?php if(isset($retorno) && $retorno != 'vazio'){ ?>
        <strong>Resultado Final:</strong>
        <input disabled value="R$ <?= $retorno ?>">
    <?php } ?>
</body>
</html>

