<?php

# ARRAYS

# Um array (traduzido para português, é uma matriz) é na realidade, uma COLEÇÃO DE VALORES
# Funciona como uma variável, mas que pode conter muitos valores "arrumados" cada um o seu espaço
# Este "espaço" é designado por índice do array

# Resumindo, um array é uma coleção constituída por chaves/índices e valores
# As chaves/índices podem ser numéricos (array numérico) ou strings (array associativos)
# E podem até coexistir os dois tipos de índices no array

# Os valores podem ser de qualquer tipo, inclusive serem outros arrays
# Como, arrays dentro de outros arrays, conhecidos como arrays multidimencionais

# EXEMPLOS

$valores = array(1,2,3,10,20,30);
$nomes = array('joao','ana','carlos');

# A partir do PHP 5.4, passou a ser possível escrever os arrays de forma mais simplificada

$valores = [1,2,3,10,20,30];
$nomes = ['joao' ,'ana' ,'carlos'];

# Estes arrays são de índice numérico
# Para apresentar um de seus valores, procedemos da seguinte forma

echo $valores[0]; //IMPORTANTE não confundir isso com a criação de array, pois, não existe o sinal de atribuição ( = )
echo $nomes[1]; // Quando criamos um array usamos o sinal de igual ( = ), conforme ex acima e para apresentar determinado valor, conforme este exemplo, não usamos o sinal de =

# LEMBRAR SEMPRE QUE OS ARRAYS TEM ÍNDICE DE BASE 0

# Não tem obrigatoriamente de ter chaves sequenciais

$dados = [
    10 => 1000, //Estas setas ( => ) são sinais de atribuição, lê-se: 10 tem o valor 1000, a chave 20 tem o valor 2000...
    20 => 2000,
    30 => 3000,
];

# Se quisermos adicionar um novo elemento no final da coleção, ele vai assumir o último indice + 1
$dados[] = 4000; # $dados[31];
// Ou seja, lê-se: Se usarmos a variável dados de chave vazia ( [] ) é igual a 4000, será adicionado então, mais um elemento na coleção acima, que terá a chave 31 com valor 4000, ou seja ( 31 => 4000 )





