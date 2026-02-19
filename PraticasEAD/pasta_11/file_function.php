<?php
// Todo o valor entre parâmetros de uma função, não é uma variável e sim um parâmetro, pois ele não aloca valores, apenas passa dados para a execuçaõ e código desenvolvido no escopo!


function SomarValoresExemplo($valor1, $valor2)
{
    $soma = $valor1 + $valor2;


    return $soma;
}


//ex1


function ValidarNome($usuario)
{
    if (strlen($usuario) < 3) {
        return -1;
    }
}
function ValidarDescricao($desc)
{
    if (strlen($desc) < 50) {
        return -2;
    }
}
function ValidarSenha($senha)
{
    // strlen($senha) < 6 || strlen($senha) > 8
    if (strlen($senha) < 6) {
        return -3;
    }
}
function CompararSenhas($senha, $repsenha)
{
    if ($senha != $repsenha) {
        return -4;
    }
}


//ex2




function CaclcularSalario($dinheiro, $bonus)
{
    if ($dinheiro == '' || $bonus == '') {
        return 'vazio';
    } else {
        //ou return $calculo;
        return $dinheiro + (($dinheiro + $bonus) / 100);
    }
}

                      
//ex3

function CaclcularSoma ($n1, $n2, $n3, $n4, $n5)
{
    if ( $n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '') {
        return 'vazio';
    } else {
        //ou return $calculo;
        return ($n1 + $n2 + $n3) + ($n4 * $n5);
    }
}



