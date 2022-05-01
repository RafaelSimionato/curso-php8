<?php

# FUNÇÕES ANÔNIMAS

# A partir do PHP 5.3 foram introduzidas as funções anônimas

# Uma função anônima não tem nome e pode ser definida como o valor
# a atribuir a uma variável

$a = function()
{
    echo '<p>Olá! </p>';
};

# IMPORTANTE
# Neste caso, após a chave de fecho da função, tem que existir o ;

$a(); // Esta linha escuta a função anônima acima e mostra o echo da função



# ------------------------------------------------------
# Outro exemplo

$falar = function($mensagem) //Lê-se:
// A variável falar, é igual a função (Neste caso é uma função anônima) com parâmetro mensagem 
{
    echo "<p>Eu digo: $mensagem</p>";
};

$falar('Estou aqui! '); // Aqui chamamos a função e inserimos o parâmetro que quisermos
// Este parâmetro será passado para $mensagem e depois será mostrado no echo



# ------------------------------------------------------
# E ainda outro exemplo

$andar = function($metros)
{
    return "Andei $metros metros ";
};

echo $andar(100);



# ------------------------------------------------------
# As funções anônimas são particularmente úteis quando
# as queremos passar como argumentos para uma função

$a = function()
{
    return '<p>Função A</p>';
};

function falar($x){
    echo $x;
}

falar($a());
