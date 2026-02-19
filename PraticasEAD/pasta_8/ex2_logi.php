    <?php
    if (isset($_POST['btnCalcular'])) {
        $v1 = trim($_POST['valor1']);
        $v2 = trim($_POST['valor2']);
        $v3 = trim($_POST['valor3']);
        if ($v1 == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
        } else if ($v2 == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
        } else if ($v3 == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
        } else {
            $resultado = ($v2 / 2);
            if ($v1 < $resultado && $resultado < $v3) {
                $msg = '<br><strong style="color: #f40000;"> O VALOR ' . $resultado . ' ESTÁ ENTRE  ' . $v1 . ' e ' . $v3 . '!</strong>';
            } else {
                $msg = '<br><strong style="color: #f40000;"> O VALOR ' . $resultado . ' NÃO ESTÁ ENTRE  ' . $v1 . ' e ' . $v3 . '!</strong>';
            }
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tarefa 2</title>
    </head>

    <body style="font-family: Tahoma;">
        <h2>Preencha o Formulário:</h2>
        <form action="ex2_logi.php" method="POST">
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
                <button type="submit" name="btnCalcular">CALCULAR</button>
            </p>
        </form>
        <?= isset($msgWarning) ? $msgWarning : '' ?>
        <?php if (
            isset($resultado) && $resultado != '' &&
            isset($msg) && $msg != ''
        ) { ?>
            <p>
                <label>Resultado Final:</label>
                <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
            </p>
            <p>
                <?= isset($msg) ? $msg : '' ?>
            </p>
        <?php } ?>
    </body>

    </html>