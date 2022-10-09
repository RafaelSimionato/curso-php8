<?php

# STRICT TYPING

/*
A partir do PHP 7.1, passou a ser possível usar um tipo de declaração nullable
Com isto, além do tipo de valor "normal" que a variável pode ter,
também pode ter o valor nulo
Usamos para isso um prefixo ? antes do tipo de valor
*/

declare(strict_types=1);

function falar(?string $mensagem) {
    echo $mensagem;
}

falar('Minha mensagem ');
falar(null);        // também passa a ser possível

/*
Com o PHP 8 aparece a possibilidade de definirmos mais do que um tipo
para o mesmo argumento. Os tipos podem ser separados por barras verticais
*/

function conversar(int|string $mensagem) { //Se não tivesse o int, por exemplo, a opção 2500 não valeria
    echo $mensagem;
}

conversar('Olá Mundo!');
conversar(2500);

/* Ou no caso dos tipos de retorno */
function calcular_quadrado_de(int|float $v1): int|float {
    return $v1 * $v1;
    return 'João';
}

echo calcular_quadrado_de(25);
echo calcular_quadrado_de('João'); // Aqui temos um erro, pois não podemos calcular o valor de uma string
// já que neste caso pedimos por int ou float na função
