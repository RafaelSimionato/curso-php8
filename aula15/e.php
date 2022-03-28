<?php

# No PHP 7 foi adicionado um novo operador de comparação
# Designado por spaceship operator (Tie Fighter do Star Wars)

#          <=>

$x = 1 <=> 1;   # 0  (1 == 1)
$x = 3 <=> 2;   # 1  (3 > 2)
$x = 1 <=> 2;   # -1 (1 < 2)

// Quando o valor da esquerda for igual o da direita, o resultado sera sempre zero ( 0 )
// Quando o valor da esquerda for maior, o resultado será sempre um ( 1 )
// Quando for menor, o resultado será menos um ( -1 )
