<?php
$ganho1 = '';
$gasto1 = '';
$lucro1 = '';
$ganho2 = '';
$gasto2 = '';
$lucro2 = '';
$ganho3 = '';
$gasto3 = '';
$lucro3 = '';
$ganho4 = '';
$gasto4 = '';
$lucro4 = '';
$ganho5 = '';
$gasto5 = '';
$lucro5 = '';
$ganho6 = '';
$gasto6 = '';
$lucro6 = '';
$ganho7 = '';
$gasto7 = '';
$lucro7 = '';
$ganho8 = '';
$gasto8 = '';
$lucro8 = '';
$ganho9 = '';
$gasto9 = '';
$lucro9 = '';
$ganho10 = '';
$gasto10 = '';
$lucro10 = '';
$ganho11 = '';
$gasto11 = '';
$lucro11 = '';
$ganho12 = '';
$gasto12 = '';
$lucro12 = '';
$ganhoanual = '';
$gastoanual = '';
$lucroanual = '';
if (isset($_POST['btnCalcular'])) {
    $ganho1 = trim($_POST['ganho1']);
    $gasto1 = trim($_POST['gasto1']);
    $lucro1 = ($ganho1 - $gasto1);
    $ganho2 = trim($_POST['ganho2']);
    $gasto2 = trim($_POST['gasto2']);
    $lucro2 = ($ganho2 - $gasto2);
    $ganho3 = trim($_POST['ganho3']);
    $gasto3 = trim($_POST['gasto3']);
    $lucro3 = ($ganho3 - $gasto3);
    $ganho4 = trim($_POST['ganho4']);
    $gasto4 = trim($_POST['gasto4']);
    $lucro4 = ($ganho4 - $gasto4);
    $ganho5 = trim($_POST['ganho5']);
    $gasto5 = trim($_POST['gasto5']);
    $lucro5 = ($ganho5 - $gasto5);
    $ganho6 = trim($_POST['ganho6']);
    $gasto6 = trim($_POST['gasto6']);
    $lucro6 = ($ganho6 - $gasto6);
    $ganho7 = trim($_POST['ganho7']);
    $gasto7 = trim($_POST['gasto7']);
    $lucro7 = ($ganho7 - $gasto7);
    $ganho8 = trim($_POST['ganho8']);
    $gasto8 = trim($_POST['gasto8']);
    $lucro8 = ($ganho8 - $gasto8);
    $ganho9 = trim($_POST['ganho9']);
    $gasto9 = trim($_POST['gasto9']);
    $lucro9 = ($ganho9 - $gasto9);
    $ganho10 = trim($_POST['ganho10']);
    $gasto10 = trim($_POST['gasto10']);
    $lucro10 = ($ganho10 - $gasto10);
    $ganho11 = trim($_POST['ganho11']);
    $gasto11 = trim($_POST['gasto11']);
    $lucro11 = ($ganho11 - $gasto11);
    $ganho12 = trim($_POST['ganho12']);
    $gasto12 = trim($_POST['gasto12']);
    $lucro12 = ($ganho12 - $gasto12);
    $ganhoanual = ($ganho1 + $ganho2 + $ganho3 + $ganho4 + $ganho5 + $ganho6 + $ganho7 + $ganho8 + $ganho9 + $ganho10 + $ganho11 + $ganho12);
    $gastoanual = ($gasto1 + $gasto2 + $gasto3 + $gasto4 + $gasto5 + $gasto6 + $gasto7 + $gasto8 + $gasto9 + $gasto10 + $gasto11 + $gasto12);
    $lucroanual = ($lucro1 + $lucro2 + $lucro3 + $lucro4 + $lucro5 + $lucro6 + $lucro7 + $lucro8 + $lucro9 + $lucro10 + $lucro11 + $lucro12);
    echo 'O lucro mensal de cada mês é de R$: ' . ' ' . $lucro1 . ' reais em janeiro, ' . ' R$: ' . ' ' . $lucro2 . ' reais em fevereiro, ' . ' R$: ' . ' ' . $lucro3 . ' reais em março, ' . ' R$: ' . ' ' . $lucro4 . ' reais em abril, ' . ' R$: ' . ' ' . $lucro5 . ' reais em maio, ' . ' R$: ' . ' ' . $lucro6 . ' reais em junho, ' . ' R$: ' . ' ' . $lucro7 . ' reais em julho, ' . ' R$: ' . ' ' . $lucro8 . ' reais em agosto, ' . ' R$: ' . ' ' . $lucro9 . ' reais em setembro, ' . ' R$: ' . ' ' . $lucro10 . ' reais em outubro, ' . ' R$: ' . ' ' . $lucro11 . ' reais em novembro e ' . ' R$: ' . ' ' . $lucro12 . ' reais em dezembro' . '.<br>';
    echo 'O total de ganho anual é de R$: ' . ' ' . $ganhoanual  . ' reais' . '.<br>';
    echo 'O total de gasto anual é de R$: ' . ' ' . $gastoanual  . ' reais' . '.<br>';
    echo 'O total de lucro anual é de R$: ' . ' ' . $lucroanual  . ' reais' . '.<br>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Anual</title>
</head>

<body>
    <h2>Preencha com os dados para o Cálculo Anual:</h2>
    <form action="ex3_calculo.php" method="POST">
        <p>
            <label>Digite o Ganho de Janeiro:</label>
            <input type="number" name="ganho1" value="<?= $ganho1 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Janeiro:</label>
            <input type="number" name="gasto1" value="<?= $gasto1 ?>" placeholder="Digite aqui...">
            <label>Lucro de Janeiro:</label>
            <input disabled value="<?= $lucro1 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Fevereiro:</label>
            <input type="number" name="ganho2" value="<?= $ganho2 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Fevereiro:</label>
            <input type="number" name="gasto2" value="<?= $gasto2 ?>" placeholder="Digite aqui...">
            <label>Lucro de Fevereiro:</label>
            <input disabled value="<?= $lucro2 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Março:</label>
            <input type="number" name="ganho3" value="<?= $ganho3 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Março:</label>
            <input type="number" name="gasto3" value="<?= $gasto3 ?>" placeholder="Digite aqui...">
            <label>Lucro de Março:</label>
            <input disabled value="<?= $lucro3 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Abril:</label>
            <input type="number" name="ganho4" value="<?= $ganho4 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Abril:</label>
            <input type="number" name="gasto4" value="<?= $gasto4 ?>" placeholder="Digite aqui...">
            <label>Lucro de Abril:</label>
            <input disabled value="<?= $lucro4 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Maio:</label>
            <input type="number" name="ganho5" value="<?= $ganho5 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Maio:</label>
            <input type="number" name="gasto5" value="<?= $gasto5 ?>" placeholder="Digite aqui...">
            <label>Lucro de Maio:</label>
            <input disabled value="<?= $lucro5 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Junho:</label>
            <input type="number" name="ganho6" value="<?= $ganho6 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Junho:</label>
            <input type="number" name="gasto6" value="<?= $gasto6 ?>" placeholder="Digite aqui...">
            <label>Lucro de Junho:</label>
            <input disabled value="<?= $lucro6 ?>">
        </p>
        <p>
        <p>
            <label>Digite o Ganho de Julho:</label>
            <input type="number" name="ganho7" value="<?= $ganho7 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Julho:</label>
            <input type="number" name="gasto7" value="<?= $gasto7 ?>" placeholder="Digite aqui...">
            <label>Lucro de Julho:</label>
            <input disabled value="<?= $lucro7 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Agosto:</label>
            <input type="number" name="ganho8" value="<?= $ganho8 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Agosto:</label>
            <input type="number" name="gasto8" value="<?= $gasto8 ?>" placeholder="Digite aqui...">
            <label>Lucro de Agosto:</label>
            <input disabled value="<?= $lucro8 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Setembro:</label>
            <input type="number" name="ganho9" value="<?= $ganho9 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Setembro:</label>
            <input type="number" name="gasto9" value="<?= $gasto9 ?>" placeholder="Digite aqui...">
            <label>Lucro de Setembro:</label>
            <input disabled value="<?= $lucro9 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Outubro:</label>
            <input type="number" name="ganho10" value="<?= $ganho10 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Outubro:</label>
            <input type="number" name="gasto10" value="<?= $gasto10 ?>" placeholder="Digite aqui...">
            <label>Lucro de Outubro:</label>
            <input disabled value="<?= $lucro10 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Novembro:</label>
            <input type="number" name="ganho11" value="<?= $ganho11 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Novembro:</label>
            <input type="number" name="gasto11" value="<?= $gasto11 ?>" placeholder="Digite aqui...">
            <label>Lucro de Novembro:</label>
            <input disabled value="<?= $lucro11 ?>">
        </p>
        <p>
            <label>Digite o Ganho de Dezembro:</label>
            <input type="number" name="ganho12" value="<?= $ganho12 ?>" placeholder="Digite aqui...">
            <label>Digite o Gasto de Dezembro:</label>
            <input type="number" name="gasto12" value="<?= $gasto12 ?>" placeholder="Digite aqui...">
            <label>Lucro de Dezembro:</label>
            <input disabled value="<?= $lucro12 ?>">
        </p>
        <p>
            <label>Total de Ganho Anual:</label>
            <input disabled value="<?= $ganhoanual ?>">
            <label>Total de Gasto Anual:</label>
            <input disabled value="<?= $gastoanual ?>">
            <label>Total de Lucro Anual:</label>
            <input disabled value="<?= $lucroanual ?>">
        </p>
        <button type="submit" name="btnCalcular">CALCULAR</button>
        </p>
    </form>
</body>

</html>