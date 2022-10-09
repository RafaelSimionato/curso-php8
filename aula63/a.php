<?php

# STRICT TYPING

/*
O comportamento do PHP é tentar converter os tipos declarados
*/

function falar(string $mensagem) {
    echo $mensagem;
}

falar('Olá Mundo! '); // É possível
falar(2500);          // É possível

function somar(int $v1, int $v2) {
    return $v1 + $v2;
}

echo somar(10,20);      // É possível
echo somar('a', 'b');   // É possível também

/*
Mas podemos "obrigar" o PHP a seguir a regra estritamente definida
*/

// declare(strict_types=1);
# E fundamental que esta instrução deva sempre ser a primeira do script,
# antes mesmo de qualquer outra função ou output

# types=1 ou seja, 'tipo verdadeiro' declarar tipos estritamente verdadeiros
// Inserindo este declare, os comandos das funções acima, não seriam mais possíveis...
// No caso, é claro, onde pede string e temos int, e vice-versa ex: linhas 14 e 21
