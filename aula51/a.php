<?php

# VAR keyword

# Tem o mesmo comportamento de público, mas apenas existe por retrocompatibilidade
# devido ao código escrito antes do PHP 5, não é recomendável usar porque poderá
# em breve passar a não ser suportado

class Homem
{
    var $nome, $apelido;
}

$eu = new Homem();
$eu -> nome = 'João';
$eu -> apelido = 'Ribeiro';
