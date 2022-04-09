<?php

# CICLOS/LOOPES 

# FOR

# Permite executar um bloco de código determinado número de vezes
# É constituído por 3 parâmetros
# 1. O Iniciador - Indica o valor inicial do contador
# 2. A Condição - Indica qual a condição para que o ciclo termine
# 3. O incremento - Altera o valor do contador em cada ciclo

for ($x = 1; $x < 10; $x++) {
    echo $x . '<br>';
}

echo '<hr>';

# Mais uma vez, se for executada apenas uma expressão
# não é necessário usar chaves/chavetas 

for ($x = 1; $x < 10; $x++)
    echo $x . '<br>';

echo '<hr>';

# Pode conter uma assinatura diferente

$i = 1;
for (; $i < 10;) {
    echo $i++ . '<br>';
}

echo '<hr>';

# O primeiro e último parâmetro podem ser divididos
# em vários parâmetros usando a vírgula como separador

for ($contador = 1, $x = 10; $contador < 10; $contador++, $x--) {
    echo $x . '<br>';
}

echo '<hr>';

# Por exemplo, podemos apresentar todos os dados de um array

$nomes = ['joao', 'ana', 'carlos'];
for ($i = 0; $i < sizeof($nomes); $i++){
    echo $nomes[$i] . '<br>'; //Este índice [$i] tem que ser apresentado pois faz parte do 'for'
}
// A função ( sizeof ) permite contar quantos valores que o array possui
// Esta função é um 'Alias' de 'count', ou seja, podemos usar count que o resultado será o mesmo

# Em resumo, o sizeof conta o índice, que no caso é 0,1,2, pois, são 3 elementos dentro do array
# Ou seja, enquanto a $i for menor que 3... Continua o incremento