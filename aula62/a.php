<?php

# TYPE DECLARATIONS

/*
Quando dissemos que o PHP não é uma linguagem tipificada, isto é, as variáveis
não tem necessariamente que ser definidas com um tipo, não é bem assim
É possível especificar que tipo de valor podemos usar para
parâmetros e funções, propriedades de classes e tipos de retorno de funções

Vejamos no caso de um array como parâmetro de uma função:
*/

function falar(array $mensagem) {
    echo $mensagem;
}

// falar('joao'); // não é possível

// -----------------------------------------

function conversar (string $mensagem) {
    echo $mensagem;
}

// aqui vai ser feita uma conversão de inteiro para string
conversar(2500);

// conversar(['a']); // não é possível
