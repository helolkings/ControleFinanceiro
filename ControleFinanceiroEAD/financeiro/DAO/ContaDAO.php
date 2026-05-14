<?php

require_once 'UtilDAO.php';
require_once 'Conexao.php';

class ContaDAO extends Conexao
{
    public function CadastrarConta($banco, $agencia, $numero, $saldo)
    {
        if ($banco == '' || $agencia == '' || $numero == '' || $saldo == '') {
            return 0;
        }

        $conexao = $this->retornaConexao();

        $comando_sql = 'INSERT INTO tb_conta (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario) 
                        VALUES (?, ?, ?, ?, ?)';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $banco);
        $sql->bindValue(2, $agencia);
        $sql->bindValue(3, $numero);
        $sql->bindValue(4, $saldo);
        $sql->bindValue(5, UtilDAO::UsuarioLogado());

        try {

            $sql->execute();
            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
            return -1;
        }
    }

    public function ConsultarConta() 
    {
        $conexao = $this->retornaConexao();

        $comando_sql = 'SELECT banco_conta,
                               agencia_conta, 
                               numero_conta,
                               saldo_conta,
                               id_conta
                        FROM   tb_conta 
                        WHERE  id_usuario = ?
                        ORDER BY banco_conta ASC';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1,  UtilDAO::UsuarioLogado());
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();

        return $sql->fetchAll();
        }


    public function DetalharConta($id) 
    {
        $conexao = $this->retornaConexao();

        $comando_sql = 'SELECT   banco_conta,
                                 agencia_conta, 
                                 numero_conta,
                                 saldo_conta,
                                 id_conta
                         FROM    tb_conta 
                         WHERE   id_usuario = ?
                         AND     id_conta = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1,  UtilDAO::UsuarioLogado());
        $sql->bindValue(2, $id);
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();

        return $sql->fetchAll();
    }


    public function AlterarConta($banco, $agencia, $numero, $saldo, $id)
    {
       if  ($banco == '' || $agencia == '' || $numero == '' || $saldo == '') {
            return 0;
        }
        $conexao = $this->retornaConexao();

        $comando_sql = 'UPDATE tb_conta
                        SET    banco_conta =?, 
                               agencia_conta =?, 
                               numero_conta =?,
                               saldo_conta =?
                        WHERE  id_conta =?
                        AND    id_usuario =?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $banco);
        $sql->bindValue(2, $agencia);
        $sql->bindValue(3, $numero);
        $sql->bindValue(4, $saldo);
        $sql->bindValue(5, $id);
        $sql->bindValue(6, UtilDAO::UsuarioLogado());


        try {

            $sql->execute();
            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
            return -1;
        }
    }

    

    public function ExcluirConta($id)
    {
        if ($id == '') {
            return 0;
        }

        $conexao = $this->retornaConexao();

        $comando_sql = 'DELETE FROM tb_conta WHERE id_conta = ? AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $id);
        $sql->bindValue(2,  UtilDAO::UsuarioLogado());
       
        try{
            $sql->execute();
            return 1;
        }catch(Exception $ex){
            return -4;
        }
    
    }
}