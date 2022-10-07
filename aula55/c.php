<?php

# CONSTANTS

# DEFINE
// O define é uma função nativa do PHP
// Ela tem por norma, 2 parâmetros

# A função define permite definir constants globais e locais, mas não permite ser usada
# dentro do contexto de uma classe

define('APP_NAME', 'Minha aplicação');
define('VERSAO', '1.0.0');
define('MOSTRAR_ERROS', true);
define('PI', 3.14);


echo APP_NAME;
echo '<br>';

/*
    Não é possível escrever assim... é um erro... 
    APP_NAME = 'teste';
*/

# Por norma devemos definir os nomes das constantes sempre com maiúscula
# Em versões anteriores da linguagem era possível usar um terceiro parâmetro
# para indicar que a constante era case insensitive. Desde o PHP 7.3 esta opção
# já não é mais válida. Veja abaixo:

define('CONSTANTE', 100, true); //Não devemos usar este terceiro parâmetro

echo CONSTANTE . '<br>';//Obviamente esta é a única opção válida
echo constante . '<br>';//Esta NÃO é valida
