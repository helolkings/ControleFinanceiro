    <?php
    if (isset($_POST['btnCalcular'])) {
        $n1 = trim($_POST['nota1']);
        $n2 = trim($_POST['nota2']);
        $n3 = trim($_POST['nota3']);
        $n4 = trim($_POST['nota4']);
        if ($n1 == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
        } else if ($n2 == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
        } else if ($n3 == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
        } else if ($n4 == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher todos os campos obrigatórios!</strong>';
        } else {
            $resultado = ($n1 + $n2 + $n3 + $n4) / 4;
            if ($resultado <= 39) {
                $msg = '<br><strong style="color: #f40000;"> ' . $resultado . ' VOCÊ ESTÁ REPROVADO!  ' . '!</strong>';
            } else if ($resultado <= 59) {
                $msg = '<br><strong style="color: #cc6817ff;"> ' . $resultado . ' VOCÊ ESTÁ DE RECUPERÇÃO!  ' . '!</strong>';
            } else if (60 <= $resultado) {
                $msg = '<br><strong style="color: #6ef400ff;"> ' . $resultado . ' VOCÊ ESTÁ APROVADO!  ' . '!</strong>';
            }
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tarefa 3</title>
    </head>

    <body style="font-family: Tahoma;">
        <h2>Preencha o Boletim:</h2>
        <form action="ex3_logi.php" method="POST">
            <p>
                <label>Digite o Nota 1:</label>
                <input type="text" name="nota1" value="<?= isset($n1) ? $n1 : '' ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <label>Digite o Nota 2:</label>
                <input type="text" name="nota2" value="<?= isset($n2) ? $n2 : ''  ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <label>Digite o Nota 3:</label>
                <input type="text" name="nota3" value="<?= isset($n3) ? $n3 : ''  ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <label>Digite o Nota 4:</label>
                <input type="text" name="nota4" value="<?= isset($n4) ? $n4 : ''  ?>" placeholder="Digite aqui...">
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