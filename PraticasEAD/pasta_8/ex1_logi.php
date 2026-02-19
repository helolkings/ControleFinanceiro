    <?php
    if (isset($_POST['btnCalcular'])) {
        $v1 = trim($_POST['valor1']);
        $v2 = trim($_POST['valor2']);
        $v3 = trim($_POST['valor3']);
        $v4 = trim($_POST['valor4']);
        $v5 = trim($_POST['valor5']);
        if ($v1 == '') {
            echo 'Preencher o campo Valor 1 obrigatório!';
        } else if ($v2 == '') {
            echo 'Preencher o campo Valor 2 obrigatório!';
        } else if ($v3 == '') {
            echo 'Preencher o campo Valor 3 obrigatório!';
        } else if ($v4 == '') {
            echo 'Preencher o campo Valor 4 obrigatório!';
        } else if ($v5 == '') {
            echo 'Preencher o campo Valor 5 obrigatório!';
        } else {
            $resultado = (($v1 + $v2) * 2) + ($v3 + $v4 + $v5);
        }
        if ($resultado > 100) {
            echo 'ACIMA DE 100!';
        } else if ($resultado < 100) {
            echo 'ABAIXO DE 100!';
        } else if ($resultado = 100) {
            echo 'IGUAL A 100!';
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tarefa 1</title>
    </head>

    <body style="font-family: Tahoma;">
        <h2>Preencha o Formulário:</h2>
        <form action="ex1_logi.php" method="POST">
            <p>
                <label>Digite o Valor 1:</label>
                <input type="text" name="valor1" value="<?= isset($v1) ? $v1 : '' ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <label>Digite o Valor 2:</label>
                <input type="text" name="valor2" value="<?= isset($v2) ? $v2 : ''  ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <label>Digite o Valor 3:</label>
                <input type="text" name="valor3" value="<?= isset($v3) ? $v3 : ''  ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <label>Digite o Valor 4:</label>
                <input type="text" name="valor4" value="<?= isset($v4) ? $v4 : ''  ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <label>Digite o Valor 5:</label>
                <input type="text" name="valor5" value="<?= isset($v5) ? $v5 : ''  ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <button type="submit" name="btnCalcular">CALCULAR</button>
            </p>
        </form>
        <?php if (
            isset($v1) && $v1 != '' &&
            isset($v2) && $v2 != '' &&
            isset($v3) && $v3 != '' &&
            isset($v4) && $v4 != '' &&
            isset($v5) && $v5 != ''
        ) { ?>
            <p>
                <label>Resultado Final:</label>
                <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
            </p>
        <?php } ?>
    </body>

    </html>