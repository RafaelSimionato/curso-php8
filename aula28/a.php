<?php

# CICLOS/LOOPS 

# DO WHILE
# É muito semelhante ao ciclo WHILE, contudo, neste caso a condição
# é avaliada após a execução do ciclo

$x = 0;
do {
    echo $x++ . '<br>';
} while ($x < 10);

echo '<hr>';

# De igual modo, quando só temos uma expressão a executar,
# podemos ignorar as chaves

$x = 0;
do
    echo $x++ . '<br>';
while ($x < 10);

echo '<hr>';

# Ou

$x = 0;
do echo $x++ . '<br>'; while ($x < 10);

// No PHP não é muito aconselhável usar esta ultima opção, pois, dificulta a leitura
