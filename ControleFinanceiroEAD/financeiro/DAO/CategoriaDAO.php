<?php


require_once 'CategortiaDAO.php';


class CategoriaDAO{
    public function CadastrarCategoria($nomeCat){
        if($nomeCat == ''){
            return 0;
        }else{
            return 1;
    }
}
    public function ConsultarCategoria(){}
   
    public function DetalharCategoria(){}


     public function AlterarCategoria($nomeCat){
        if($nomeCat == ''){
            return 0;
        }else{
            return 1;
    }
}
     public function ExcluirCategoria($nomeCat){
        if($nomeCat == ''){
            return 0;
        }else{
            return 1;
    }
}
}






   