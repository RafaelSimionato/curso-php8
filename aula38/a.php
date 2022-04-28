<?php

# ESCOPO E CICLO DE VIDA DE UMA VARIÁVEL
// ESCOPO no PHP, pode ser definido como o limite onde a variável existe e deixa de existir
// Porém, provável que pode ser utilizado em outro contexto também...

# Normalmente uma variável de PHP passa a existir a partir do local
# onde é iniciada e existe até ao final da página

# No entanto, quanto temos variáveis dentro de uma função, elas têm,
# um ciclo de vida limitado

$variavel = 10;

echo "<p>$variavel</p>";

funcao(20,30);

// echo "<p>$a e $b</p>"; # Estas variáveis existem dentro da função, mas não existem fora

function funcao($a, $b) {
    // echo "<p>$variavel</p>"; # Esta variável não é conhecida dentro da função
    echo "<p>$a e $b</p>";
}



function funcao2() {
    $v = 100;
}

funcao2();
echo "<p>$v</p>";
