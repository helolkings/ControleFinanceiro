<?php
    if(
        isset($_GET['user']) && $_GET['user'] != '' &&
        isset($_GET['valor']) && $_GET['valor'] != '' &&
        isset($_GET['opr']) && $_GET['opr'] != '' &&
        isset($_GET['banco']) && $_GET['banco'] != ''
    ){
        $usuario = $_GET['user'];
        $dinheiro = $_GET['valor'];
        $operacao = $_GET['opr'];
        $banco = $_GET['banco'];

        if($operacao == 'G' || $operacao == 'g'){
            $operacao = 'Ganho';
        }else if($operacao == 'P' || $operacao == 'p'){
            $operacao = 'Perda';
        }

        if($banco == 'SA' || $banco == 'sa'){
            $banco = 'Santander';
        }else if($banco == 'IT' || $banco == 'it'){
            $banco = 'Itaú';
        }else if($banco == 'SI' || $banco == 'si'){
            $banco = 'Sicredi';
        }

        if($operacao == 'Ganho'){
            $resultado_oper = $dinheiro + ($dinheiro * 0.03);
        }else if($operacao == 'Perda'){
            $resultado_oper = $dinheiro - ($dinheiro * 0.05);
        }
    }else{
        header('location: ex2p1_pegarinvestimento.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3ª Página</title>
</head>
<body style="font-family: Tahoma;">
    <ul>
        <li>
            <h2>Valores das Operações:</h2>
        </li>
        <li>
            Ganho: 3%
        </li>
        <li>
            Perda: 5%
        </li>
    </ul>
    <p>
        <strong>Nome do Usuário: </strong><span><?= $usuario ?></span>
    </p>
    <p>
        <strong>Tipo da Operação: </strong><span><?= $operacao ?></span>
    </p>
    <p>
        <strong>Banco Escolhido: </strong><span><?= $banco ?></span>
    </p>
    <p>
        <strong>Valor da Operação: </strong>
        <input disabled value="R$ <?= number_format($dinheiro, 2, ',', '.') ?>">
    </p>
    <p>
        <strong>Resultado da Operação: </strong>
        <input disabled value="R$ <?= number_format($resultado_oper, 2, ',', '.') ?>">
    </p>
</body>
</html>
