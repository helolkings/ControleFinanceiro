<?php

if (isset($_GET['ret'])) {
    $ret = $_GET['ret'];
}

if (isset($ret)) {

    switch ($ret) {
        case 1:
            echo '<div class="alert alert-sucess">Ação realizada com sucesso!</div>';
            break;

        case 0:
            echo '<div class="alert alert-warning">Preencher todos os campos Obrigatórios!</div>';
            break;

        case -1:
            echo '<div class="alert alert-danger">Houve um erro na operação, tente novamente mais tarde!</div>';
            break;

        case -2:
            echo '<div class="alert alert-warning">A senha deve conter entre 6 e 8 caracteres!</div>';
            break;

        case -3:
            echo '<div class="alert alert-warning">As senhas devem ser iguais!</div>';
            break;
           
    }
}       