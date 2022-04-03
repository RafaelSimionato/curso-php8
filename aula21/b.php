<?php

# ARRAYS

# Sempre que queremos apresentar um valor de um array, usamos o seu índice
# Da mesma forma, podemos alterar o valor do array usando o seu índice

$valores = [10,20,30];
$valores[1] = 2000; # $valores = [10,2000,30];

# Podemos também, ignorar o índice para adicionar um novo elemento ao array
$valores[] = 3000; # $valores = [10,2000,30,3000];

# Ou de outra forma...
array_push($valores, 5000); # $valores = [10,2000,30,3000,5000];
//O array_push significa "colocar o valor no final" e é uma das diversas funções disponíveis para modificar arrays
//Então passamos 2 argumentos, o primeiro ($valores) que informa o array que iremos operar, e o segundo informa o valor que iremos adicionar, que neste caso é o valor (5000)


# Para apresentar valores de um array numa string, podemos fazer da seguinte forma:
echo 'Os valores são: ' . $valores[0] . ' e ' . $valores[1];
# Ou...
echo "Os valores são: $valores[0] e $valores[1]";
