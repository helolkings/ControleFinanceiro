<?php

require_once 'UtilDAO.php';
require_once 'Conexao.php';


class EmpresaDAO extends Conexao

{
    public function CadastrarEmpresa($empresa, $telefone, $endereco)
    {
        if ($empresa == '' || $telefone == '' || $endereco == '') {
            return 0;
        }
        $conexao = $this->retornaConexao();

        $comando_sql = 'INSERT INTO tb_empresa (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
                        VALUES (?, ?, ?, ?)';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $empresa);
        $sql->bindValue(2, $telefone);
        $sql->bindValue(3, $endereco);
        $sql->bindValue(4, UtilDAO::UsuarioLogado());

        try {

            $sql->execute();
            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
            return -1;
        }
    }
    public function ConsultarEmpresa() {

    $conexao = $this->retornaConexao();

        $comando_sql = ' SELECT nome_empresa,
                                telefone_empresa, 
                                endereco_empresa,
                                id_empresa
                         FROM   tb_empresa 
                         WHERE  id_usuario = ?
                         ORDER BY nome_empresa ASC';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1,  UtilDAO::UsuarioLogado());
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();

        return $sql->fetchAll();

    }
    public function DetalharEmpresa($id) {

    $conexao = $this->retornaConexao();

        $comando_sql = ' SELECT nome_empresa,
                                telefone_empresa, 
                                endereco_empresa,
                                id_empresa
                         FROM   tb_empresa 
                         WHERE  id_usuario = ? 
                         AND    id_empresa = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1,  UtilDAO::UsuarioLogado());
        $sql->bindValue(2, $id);
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();

        return $sql->fetchAll();

    }

    public function AlterarEmpresa($empresa, $telefone, $endereco, $id)
    {
         if ($empresa == '' || $telefone == '' || $endereco == '') {
            return 0;
        }
        $conexao = $this->retornaConexao();

        $comando_sql = 'UPDATE tb_empresa
                        SET    nome_empresa =?, 
                               telefone_empresa =?, 
                               endereco_empresa =?
                        WHERE  id_empresa =?
                        AND    id_usuario =?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $empresa);
        $sql->bindValue(2, $telefone);
        $sql->bindValue(3, $endereco);
        $sql->bindValue(4, $id);
        $sql->bindValue(5, UtilDAO::UsuarioLogado());


        try {

            $sql->execute();
            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
            return -1;
        }
    }
    
    public function ExcluirEmpresa($id)
    {
        if ($id == '') {
            return 0;
        }

        $conexao = $this->retornaConexao();

        $comando_sql = 'DELETE FROM tb_empresa WHERE id_empresa = ? AND id_usuario = ?';

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

