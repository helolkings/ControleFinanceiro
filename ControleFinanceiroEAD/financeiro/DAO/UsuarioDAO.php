<?php


require_once 'UtilDAO.php';
require_once 'Conexao.php';


class UsuarioDAO extends Conexao

{
    public function ValidarLogin($email, $senha)
    {
        
        if (trim($email) == '' || trim($senha) == '' ) {
            return 0;
        }

            $conexao = $this->retornaConexao();
            $comando_sql = 'SELECT id_usuario, nome_usuario  FROM tb_usuario WHERE email_usuario = ? AND senha_usuario = ?';

            
            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

          
            $sql->bindValue(1,  $email);
            $sql->bindValue(2,  $senha);

            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $sql->execute();

            $user = $sql->fetchAll();
            
             if(count($user) == 0){
                return -6;
             }

             $cod = $user[0]['id_usuario'];
             $nome = $user[0]['nome_usuario'];
             UtilDAO::CriarSessao($cod, $nome);
             header('location: inicial.php');
             exit;
    }


 public function VerificarEmailDuplicado($email)
    {
        if (trim($email) == '') {
            return 0;
        }

            $conexao = $this->retornaConexao();
            $comando_sql = 'SELECT count(email_usuario) AS contar FROM tb_usuario WHERE email_usuario = ?';

            
            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

          
            $sql->bindValue(1,  $email);

            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $sql->execute();

            $contar = $sql->fetchAll();
            
            return $contar[0]['contar'];

      
    }


public function VerificarEmailDuplicadoAlteracao($email)
    {
        if (trim($email) == '') {
            return 0;
        }

            $conexao = $this->retornaConexao();
            $comando_sql = 'SELECT count(email_usuario) AS contar FROM tb_usuario WHERE email_usuario = ? AND id_usuario != ?';

            
            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

          
            $sql->bindValue(1,  $email);
            $sql->bindValue(2,  UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $sql->execute();

            $contar = $sql->fetchAll();
            
            return $contar[0]['contar'];

      
    }


    public function CadastrarUsuario($nome, $email, $senha, $repsenha)
    {
        if ($nome == '' || $email == '' || $senha == '' || $repsenha == '') {
            return 0;
        } else if (strlen($senha) < 6 || strlen($senha) > 8) {
            return -2;
        } else if ($senha == '' || $repsenha == '') {
            return -3;   
        }

        if($this->VerificarEmailDuplicado($email) != 0){
            return  -5;
        }

            $conexao = $this->retornaConexao();
            $comando_sql = ' INSERT INTO tb_usuario(nome_usuario, email_usuario, senha_usuario, data_cadastro) VALUES(?, ?, ?, ?)';

            
            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1,  $nome);
            $sql->bindValue(2,  $email);
            $sql->bindValue(3,  $senha);
            $sql->bindValue(4,  date('Y-m-d'));
           
    
            try {
            $sql->execute();

            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
            return -1;
        }

      
    }


    public function CarregarMeusDados() 
    {
            //Inicio do codigo que frá o inset no BD
            //1° passo: Criar uma variavel que guarda o obj de conexão
            $conexao = $this->retornaConexao();

            //2° passo: Comando SQL que será executado
            $comando_sql = ' SELECT nome_usuario, email_usuario FROM tb_usuario WHERE id_usuario = ?';

            //3° passo: Criar o obj que levara as instruições para o BD
            $sql = new PDOStatement();

            //4° passo: Conecta tudo
            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1,  UtilDAO::UsuarioLogado());
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $sql->execute();
    
            return $sql->fetchAll();
            }
    

    public function GravarMeusDados($nome, $email)
    {
        if ($nome == '' || $email == '') {
            return 0;
        }

         if($this-> VerificarEmailDuplicadoAlteracao($email) != 0){
            return  -5;
        }
        // } else if (strlen($senha) < 6 || strlen($senha) > 8) {
        //     return -2;
        // } else if ($senha != $repsenha) {
        //     return -3;
        // } else {
        //    return 1;
            $conexao = $this->retornaConexao();

            $comando_sql = ' UPDATE tb_usuario SET nome_usuario = ?, email_usuario = ?  WHERE id_usuario = ?';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $nome);
            $sql->bindValue(2, $email);
            $sql->bindValue(3,  UtilDAO::UsuarioLogado());
            
          
             try {
            $sql->execute();

            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
            return -1;
        }
            

        }
    }






