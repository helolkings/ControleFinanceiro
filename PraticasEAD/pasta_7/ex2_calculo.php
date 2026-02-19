<?php
$valor1 = '';
$valor2 = '';
$valor3 = '';
$valor4 = '';
$valor5 = '';
$valor6 = '';
$valor7 = '';
$resultado = '';
if (isset($_POST['btnCalcular'])) {
    $valor1 = trim($_POST['num1']);
    $valor2 = trim($_POST['num2']);
    $valor3 = trim($_POST['num3']);
    $valor4 = trim($_POST['num4']);
    $valor5 = trim($_POST['num5']);
    $valor6 = trim($_POST['num6']);
    $valor7 = trim($_POST['num7']);
    $resultado = ($valor4 * $valor5 * $valor6 * $valor7) + ($valor1 + $valor2 + $valor3);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora 2</title>
</head>

<body>
    <h2>Preencha os números para a soma:</h2>
    <form action="ex2_calculo.php" method="POST">
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
        <label>Digite o 4° Número:</label>
        <input type="number" name="num4" value="<?= $valor4 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 5° Número:</label>
            <input type="number" name="num5" value="<?= $valor5 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 6° Número:</label>
            <input type="number" name="num6" value="<?= $valor6 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o 7° Número:</label>
            <input type="number" name="num7" value="<?= $valor7 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnCalcular">CALCULAR</button>
        </p>
    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= $resultado ?>">
</body>

</html>