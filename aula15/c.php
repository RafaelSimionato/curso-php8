<?php

# Valores são diferentes?

$a = (2 != 3);       # true
$a = (2 <> 3);       # true (alternativo) //Mesmo resultado que o sinal acima, mas não é muito usado
$a = (50 != 50);     # false
$a = (50 != '50');   # false
$a = (50 !== '50');  # true


# Operadores de comparação com 3 símbolos, comparam valor e tipo de valor

# ===
# !==
