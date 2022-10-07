<?php

# CONSTANTES

# O termo const não deve ser aplicado a variáveis locais ou a parâmetros
# Desde o PHP 5.3, o termo const pode ser usado para criar constantes globais
# Essas constantes são definidas no escopo global do script e ficam automaticamente acessíveis

const APP_NAME = 'Minha aplicação';
echo APP_NAME;

echo '<br>';

# Dentro de uma função
function teste() {
    echo APP_NAME;
}

teste();

# Não é possível concatenar constantes da mesma forma que fazemos com variáveis
echo "<br>Nome: {APP_NAME}";
// Para funcionar, devo fazer da maneira tradicional, conforme abaixo
echo "<br>Nome: " . APP_NAME;
