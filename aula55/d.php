<?php

# CONSTANTS

# Para verificarmos se uma constante já existe

if(!defined('APP_NAME')) {
    define('APP_NAME', 'Minha App');
}

echo APP_NAME;
echo '<br>';

# Ou mais comum ainda... 
defined('CONSTANTE') or define('CONSTANTE', 'valor');

# Com p PHP 5.6 passou a ser possível definir uma constante com um array
const NOMES = ['João', 'Ana', 'Carlos'];
echo NOMES[0];
echo '<br>';

# Com o PHP 7, passou a ser possível usar arrays no define
define('NAMES', ['João', 'Ana', 'Carlos']);
echo NAMES[2];
