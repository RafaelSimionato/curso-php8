<?php

# É possível executar uma expressão de retorno dentro de um script importado

$paises = require_once 'dados.php';
// echo 'Países';
// echo '<pre>';
// print_r($paises); //print_r imprime o conteúdo todo do array

# Para um script mais sofisticado, posso também usar conforme abaixo

echo 'Países';
echo '<hr>';
foreach($paises as $pais) {
echo $pais . '<br>';
}
