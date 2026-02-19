    <?php
    if (isset($_POST['btnCalcular'])) {
        $nome = trim($_POST['nome']);
        $peso = trim($_POST['peso']);
        $altura = trim($_POST['altura']);
        
        if ($nome == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher o campo nome obrigatório!</strong>';
        } else if ($peso == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher o campo peso obrigatório!</strong>';
        } else if ($altura == '') {
            $msgWarning = '<br><strong style="color: #f40000;">Preencher o campo altura obrigatório!</strong>';
        } else if (!is_numeric($peso) || !is_numeric($altura)) {
            $msgWarning = '<br><strong style="color: #f40000;">Digite apenas caractéres númericos no peso e na altura!</strong>';
        } else if (is_numeric($nome)) {
            $msgWarning = '<br><strong style="color: #f40000;">Digite apenas caractéres de texto no nome!</strong>';
        } else {
            $resultado = round($peso/ ($altura*$altura),2);
            if ($resultado > 30) {
                $msg = '<br><strong style="color: #f40000;"> ' . $resultado . ' MUITO OBESO!' . '!</strong>';
            } else if ($resultado > 25 && $resultado <= 30) {
                $msg = '<br><strong style="color: #cc6817ff;"> ' . $resultado . ' OBESO! ' . '!</strong>';
            } else if ($resultado > 20 && $resultado <= 25) {
                $msg = '<br><strong style="color: #6ef400ff;"> ' . $resultado . ' PESO IDEAL!  ' . '!</strong>';
            } else if ($resultado > 0 && $resultado <= 20) {
                $msg = '<br><strong style="color: #cc6817ff;"> ' . $resultado . ' MAGRO!  ' . '!</strong>';
            }
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tarefa 4</title>
    </head>

    <body style="font-family: Tahoma;">
        <h2>Cálculo de IMC:</h2>
        <form action="ex4_logi.php" method="POST">
            <p>
                <label>Digite o seu Nome:</label>
                <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <label>Digite o seu Peso:</label>
                <input type="text" name="peso" value="<?= isset($peso) ? $peso : ''  ?>" placeholder="Digite aqui...">
            </p>
            <p>
                <label>Digite a sua Altura:</label>
                <input type="text" name="altura" value="<?= isset($altura) ? $altura : ''  ?>" placeholder="Digite aqui...">
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