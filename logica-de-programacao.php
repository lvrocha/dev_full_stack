<?php
/** 
 * @Desc:  Pensando em todos os números naturais inferiores a 10 que são múltiplos 
 * de 3 ou 5, temos 3, 5, 6 e 9. Somando esses múltiplos obtemos o valor 23. Utilize 
 * um algorítimo para calcular a soma de todos os múltiplos de 3 ou 5 abaixo de 1000
 */

$vector = [];
for ($i = 1; $i < 1001; $i++) {
    if (($i % 3) == 0) {
        $vector[] += $i;
    }elseif (($i % 5) == 0){
        $vector[] += $i;
    }
}

$sum = 0;
foreach ($vector as $item) {
    $sum += $item;
}

echo $sum;