<?php

# No PHP 7 foi introduzido o caracter de escape Unicode
# Permite apresentar caracteres a partir do seu codigo hexodecimal

# https://www.utf8-chartable.de/

echo "\u{A9}";   # copyright
echo "\u{BC}";   # 1/4
echo "\u{AE}";   # registered trademark

# Com HTML entities
# https://dev.w3.org/html5/html-author/charref
echo '<br>';
echo '&copy;';
echo '&frac14;';
echo '&reg;';