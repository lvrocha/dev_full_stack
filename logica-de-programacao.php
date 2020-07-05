<?php
/** 
 * @Desc:  Pensando em todos os números naturais inferiores a 10 que são múltiplos 
 * de 3 ou 5, temos 3, 5, 6 e 9. Somando esses múltiplos obtemos o valor 23. Utilize 
 * um algorítimo para calcular a soma de todos os múltiplos de 3 ou 5 abaixo de 1000
 */

// $vector = [];
// for ($i = 1; $i < 1001; $i++) {
//     if (($i % 3) == 0) {
//         $vector[] += $i;
//     }elseif (($i % 5) == 0){
//         $vector[] += $i;
//     }
// }

// $sum = 0;
// foreach ($vector as $item) {
//     $sum += $item;
// }

// echo "<p>{$sum}</p>";

$vector = [];

for ($i=1; $i < 1001; $i++) { 
    $vector[] += $i;
}

function div_3_and_5($value){
    if (($value % 3) == 0) {
        return $value;
    }elseif (($value % 5) == 0){
        return $value;
    }
}

function sum($sum, $item){
    $sum += $item;
    return $sum;
}

$filtered = array_filter($vector,"div_3_and_5");
$sum = array_reduce($filtered, "sum");

echo $sum;



