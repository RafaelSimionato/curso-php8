<?php

# Valores são iguais?

$a = (2 == 3);       # false
$a = (100 == 100);   # true
$a = (50 == '50');   # true
$a = (50 === '50');  # false

// O valor apesar de ser o mesmo, não possui o mesmo tipo, pois, um é numerico e o outro é alfanumerico e ou string, por tanto não são identicos, e por isso, false
