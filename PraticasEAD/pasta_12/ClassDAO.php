<?php


    // DAO: Data Access Object (Classe de Orientação a Objeto).


    // Tipos de Functions: public | private | static.


    class ClassDAO{
        public function CalcularCombustivel($gas, $qtds_litros){
            if($gas == '' || $qtds_litros == ''){
                return 'vazio';
            }else{
                if($gas == 1){
                    $retorno = $this->Etanol($qtds_litros);
                }else if($gas == 2){
                    $retorno = $this->Gasolina($qtds_litros);
                }else if($gas == 3){
                    $retorno = $this->Diesel($qtds_litros);
                }
                return $retorno;
            }
        }


        private function Etanol($qtds_litros){
            return $qtds_litros * 3.09;
        }


        private function Gasolina($qtds_litros){
            return $qtds_litros * 4.10;
        }


        private function Diesel($qtds_litros){
            return $qtds_litros * 4.60;
        }


        public function Conversor($tipo, $temperatura){
            if($tipo == '' || $temperatura == ''){
                return 'vazio';
            }else{
                if($tipo == 1)    {
                    $result = $this->Fahrenheit($temperatura);
                }else{
                    $result = $this->Celsius($temperatura);
                }  
                return $result;          
            }
        }


        private function Fahrenheit($temperatura){
            return round(($temperatura - 32) * 5 / 9, 3);
        }


        private function Celsius($temperatura){
            return round(($temperatura * 9 / 5) + 32, 3);
        }


        public function CalcularSalario($meses, $salario, $lucro, $perda){
            if($meses == '' || $salario == '' || $lucro == '' || $perda == ''){
                return 'vazio';
            }else{
                $ganhos = $meses * $salario;
                $totalLucro = ($ganhos * $lucro) / 100;
                $totalPerda = ($ganhos * $perda) / 100;


                return number_format(($ganhos + $totalLucro) - $totalPerda, 2, ',', '.');
            }
        }
    }


