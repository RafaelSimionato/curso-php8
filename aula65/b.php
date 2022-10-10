<?php

# TESTANDO VARIÁVEIS

# IS_NULL

/*
Verifica se uma variável tem valor null ou não
*/

$b = 'João';
is_null($b); // false

$c = null;
is_null($c); // true

/*
Com o PHP 8 ouve uma mudança na forma como o is_null funciona
Anteriormente, ao testar com o is_null uma variável inexistente,
era apresentado resultado verdadeiro com um aviso

Com o PHP 8 passa a existir um erro de tipo
*/

is_null($d); // erro
