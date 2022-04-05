<?php

# DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

# Síntase alternativa


# normal

$valor = 5;
if($valor == 10) {
    // código 1
} else {
    // código 2
}

# alternativa

if($valor == 10):
    // código 1
else:
    // código 2
endif;


# switch

switch ($vaiable):
    case 'value':
        # code...
        break;

    default:
        # code...
        break;
endswitch;

