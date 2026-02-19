<?php
$var_array_1 = array ('Vermelho', 'Azul', 'Amarelo');

$var_array_2 =  ['Vermelho', 'Azul', 'Amarelo'];

$var_array_3 = array();
$var_array_3[] = 'Vermelho';
$var_array_3[] = 'Azul';
$var_array_3[] = 'Amatelo';

echo '<pre>';
print_r($var_array_1);

echo '</pre><hr><pre>';
var_dump($var_array_2);
echo '</pre><hr>';


for ($i = 0; $i < count($var_array_1); $i++) {
    echo 'O valor que esta na posição ' . $i . ' é ' . $var_array_1[$i] . '.<br>';
}
echo '<hr>';


for ($i = 0; $i < count($var_array_2); $i++) {
    echo 'O valor que esta na posição ' . $i . ' é ' . $var_array_2[$i] . '.<br>';
}
echo '<hr>';


for ($i = 0; $i < count($var_array_3); $i++) {
    echo 'O valor que esta na posição ' . $i . ' é ' . $var_array_3[$i] . '.<br>';
}
echo '<hr>';

?>