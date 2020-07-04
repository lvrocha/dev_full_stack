<?php

/**
 * @Desc:  Crie uma função recursiva para descobrir o menor número inteiro divisível por
 * 2, 3 e 10 ao mesmo tempo. Quando encontrá-lo, imprima-o na tela.
 */

function mmc($num1, $num2)
{
    $a = $num1;
    $b = $num2;

    do {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    } while ($resto != 0);

    return ($num1 * $num2) / $a;
};

$a = mmc(5, 7);
$b = mmc($a, 10);
var_dump($b);
