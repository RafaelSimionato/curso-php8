<?php

# NULL COALESCING OPERATOR

/*
Com o PHP 7 foi introduzido o Operador de Coalescência de Nulos
Coalescência significa aglutinação ou junção de itens separados

Basicamente este operador é um atalho para alguns casos do operador
condicional ternário
Vejamos o exemplo:
*/

$x = null; // A variável existe, mas não tem valor atribuído. Ou seja, não tem valor
$nome = $x ?? 'Sem nome';

// Este exemplo é semelhante a: 
$nome1 = isset($x) ? $x : 'Sem nome';

// Portanto, se x for null, então é atribuído o valor definido
// à frente dos dois sinais de interrogação

/*
Com o PHP 7.4, foi acrescentado o operador de atribuição a seguir
ao operador de coalescência
Isto permite um cenário ainda mais simples para definir variáveis 
nulas ou sem valor atribuído
*/

$apelido = null;
$apelido ??= 'Apelido desconhecido';
// Neste caso, apelido = 'Apelido desconhecido'

echo $nome;
echo '<br>';
echo $apelido;
