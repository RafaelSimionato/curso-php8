<?php

# ARRAYS MULTIDIMENSIONAIS

# São arrays, numéricos ou associativos, cujos valores são outros arrays

# Exemplo:

$dados = [
    [10,20,30,40],
    [100,200,300,400],
    [1000,2000,3000,4000]
];

# Neste caso, para apresentarmos valores deste array

echo $dados[1][2];   # 300       *Lê-se sempre primeiro a coluna e depois a linha
echo $dados[0][3];   # 40

# Podemos ter arrays multidimensionais associativos:

$cidades = [
    'portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'brasil' => ['Brasilia', 'Sao Paulo', 'Rio de Janeiro'],
    'espanha' => ['Madrid', 'Barcelona', 'Sevilha']
];

echo $cidades['brasil'][1];   # Sao Paulo
echo $cidades['espanha'][0];  # Madrid
echo $cidades['portugal'][2]; # Coimbra

# Os arrays podem ter mais que duas dimensões
# Mais à frente voltarei a estudar arrays para estudar algumas 'funções' relacionadas com esta materia

