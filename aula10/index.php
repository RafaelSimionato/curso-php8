<?php

// VARIÁVEIS
// ===================

# São usadas para guardar dados: números, textos, etc
# Podemos apresentar e modificar os seus valores ao longo do código
# Definem-se com um dollar ( $ ) e um identiicador (nome da variavel)

$variavel;



# Podemos definir e iniciar uma variavel
// $variavel = 100;

# Podemos alterar o tipo de valores de uma variavel 
// $variavel = "teste";
// O ( = ) é chamado de sinal de atribuição, e é usado para indicar o valor da variavel



// Em PHP as variaveis não são tipadas, ou seja, podemos alterar de numerica para string posteriormente, por exemplo, e isso pode tornar um pouco confuso, pois não sabemos o tipo da variável ao longo do script



# As variaveis são case sensitive, ou seja, são sensiveis ao tamanho da letra, (maiuscula e minuscula)
// $variavel = "Uma variavel";
// $Variavel = "Outra variavel";



// Abaixo algumas maneiras que não são aceitas na criação de variaveis
/*
$1var = 0;
$!var = 0;
$variavel(1) = 0;
$variavel 1 = 0;
$variavel-1 = 0;
*/

// Abaixo as maneiras corretas de criar as mesmas variaveis
/*
$var1 = 0;
$var_um = 0;
$varUm = 0;
$_um = 0;
$_1 = 0;
*/



# Não existe regra, porém, as convenções de boas práticas na escrita do código, sugerem...

$umaVariavel = 0; # camel case
$uma_variavel = 0; #com undersores (snake case)
$UmaVariavel = 0; #studly case (não recomendado)


# Em resumo, devemos por boa pratica, manter o mesmo estilo de variavel ao longo do projeto

$variavel = 100;
echo $variavel;









