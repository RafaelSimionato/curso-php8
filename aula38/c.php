<?php

# ESCOPO E CICLO DE VIDA DE UMA VARIÁVEL

# Ao contrário de outras linguagens, no PHP, as variáveis definidas
# dentro de loops ou instruções condicionais, não são destruídas
# dentro deste escopo

if (true) {
    $a = 10;
}

echo "<p>$a</p>";

// Ou seja, $a que não existia, será reconhecida também, fora do bloco do if acima...
// Ao contrário das funções, dentro dos loops e ou instruções condicionais,
// podemos definir variáveis que depois continuarão a existir...



for ($i = 0; $i < 10; $i++) {
    $x = 1000;
}

echo "<p>$i e $x</p>";

# Existe ainda um outro contexto de escopo de variáveis
# quando estas são definidas dentro de uma classe,
# passando a ser designadas por propriedades de uma classe
