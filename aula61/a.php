<?php

# INCLUDE_ONCE e REQUIRE_ONCE

/*
A expressão include_once funciona exatamente como o include, no entanto 
se o script já foi anteriormente incluído, o PHP não o volta a incluir
*/

include_once 'config.php';
echo 'AAA';
include_once 'config.php'; # esta linha não vai carregar novamente o mesmo script
echo 'BBB';

/*
No caso do require_once, funciona exatamente como o require, mas com o mesmo
comportanto do include_once: se o ficheiro já foi incorporado anteriormente,
não voltará a ser incorporado
*/

require_once 'config.php';
echo 'CCC';
require_once 'config.php';
echo 'DDD';

// Nos casos acima, o único config.php executado será o primeiro ( include_once ) linha 10