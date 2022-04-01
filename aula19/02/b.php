<?php

# Podemos comparar strings da seguinte forma

$a = 'Rafael';
$b = 'Simionato';
$c = ($a == $b);   // False
$d = ($a != $b);   // True


# Existem muitas funções nativas no PHP para operar com strings

# Exemplos:

$frase = 'Esta frase tem 29 caracteres.';

# Retorna o numero de caracteres da string
$numero_caracteres_total = strlen($frase);

# Retorna as letras a partir da posição 0 e durante 4 caracteres
$primeira_palavra = substr($frase, 0, 4);   # Esta

# Converte toda a string em letras maiúsculas
$todas_maiusculas = strtoupper($frase);

# Converte em letras minúsculas
$todas_minusculas = strtolower($frase);

# Substituir uma letra por outra
$nova_frase = str_replace('a','x',$frase);  # Estx frxse tem 29 cxrxcteres

# Verifica qual é a posição de um caracter dentro da string
$posicao = strpos($frase, 'a');   # 3

// https://www.php.net/manual/pt_BR/ref.strings.php
