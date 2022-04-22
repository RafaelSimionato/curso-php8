<?php

# FUNCTIONS / FUNÇÕES

# PARÂMETROS OPCIONAIS

# Podemos criar funções que tem parâmetros com um valor pre definido
# A chamada dessas funções não obriga a definir argumentos para esses parâmetros


/*
A função multiplicar que está logo abaixo, possui 2 parâmetros ($a, $b), mas, no caso da $b, a mesma possui uma atribuição, que no caso é o valor 2

Isso significa que o parâmetro $b passa a ser opcional

Ou seja, quando eu chamar a função, eu posso ou não, passar o valor da $b
*/


function multiplicar($a, $b = 2)
{
    // Código aqui

    # $a sera o valor passado por argumento
    # $b sera: 
    #   O valor do argumento se ele for passado na chamada
    #   O valor 2 se não for passado o argumento

    echo $a * $b;
}

multiplicar(10); # $a = 10 e $b = 2
echo '<br>';
multiplicar(10,20); # $a = 10 e $b = 20
echo '<hr>';


# IMPORTANTE

# Os parâmetros opcionais tem que ser definidos após os parâmetros não opcionais
function dividir($a = 2, $b) // Estes parâmetros deveriam estar inversos, ex: ($b, $a = 2)
{
    echo "$a e $b";
}

dividir(2, 10);

# No PHP 7 ainda era possível fazer isso sem avisos, mas no PHP 8, aparecerá um aviso
