<?php


require_once 'UtilDAO.php';
require_once 'Conexao.php';


class CategoriaDAO extends Conexao

{
    public function CadastrarCategoria($nomeCat)
    {
        if ($nomeCat == '') {
            return 0;
        }
        //Inicio do codigo que frá o inset no BD
        //1° passo: Criar uma variavel que guarda o obj de conexão
        $conexao = $this->retornaConexao();

        //2° passo: Comando SQL que será executado
        $comando_sql = 'INSERT INTO tb_categoria (nome_categoria, id_usuario) VALUES (?, ?)';

        //3° passo: Criar o obj que levara as instruições para o BD
        $sql = new PDOStatement();

        //4° passo: Conecta tudo
        $sql = $conexao->prepare($comando_sql);

        //5° passo: Observar se tem valores a serem configurados no SQL
        $sql->bindValue(1, $nomeCat);
        $sql->bindValue(2, UtilDAO::UsuarioLogado());

        //Tratamento de erro, onde se der certo, retorno 1, caso contrário -1
        try {

            $sql->execute();
            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
            return -1;
        }
    }


    public function ConsultarCategoria()
    {
        $conexao = $this->retornaConexao();

        $comando_sql = ' SELECT nome_categoria, id_categoria FROM tb_categoria WHERE id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1,  UtilDAO::UsuarioLogado());
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();

        return $sql->fetchAll();
    }

    public function DetalharCategoria($id)
    {
        $conexao = $this->retornaConexao();

        $comando_sql = ' SELECT nome_categoria, id_categoria FROM tb_categoria WHERE id_usuario = ? AND id_categoria = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1,  UtilDAO::UsuarioLogado());
        $sql->bindValue(2, $id);
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();

        return $sql->fetchAll();
    }


    public function AlterarCategoria($nomeCat, $id)
    {
        if ($nomeCat == '' || $id == '') {
            return 0;
        }
        $conexao = $this->retornaConexao();

        $comando_sql = 'UPDATE tb_categoria
                        SET nome_categoria =?
                        WHERE id_categoria =?
                        AND id_usuario =?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nomeCat);
        $sql->bindValue(2, $id);
        $sql->bindValue(3, UtilDAO::UsuarioLogado());


        try {

            $sql->execute();
            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
            return -1;
        }
    }
    public function ExcluirCategoria($nomeCat)
    {
        if ($nomeCat == '') {
            return 0;
        } else {
            return 1;
        }
    }
}
