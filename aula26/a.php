<?php

# EXPRESSÃO MATCH

# No PHP 8 foi introduzida uma nova expressão condicional designada por Match
# É muito semelhante ao SWITCH, mas com uma síntese mais concisa

# ----------------------------------------------------------------------------
# Com SWITCH

$x = 10;
switch ($x) {
    case 5:
        echo 'Parou no 5';
        break;

    case 10:
        echo 'Parou no 10';
        break;
    
    case 15:
        echo 'Parou no 15';
        break;

    default;
        echo 'É um número diferente de 5, 10 ou 15 ';
        break;
}

echo '<hr>';

# -------------------------------------------------------------------
# Com MATCH

echo match($x) {
    05 => 'Parou no 05',
    10 => 'Parou no 10',
    15 => 'Parou no 15',
    default => 'É um número diferente de 5, 10 ou 15'
};

# No MATCH apenas uma expressão é válida por cada condição
# E é possível executar a mesma operação para várias condições

$x = 10;
$opcao = match($x) {
    2 => 'é 2',
    4,5,6 => 'é 4, 5 ou 6',
    default => 'é outro valor'
};

# No SWITCH também é possível

$x = 10;
switch ($x) {
    case 2:
        $opcao = 'é 2';
        break;
    case 4:
    case 5:
    case 6:
        $opcao = 'é 4, 5 ou 6';
        break;
    
    default:
        $opcao = 'é outro valor';
        break;
}

# IMPORTANTE
# No SWITCH, as comparações podem ser feitas só por valor ( == )
# No caso do MATCH, são sempre feitas por valor e tipo ( === )

echo '<hr>';


$x = '1'; //Vale lembrar que neste caso o '1' é STRING, pois esta entre aspas, mas possui um algarismo

switch ($x) {
    case 1:
        echo 'inteiro'; break;
    case '1':
        echo 'string'; //Na última opção, não é obrigatório o uso do BREAK
}

# inteiro ( Este será o output da expressão deste SWITCH acima )
// No SWITCH o valor ($x) foi avaliado como 'valor', e não como 'valor e tipo'
// Quando avaliamos a string '1' no SWITCH, automaticamente é feita uma conversão para inteiro

echo '<hr>';

# No caso do MATCH, é diferente...

echo match($x){
    1 => 'inteiro',
    '1' => 'string'
};

# string ( Este será o output deste MATCH acima )
// A diferença basicamente pelo que entendi, é que no caso do SWITCH é feita uma comparação do tipo ( == )
// Já no caso do MATCH a comparação é do tipo ( === )
