<?php


require_once 'file_function.php';


if(isset($_POST['btnCalcular'])){
    $salario = trim($_POST['v1']);
    $aumento = trim($_POST['v2']);
   
   
    if($salario == '' || $aumento == ''){
        $msgError = '<strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
    }else{
        $resultadoSoma = CaclcularSalario ($salario, $aumento);
    }
}


    ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aividade 2</title>
</head>
<body style="font-family: tahoma;">
   
<h2>Soma Simples:</h2>


  <?= isset($msgError) ? $msgError : '' ?>


    <form action="2ex.php" method="POST">
        <p>
            <label>Digite o seu Salário:</label>
            <input type="number" name="v1" value="<?= isset($salario) ? $salario : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite a % de Aumento:</label>
            <input type="number" name="v2" value="<?= isset($aumento) ? $aumento : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnCalcular">CALCULAR</button>
        </p>


    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= isset($resultadoSoma) ? "R$ " . number_format($resultadoSoma, 2, ',', '.') : '' ?>">
</body>
</html>



