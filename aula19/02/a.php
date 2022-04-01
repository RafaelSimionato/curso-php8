<?php

# STRINGS são variaveis muito especiais dentro do PHP
# Existem dezenas de funções para tratamento de strings
# (Veremos mais a frente o que são funções e como criar funções)

# Por exemplo, pode apresentar um determinado caracter de uma string, da seguinte forma

$frase = 'Esta frase tem 29 caracteres.';
$n = '<br>';

// Apresenta o primeiro caracter da frase
echo $frase[0];
echo $n;

// Apresenta o sexto caracter da frase
echo $frase[5];


# Uma função é um bloco de códigos que normalmente recebe valores, através daquilo que se designa como argumentos, faz um conjunto de calculos, analises etc. E devolve um determinado resultado