<?php

    if(isset($_POST['btnEnviar'])){
        $nomeLivro = $_POST['nomeLvr'];
        $editora = $_POST['editora'];
        $ano = $_POST['ano'];
        $autores = $_POST['autor'];
        $paginas = $_POST['pgs'];
        $custo = $_POST['valor'];
        $resumo = $_POST['info'];

        echo '<ul><li>Nome do Livro: ' . $nomeLivro . ' | Ano: ' . $ano . '.</li><li>Editora: ' . 
                $editora . ' | Qtd. de Páginas: ' . $paginas . '.</li><li>Autores: ' . 
                $autores . '.</li><li>Valor: R$ ' . 
                $custo . '.</li><li>Resumo: ' . $resumo . '.</li></ul><hr>';
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3ª Atividade</title>
</head>
<body style="font-family: Tahoma;">
    <h2>Informações do Livro:</h2>

    <form method="POST">
        <p>
            <label>Digite o Nome do Livro:</label>
            <input type="text" name="nomeLvr" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o Nome da Editora:</label>
            <input type="text" name="editora" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o Ano de Lançamento:</label>
            <input type="text" name="ano" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o Nome dos Autores:</label>
            <input type="text" name="autor" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite a Qtd. de Páginas:</label>
            <input type="text" name="pgs" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o Custo do Livro:</label>
            <input type="text" name="valor" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite um Resumo sobre o Livro:</label>
            <input type="text" name="info" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnEnviar">Enviar</button>
        </p>
    </form>
</body>
</html>

