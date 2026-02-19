<?php
$valor1 = '';
$valor2 = '';
$valor3 = '';
$resultado = '';
if (isset($_POST['btnCalcular'])) {
    $valor1 = trim($_POST['num1']);
    $valor2 = trim($_POST['num2']);
    $valor3 = trim($_POST['num3']);
    $resultado = ($valor1 + $valor3) / $valor2;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora 1</title>
</head>

<body>
    <h2>Preencha os números para a soma:</h2>
    <form action="ex1_calculo.php" method="POST">
        <p>
            <label>Digite o 1° Número:</label>
            <input type="number" name="num1" value="<?= $valor1 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 2° Número:</label>
            <input type="number" name="num2" value="<?= $valor2 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 3° Número:</label>
            <input type="number" name="num3" value="<?= $valor3 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnCalcular">CALCULAR</button>
        </p>
    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= $resultado ?>">
</body>

</html>