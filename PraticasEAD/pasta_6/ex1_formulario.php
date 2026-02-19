<?php


if (isset($_POST['btnEnviar'])) {
    $nomedprato = $_POST['prato'];
    $descricao = $_POST['info'];
    $preco = $_POST['custo'];
    $ingredientes = $_POST['itens'];


    echo 'O nome do prato é' . ' ' .  $nomedprato . '.<br>';
    echo 'A descrição do prato é' . ' ' .  $descricao . '.<br>';
    echo 'O preço do prato é R$: ' . ' ' . $preco. ' reais' . '.<br>';
    echo 'O prato contém os seguintes inredientes' . ' ' . $ingredientes. '.<br>';
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <h1>Preencha os dados do pedido:</h1>
    <form action="ex1_formulario.php" method="POST">
        <p>
            <label>Digite o nome do prato:</label>
            <input type="text" name="prato" placeholder="Digite o nome do prato...">
        </p>
        <p>
            <label>Digite a Descriçao:</label>
            <input type="text" name="info" placeholder="Descreva do prato...">
        </p>
        <p>
            <label>Digite o preço do prato:</label>
            <input type="text" name="custo" placeholder="Digite o preço do prato...">
        </p>
        <p>
            <label>Digite os ingredientes:</label>
            <input type="text" name="itens" placeholder="Escreva os ingredientes...">
        </p>
        <p>
            <button type="submit" name="btnEnviar">Enviar</button>
        </p>
    </form>
</body>
</html>
 
