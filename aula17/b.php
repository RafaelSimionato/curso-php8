<?php

# CONCATENAÇÃO DE STRINGS
// (Concatenação é o mesmo que junção, e ou juntar)

# É o processo que, através do codigo, permite juntar varias strings
# Existem dois operadores de concatenação

# .
# .=

$a = 'Rafael' . ' ' . 'Simionato';   # O ponto ( . ) liga as diferentes strings

$b = 'Rafael';
$b .= ' ' . 'Simionato';           # O ponto e igual juntos ( .= ) faz uma concatenação com o valor ja existente na string

echo $b;
die();
// A função die() acima encerra o codigo, ou seja, o script comecara ser executado do inicio e quando encontrar a funcao die() ele automaticamente ira parar

# Usei a função die() pois tenho mais codigos de exemplos logo abaixo...





$nome = 'Rafael';
$apelido = 'Simionato';
$nome_completo = $nome . ' ' . $apelido;

echo $nome_completo;
die();





# A diferença entre strings delimitadas por ' e por " é que, no segundo caso, podemos fazer o seguinte:

$nome = 'Rafael';
$apelido = 'Simionato';
$nome_completo = "$nome $apelido";

echo $nome_completo;

# Ao contrario das ", nas strings ' as variaveis nao sao interpretadas relativamente ao seu valor (Parse)
// O Parse é uma especie de analise sintatica, faz o conteudo ser lido corretamente, ele interpreta o script corretamente

// No exemplo acima, por exemplo, se as variaveis $nome e $apelido, estivessem entre aspas simples ( ' ) o output seria justamente as variaveis $nome e $apelido, ao inves do seu conteudo (Rafael Simionato)

