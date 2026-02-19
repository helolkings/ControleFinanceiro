    <?php
    if (
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['peso']) && $_GET['peso'] != '' &&
        isset($_GET['altura']) && $_GET['altura'] != ''
    ){
        $nome = $_GET['nome'];
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
            $resultado = round($peso / ($altura * $altura), 2);
            if ($resultado > 30) {
                $msg = '<br><strong style="color: #f40000;"> ' . $resultado . ' MUITO OBESO!' . '!</strong>';
            } else if ($resultado > 25 && $resultado <= 30) {
                $msg = '<br><strong style="color: #cc6817ff;"> ' . $resultado . ' OBESO! ' . '!</strong>';
            } else if ($resultado > 20 && $resultado <= 25) {
                $msg = '<br><strong style="color: #6ef400ff;"> ' . $resultado . ' PESO IDEAL!  ' . '!</strong>';
            } else if ($resultado > 0 && $resultado <= 20) {
                $msg = '<br><strong style="color: #cc6817ff;"> ' . $resultado . ' MAGRO!  ' . '!</strong>';
            }
            }else{
            header('location: ex1p1_get.php');
            exit();
        }
    ?>                         
    <!DOCTYPE html>
    <html lang="pt-br">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2° Página</title>
    </head>


    <body style="font-family: Tahoma;">
        <h2>Resultado do IMC:</h2>
<p>
    <strong>Nome do Usuário: </strong><span><?= $nome ?>.</span>
</p>
<p>
    <strong>Peso do Usuário: </strong><span><?= $peso ?>.</span>
</p>
<p>
    <strong>Altura do Usuário: </strong><span><?= $altura ?>.</span>
</p>
<p>
    <strong>Resultado do IMC: </strong>
    <input desabled value="<?= $resultado ?>">
</p>
<p>
    <strong>Definição: </strong><span><?= $msg ?>.</span>
</p>
    </body>
    </html>