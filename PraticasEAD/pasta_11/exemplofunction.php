<?php


require_once 'file_function.php';


if(isset($_POST['btnSomar'])){
    $numero1 = trim($_POST['v1']);
    $numero2 = trim($_POST['v2']);
   
   
    if($numero1 == '' || $numero2 == ''){
        $msgError = '<strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
    }else{
        $resultadoSoma = SomarValoresExemplo($numero1, $numero2);
    }
}


    ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Arquivo de Function</title>
</head>
<body style="font-family: tahoma;">
   
<h2>Soma Simples:</h2>


  <?= isset($msgError) ? $msgError : '' ?>


    <form action="exemplo.php" method="POST">
        <p>
            <label>Digite o 1° Valor:</label>
            <input type="number" name="v1" value="<?= isset($numero1) ? $numero1 : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 2° Valor:</label>
            <input type="number" name="v2" value="<?= isset($numero1) ? $numero1 : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnSomar">SOMAR</button>
        </p>


    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= isset($resultadoSoma) ? $resultadoSoma : '' ?>">
</body>
</html>

