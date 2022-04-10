<?php

# CICLOS/LOOPS 

# FOREACH

# É um ciclo especialmente concebido para fazer uma iteração
# pelos valores de um array

$nomes = ['joao', 'ana', 'carlos'];
foreach($nomes as $nome) {
    echo $nome . '<br>';
}
// Para cada ( foreach ) volta, a variável $nomes irá tratar um valor que será colocado em $nome
// Ou seja, na primeira volta $nome assume 'joao', na segunda volta, 'ana' e assim por diante...


echo '<hr>';

# Existe ainda uma outra assinatura que permite ir buscar
# a chave e o valor do array

# Muito importante quando usamos um array associativo, exemplo abaixo:

$capitais = [
    'portugal' => 'Lisboa', // Aqui, portugal é a chave e ou índice e Lisboa o valor
    'brasil' => 'Brasilia', // brasil é a chave/índice e Brasilia o valor
    'espanha' => 'Madrid' // espanha chave ou índice e Madrid o valor
];

// Para apresentar a chave/índice e valor, é criada a estrutura abaixo

foreach($capitais as $key => $value) { // Aqui a chave ( $key ) e seu respectivo valor ( $value )
    echo "Para o país $key a capital é $value <br> ";
}
// Não é obrigatório criar com o nome $key e $value, podem ser quaisquer nomes, porém
// será importante manter a concistência posteriormente no restante do código

# O FOREACH sempre vai percorrer todos os valores do array, não importando a quantidade
