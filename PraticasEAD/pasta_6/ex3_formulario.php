<?php

if (isset($_POST['btnMostrar'])) {
    $nomedlivro = $_POST['livro'];
    $editora = $_POST['editora'];
    $ano = $_POST['ano'];
    $autores = $_POST['autores'];
    $paginas = $_POST['paginas'];
    $valor = $_POST['valor'];
    $resumo = $_POST['resumo'];

    echo 'O Nome do Livro é' . ' ' .  $nomedlivro . ', o Livro foi Publicado no Ano de ' . ' ' .  $ano . '.<br>';
    echo 'A Editora que publicou o Livro foi' . ' ' .  $editora . ', o Livro foi Publicado com' . ' ' .  $paginas . ' páginas' . '.<br>';
    echo 'O Livro foi escrito por' . ' ' . $autores . '.<br>';
    echo 'O Valor do Livro é R$: ' . ' ' . $valor . ' reais' . '.<br>';
    echo 'O Resumo do Livro é' . ' ' . $resumo . '.<br>';
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>

<body>
    <h1>Preencha com os dados do Livro:</h1>
    <form action="ex3_formulario.php" method="POST">
        <p>
            <label>Digite o Nome do Livro:</label>
            <input type="text" name="livro" placeholder="Digite o Nome aqui...">
        </p>
        <p>
            <label>Digite a Editora do Livro:</label>
            <input type="text" name="editora" placeholder="Digite a editora aqui...">
        </p>
        <p>
            <label>Digite o Ano de Publicação do Livro:</label>
            <input type="text" name="ano" placeholder="Digite o ano aqui...">
        </p>
        <p>
            <label>Digite o nome do(s) autor(es) do Livro:</label>
            <input type="text" name="autores" placeholder="Digite o(s) autor(es) aqui...">
        </p>
        <p>
            <label>Digite o número de Páginas do Livro:</label>
            <input type="text" name="paginas" placeholder="Digite o número de paginas aqui">
        </p>
        <p>
            <label>Digite o Valor do Livro:</label>
            <input type="text" name="valor" placeholder="Digite o Valor aqui">
        </p>
        <p>
            <label>Escreva o Resumo do Livro:</label>
            <input type="text" name="resumo" placeholder="Digite o Resumo aqui">
        </p>
        <p>
            <button type="submit" name="btnMostrar">Mostrar</button>
        </p>
    </form>
</body>

</html>