<?php

# FUNCTIONS / FUNÇÕES - PARÂMETROS

# Como vimos atrás, uma função tem um nome e um conjunto de parênteses
# Dentro desses parênteses, nós podemos definir um conjunto de parâmetros (assinatura da função)
// A assinatura da função é o nome dela + conjunto de parâmetros 
// Conjunto de parâmetros é tudo que está dentro dos parênteses ao lado do nome da função, 
// e que definem a função em questão
// Conjunto de parâmetros é também chamado de resto da assinatura da função

# Vejamos o exemplo

function adicao($a, $b) {
    // Código da função aqui
}

# Nesta função adicao, temos dois parâmetros $a e $b
# São duas variáveis de PHP que vão existir dentro da função
# Os parâmetros permitem passar valores para o interior de uma função quando ela é chamada
# Os parâmetros são separados por vírgulas

adicionar(10, 20); // Os argumentos (valores que são passados para as variáveis acima)
// Neste caso, os argumentos, 10, 20 substituiriam $a, $b respectivamente
# adicionar(100, 200); // Assim, a função leria 10, 20 e depois 100,200

function adicionar($a, $b) {
    echo "$a + $b = " . $a + $b; # No PHP 7 emite um aviso
    echo '<br>';
    echo "$a + $b = " . ($a + $b); # Esta é a maneira tradicional
}
// Na maneira tradicional é feito o cálculo antes de mostrar os valores que estão entre aspas duplas
// Ou seja, tem precedência, já que está entre parênteses

echo '<br>';

# No PHP 8 já não são mais necessários os parênteses nas operações

$nomes = ['João', 'Ana', 'Carlos'];

foreach($nomes as $nome) {
    saudacao($nome); // $nome é o argumento
}

function saudacao($valor) { // $valor é um parâmetro
    echo "Bom dia $valor <br>"; // Este parâmetro é usado para construir este texto
}

# Para ser mais preciso, parâmetros é o nome das variáveis existentes
# na definição da função
# Argumentos são os dados passados quando a função é chamada
// Ou seja, quando chamo a função saudacao, o $nome é o argumento
