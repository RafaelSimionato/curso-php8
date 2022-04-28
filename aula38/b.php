<?php

# ESCOPO E CICLO DE VIDA DE UMA VARIÁVEL

# GLOBAL

# ----------------------------------------------
# Neste exemplo, a variável $a existe em dois escopos diferentes

$a = 10;

function funcao()
{
    // global $a;
    $a = 20;
}

// Sem o global, quando chamar a função, o resultado será 10, porém...
// Quando inserimos a variável global, o sistema trás a variável que esta fora da função, para dentro dela
// Como temos $a = 20 dentro da função, com o global, o valor de $a será alterado
// Por conta disto, quando executar a função, conforme abaixo, e apresentarmos o valor no echo: 
// $a será agora 20 ao invés de 10, pois foi alterada com o global

funcao();

echo "<p>$a</p>";

# ----------------------------------------------
# Outro exemplo

$b = 100;

function funcao2()
{
    $b = 200;
    // $GLOBALS['b'] = 200;
}

/*

// Quando chamarmos a função, conforme abaixo, e apresentarmos com o echo, o valor mostrado será o 100
// Isso acontece, pois a $b = 200 só existe dentro da função, por isso, o valor que vale é $b = 100

// No entanto, quando usamos uma SUPERGLOBAL, ou neste caso, uma coleção e ou array
// $GLOBALS que existe no PHP, conforme acima *Esta como comentário dentro da função

// A $GLOBALS permite dizer dentro de seu índice, no caso acima, o índice é ['b']
// que é está variável que quero tornar global dentro da minha função
// Ou seja, o valor de $b, agora passa a ser 200 ao invés de 100 dentro da função

*/

funcao2();

echo "<p>$b</p>";
