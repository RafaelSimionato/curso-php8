<?php

# CONSTANTES MÁGICAS

// Usadas principalmente quando estamos realizando debug na nossa aplicação

# As constantes mágicas são 8 e são designadas assim porque
# o seu valor varia automaticamente dependendo onde estão a ser usadas
# Vamos perceber como funcionam

echo __LINE__ . '<br>'; # Indica o número da linha de código no script

echo __FILE__ . '<br>'; # Identifica o caminho completo do script

echo __DIR__ . '<br>'; # Identifica a pasta onde o script está alojado

teste();
function teste() {
    $a = true;
    echo __FUNCTION__ . '<br>'; # Indica o nome da função
}

class MinhaClasse
{
    function identificar() {
        echo __CLASS__ . '<br>'; # Indica o nome da classe
        echo __METHOD__ . '<br>'; # Indica o nome do método
    }
}

$a = new MinhaClasse();
$a -> identificar();

# __TRAIT__ está relacionado com um mecanismo de reutilização de código

echo __NAMESPACE__ ; # Indica o nome do namespace atual
