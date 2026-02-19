<?php

if (isset($_POST['btnMostrar'])) {
    $nomedempresa = $_POST['empresa'];
    $site = $_POST['site'];
    $face = $_POST['face'];
    $insta = $_POST['insta'];
    $descricao = $_POST['info'];

    echo 'O Nome da Empresa é' . ' ' .  $nomedempresa . '.<br>';
    echo 'O Site da Empresa é' . ' ' .  $site . '.<br>';
    echo 'O Facebook da Empresa é' . ' ' . $face . '.<br>';
    echo 'O Intagram da Empresa é' . ' ' . $insta . '.<br>';
    echo 'A Descrição da Empresa é' . ' ' . $descricao . '.<br>';
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>

<body>
    <h1>Preencha com os dados da Empresa:</h1>
    <form action="ex2_formulario.php" method="POST">
        <p>
            <label>Digite o Nome da Empresa:</label>
            <input type="text" name="empresa" placeholder="Digite o Nome aqui...">
        </p>
        <p>
            <label>Digite o Site da Empresa:</label>
            <input type="text" name="site" placeholder="Digite o Site aqui...">
        </p>
        <p>
            <label>Digite o Facebook da Empresa:</label>
            <input type="text" name="face" placeholder="Digite o Facebook aqui...">
        </p>
        <p>
            <label>Digite o Instagram da Empresa:</label>
            <input type="text" name="insta" placeholder="Digite o Instagram aqui...">
        </p>
        <p>
            <label>Digite a Descrição da Empresa:</label>
            <input type="text" name="info" placeholder="Digite a Descrição aqui...">
        </p>
        <p>
            <button type="submit" name="btnMostrar">Mostrar</button>
        </p>
    </form>
</body>

</html>