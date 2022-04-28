<?php

# RETURN

# A declaração return provoca o fim da execução do código de uma função,
# retornando ao local onde a função foi chamada

function falar()
{
    return;
    echo 'Não vai ser apresentado esse texto';
}

# Opcionalmente podemos usar o return para devolver um valor
# Desta forma, uma função pode ser responsável, por exemplo,
# por desenvolver um conjunto de cálculos e devolver o resultado

function adicionar($a, $b)
{
    $resultado = $a + $b;
    return $resultado;

    # Ou

    return $a + $b;
}

echo adicionar(10,20); # Vai apresentar o valor 30



# OUTRO EXEMPLO

$nome = 'João';
if(avaliar_nome($nome)) {
    echo 'O cliente esta correto';
}

function avaliar_nome($n) {
    if($n == 'João') {
        return true;
    } else {
        return false;
    }
}



# Uma função sem qualquer valor de retorno, devolve sempre um valor null

function teste() {
    // Código aqui...
}

if(falar() === null) {
    echo 'Função com retorno igual a nulo'; # Vai apresentar este texto
}
