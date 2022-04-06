<?php

# OPERADORES LOGICOS

# Os operadores logicos são frequentemente usados com os operadores de comparação
# Eles permitem 'ligar' varias comparações avaliando se são verdadeiras ou falsas

# No PHP a construção correta de instruções condicionais depende destes operadores
# (Instruções condicionais verificam se uma situação é verdadeira(true) ou falsa (false))

$a = 100;
$b = 200;

$x = ($a < $b) && ($a < 1000);     # AND -> true
$x = ($a > $b) || ($a > 1000);     # OR -> false
$x = ($a < 150) && ($b > 300);     # false
$x = ($a > 10) || ($b > 500);      # true
$x = ($a == 100) && ($b < $a);     # false