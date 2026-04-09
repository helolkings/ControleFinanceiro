<?php

require_once 'UtilDAO.php';
require_once 'Conexao.php';


class EmpresaDAO extends Conexao
{
    public function CadastrarEmpresa($empresa, $telefone, $endereco){
        if($empresa == '' || $telefone == '' || $endereco == ''){
            return 0;
        }else{
            return 1;
    }
}
    public function ConsultarEmpresa(){}


    public function DetalharEmpresa(){}


     public function AlterarEmpresa($empresa, $telefone, $endereco){
        if($empresa == '' || $telefone == '' || $endereco == ''){
            return 0;
        }else{
            return 1;
    }
}
     public function ExcluirEmpresa($empresa, $telefone, $endereco){
        if($empresa == '' || $telefone == '' || $endereco == ''){
            return 0;
        }else{
            return 1;
    }
}
}






