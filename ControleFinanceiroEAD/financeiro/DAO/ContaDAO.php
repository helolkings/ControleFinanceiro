<?php


require_once 'UtilDAO.php';


class ContaDAO{
    public function CadastrarConta($banco, $agencia, $numero, $saldo){
        if($banco == '' || $agencia == '' || $numero == '' || $saldo == ''){
            return 0;
        }else{
            return 1;
    }
}
    public function ConsultarConta(){}

           
    public function DetalharConta(){}


     public function AlterarConta($banco, $agencia, $numero, $saldo){
        if($banco == '' || $agencia == '' || $numero == '' || $saldo == ''){
            return 0;
        }else{
            return 1;
    }
}
     public function ExcluirConta($banco, $agencia, $numero, $saldo){
        if($banco == '' || $agencia == '' || $numero == '' || $saldo == ''){
            return 0;
        }else{
            return 1;
    }
}
}






