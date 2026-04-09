<?php


require_once 'UtilDAO.php';
require_once 'Conexao.php';


class UsuarioDAO extends Conexao

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


    public function CarregarMeusDados() 
    {
            //Inicio do codigo que frá o inset no BD
            //1° passo: Criar uma variavel que guarda o obj de conexão
            $conexao = $this->retornaConexao();

            //2° passo: Comando SQL que será executado
            $comando_sql = ' SELECT nome_usuario, email_usuario FROM tb_usuario where id_usuario = ?';

            //3° passo: Criar o obj que levara as instruições para o BD
            $sql = new PDOStatement();

            //4° passo: Conecta tudo
            $sql = $conexao->prepare($comando_sql);

        
            $sql->bindValue(1,  UtilDAO::UsuarioLogado());
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $sql->execute();
    
            return $sql->fetchAll();
            }
    

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






