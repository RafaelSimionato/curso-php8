<?php

# CARACTERES DE ESCAPE

echo '<p> Este é um parágrafo de HTML</p> ';
echo '<br>';

# Os caracteres de escape são usados para escrever caracteres especiais
# Como é o caso de alguns símbolos que podem entrar em conflito com o código

$frase_1 = 'I'm going to John'n Party!';
$frase_2 = "I'm going to John's party! ";

$frase_3 = "I'm not sure John "The Great" will win this fight. ";

# a \ é o simbolo para definir um caracter de escape

$frase_1 = 'I\'m going to John\'s Party! ';

$frase_3 = 'I\'m not sure John "The Great" will win this fight.';
$frase_3 = "I'm not sure John \"The Great\" will win this fight. ";
