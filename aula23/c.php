<?php

# DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

# Uso de operadores lógicos

$numero = 20;
if($numero > 10 && $numero != 30) {
    // executar o código
} else {
    // executar outro código
}


# Condições dentro de condições

$numero = 10;
if($numero >= 0) {
    if($numero >= 100) {
        echo 'O numero é igual ou maior que 100';
    } else {
        echo 'O numero é positivo mas inferior a 100';
    }
} else {
    echo 'O numero é negativo';
}
