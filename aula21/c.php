<?php

# ARRAYS ASSOCIATIVOS

# Ao contrário dos arrays numéricos, as chaves são do tipo string

$dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50,
    'E' => 60
];

# Ou...

$dados = [
    'nome' => 'joao',
    'email' => 'joao@gmail.com',
    'nacionalidade' => 'Portugal',
    'telefone' => '9999999999'
];

# Da mesma forma que nos arrays numéricos não devem existir duas chaves iguais
# Nos associativos também não
# Na apresentação não é gerado nenhum erro. O valor a ser definido é sempre o último

$dados = [
    'nome' => 'joao',
    'nome' => 'carlos'
];
// Ou seja, o valor será neste caso o 'carlos'

# Se eu quiser apresentar um valor de determinado array associativo, usando uma string ao invés de um índice numérico, por exemplo,  neste caso, usarei o array $dados , segue abaixo...

echo $dados['nome']; // Neste caso, o valor que será mostrado é 'joao'
