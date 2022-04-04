<?php

# DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

# Declaração IF - define blocos de código que só são executados
# se a condição for verdadeira (true)

$nome = 'joao';
if($nome == 'joao') {
    echo 'Foi identificado o nome do professor ';
}

# IF... ELSE

$idade = 18;
if($idade <= 18) {
    echo 'Adolescente';
} else {
    echo 'Adulto';
}
// Se a condição idade for 'true' ou seja, menor ou igual a 18, é Adolescente, senão, Adulto


# IF ... ELSEIF ... ELSE (Se, ou se, caso contrário)

$nota = 5; // Num universo de 0 a 10
if($nota <= 2) {
    echo 'Nota fraca';
} elseif($nota <= 4) {
    echo 'Nota insuficiente';
} elseif($nota <= 6) {
    echo 'Nota positiva';
} elseif($nota <= 8) {
    echo 'Nota muito positiva';
} else {
    echo 'Nota excelente! ';
}

# Podemos deixar de usar as chavetas/chaves, se só existir uma instrução no bloco

if($nota <= 2)
    echo 'Nota fraca';
elseif($nota <= 4)
    echo 'Nota insuficiente';
elseif($nota <= 6)
    echo 'Nota positiva';
elseif($nota <= 8)
    echo 'Nota muito positiva';
else
    echo 'Nota excelente! ';


# É possível misturar ambas situações, porém, devemos prestar bastante atenção nestes casos
# Se tivermos uma condição, cuja o bloco, sendo verdadeiro, vai ter que escutar mais de uma operação
# Neste caso então, podemos combinar o uso de chaves {} com a sua não utilização também
# Segue exemplo abaixo:


if($nota <= 2) {
    echo 'Nota fraca';
    echo 'Reportar ao diretor da escola';
}
elseif($nota <= 4)
    echo 'Nota insuficiente';
elseif($nota <= 6)
    echo 'Nota positiva';
elseif($nota <= 8)
    echo 'Nota muito positiva';
else
    echo 'Nota excelente! ';

