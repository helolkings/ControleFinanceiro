<?php


require_once 'UsuarioDAO.php';


class UsuarioDAO
{
    public function ValidarLogin($email, $senha)
    {
        if ($email == '' || $senha == '') {
            return 0;
        } else if (strlen($senha) < 6 && strlen($senha) > 8) {
            return -2;
        } else {
            return 1;
        }
    }


    public function CadastrarUsuario($nome, $email, $senha, $repsenha)
    {
        if ($nome == '' || $email == '' || $senha == '' || $repsenha == '') {
            return 0;
        } else if (strlen($senha) < 6 || strlen($senha) > 8) {
            return -2;
        } else if ($senha == '' || $repsenha == '') {
            return -3;
        } else {
            return 1;
        }
    }


    public function CarregarMeusDados() {}


    public function GravarMeusDados($nome, $email, $senha, $repsenha)
    {
        if ($nome == '' || $email == '' || $senha == '' || $repsenha == '') {
            return 0;
        } else if (strlen($senha) < 6 || strlen($senha) > 8) {
            return -2;
        } else if ($senha != $repsenha) {
            return -3;
        } else {
            return 1;
        }
    }
}






