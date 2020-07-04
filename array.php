<?php

/** 
 * @Desc: Tendo os arrays ['ES', 'MG', 'RJ', 'SP'] e ['São Paulo', 'Rio de Janeiro', 
 * 'Minas Gerais', 'Espírito Santo'], percorra os vetores dados e crie um outro com a 
 * seguinte estrutura: ['ES'=>'Espírito Santo', 'MG'=>'Minas Gerais', 'RJ'=>'Rio de 
 * Janeiro', 'SP'=>'São Paulo']. Depois de criado terceiro vetor, leia-o e imprima em 
 * cada linha a chave de cada posição e seu respectivo valor separados por "-". 
 */

$statesInitials = ['ES', 'MG', 'RJ', 'SP'];
$states = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

$statesAndInitials = [];

$j = 3;
for ($i=0; $i < count($states); $i++) { 
    $statesAndInitials[$statesInitials[$i]] = $states[$j] ;
    $j--;
}

foreach ($statesAndInitials as $key => $value) {
    echo "<p>{$key} - {$value}</p>";
}