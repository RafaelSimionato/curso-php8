<?php

// VAR_EXPORT

/*
Apresenta informação sobre uma variável num estilo que pode
ser usado como código PHP
*/

$nome = "Joao";
var_export($nome);

echo '<br>';

$valores = [1,2,3];
var_export($valores);

echo '<br>';

$numeros = [];
for($i = 0; $i < 10; $i++) {
    $numeros[] = rand (0,100); //rand é uma função ativa do PHP que serve como random
}
var_export($numeros);
