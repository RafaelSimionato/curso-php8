<?php

# DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

# SWITCH - Uma alternativa ao IF

$nome = 'joao';
switch ($nome) {
    case 'joao':
        # código 1
        break;
    case 'ana':
        # código 2
        break;
    default:
        # código 3
        break;
}

switch ($nome) {
    case 'joao':
        echo '1';
        break;
    case 'ana':
        echo '2';
        break;
    default:
        echo 'Outra coisa qualquer';
        break;
}
