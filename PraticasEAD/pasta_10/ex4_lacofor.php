<?php




if(isset($_POST['btnEnviar'])){
    $perda = trim($_POST['perda']);
    $peso = trim($_POST['peso']);
    $voltas = trim($_POST['voltas']);




    if($perda == '' || $peso == '' || $voltas == ''){
        $msgWarning = '<strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
    }else if($peso < 30){
        $msgWarning = '<strong style="color: #f40000;">Peso ideal será no mínimo 30kg!</strong>';
    }else if(!is_numeric($peso) || !is_numeric($voltas)){
        $msgWarning = '<strong style="color: #f40000;">Digite apenas caracteres NUMÉRICOS!</strong>';
    }else{




        for($i = 1; $i < $voltas; $i++){
            $peso = $peso - $perda;
            echo $i .'° volta realizada - A pessoa está com ' . number_format($peso, 3, ',', '.') . 'Kg.<br>';
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
    <title>4ª Atividade</title>
</head>
<body style="font-family: Tahoma;">
    <h2>Simulaçao de perca de peso:</h2>


 
    <form action="ex4_lacofor.php" method="POST">
        <p>
            <label>Quantidade de KG perdido por volta:</label>
            <input type="number" name="perda" value="<?= isset($perda) ? $perda : '' ?>" placeholder="Digite aqui...">
        </p>




        <p>
            <label>Peso inicial da pessoa (Mínimo 30kg):</label>
            <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>" placeholder="Digite aqui...">
        </p>




        <p>
            <label>Quantidade de voltas:</label>
            <input type="number" name="voltas" value="<?= isset($voltas) ? $voltas : '' ?>" placeholder="Digite aqui...">
        </p>




        <button type="submit" name="btnEnviar">ENVIAR</button>
    </form>  
   
    <?= isset($msgWarning) ? $msgWarning : '' ?>
 
</body>
</html>















