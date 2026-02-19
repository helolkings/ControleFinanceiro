<?php


require_once 'file_function.php';


if(isset($_POST['btnCalcular'])){
    $n1 = trim($_POST['n1']);
    $n2 = trim($_POST['n2']);
    $n3 = trim($_POST['n3']);
    $n4 = trim($_POST['n4']);
    $n5 = trim($_POST['n5']);
   
   
    if($n1 == '' || $n2 == '' || $n3 == ''|| $n4 == '' || $n5 == ''){
        $msgError = '<strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
    }else{
        $resultadoSoma = CaclcularSoma ($n1, $n2, $n3, $n4, $n5);
    }
}


    ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aividade 3</title>
</head>
<body style="font-family: tahoma;">
   
<h2>Soma Simples:</h2>


  <?= isset($msgError) ? $msgError : '' ?>


    <form action="ex3_function.php" method="POST">
        <p>
            <label>Digite o 1° número:</label>
            <input type="number" name="n1" value="<?= isset($n1) ? $n1 : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 2° número:</label>
            <input type="number" name="n2" value="<?= isset($n2) ? $n2 : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 3° número:</label>
            <input type="number" name="n3" value="<?= isset($n3) ? $n3 : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 4° número:</label>
            <input type="number" name="n4" value="<?= isset($n4) ? $n4 : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 5° número:</label>
            <input type="number" name="n5" value="<?= isset($n5) ? $n5 : '' ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnCalcular">CALCULAR</button>
        </p>


    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= isset($resultadoSoma) ? $resultadoSoma : '' ?>">
</body>
</html>

