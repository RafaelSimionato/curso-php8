<?php

# BREAK, CONTINUE E GOTO

# Existem duas funções especiais dentro dos loops: break e continue

# BREAK
# Serve para interromper a execução de um loop

for($i = 1; $i < 20; $i++) {
    echo $i . '<br>';
    if ($i == 10) {
        break; # Interrompe o loop
    }
}

echo '<hr>';

$nomes = ['joao', 'ana', 'carlos'];
foreach ($nomes as $nome) {
    echo $nome . '<br>';
    if ($nome == 'ana') {
        break;
    }
}

echo '<hr>';

# CONTINUE
# Permite avançar uma volta do ciclo ignorando o código que deveria ser executado

for($i = 0; $i < 20; $i++) {
    if($i == 10) {
        continue; # Volta a linha inicial do loop
    }
    echo $i . '<br>';
}
// No exemplo acima, o continue faz voltar ao início do loop, porém, como a $i já está incrementada
// O output irá pular o 10 e seguir do numero 11 até o 19

echo '<hr>';

$nomes = ['joao', 'ana', 'carlos'];
foreach ($nomes as $nome) {
    if($nome == 'ana') {
        continue;
    }
    echo $nome . '<br>';
}

echo '<hr>';

# GOTO
# É muito pouco usado, pois torna a leitura do código mais complexa
# Foi introduzido no PHP 5.3 e permite sair do loop e ir para uma linha do código
# definida por um label (nome seguido de : )

for($i = 0; $i < 20; $i++) {
    if($i == 10) {
        goto teste; # Vai saltar para o label
    }
    echo $i . '<br>';
}

echo 'fim do loop'; // Este texto não será mostrado, por conta do goto

teste: // Este é o label, onde o goto vai saltar
echo 'AQUI! ';
