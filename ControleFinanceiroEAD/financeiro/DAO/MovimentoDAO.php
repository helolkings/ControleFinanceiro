<?php


require_once 'MovimentoDAO.php';


class MovimentoDAO{
    function RealizarMovimento($tipo, $data, $valor, $categoria, $empresa, $conta, $obs){
        if ($tipo == '' || $data == '' || $valor == '' || $categoria == '' || $empresa == '' || $conta == '' || $obs == '') {
            return 0;
        } else {
            return 1;
    }
}
    function ConsultarMovimento($tipoMov, $dtInicio, $dtFinal){
        if ($tipoMov == '' || $dtInicio == '' || $dtFinal == '' ) {
            return 0;
        } else {
            return 1;


    }
}
    public function ExcluirMovimento(){}
    public function TotalDeEntrada(){}
    public function TotalDeSaida(){}
    public function UltimosDezMovimentos(){}


}           






