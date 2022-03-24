<?php

# Tipos de dados
# ====================

# As variaveis em PHP podem ter diferentes tipos de valores
# A mesma variavel pode ter tipo diferentes de valores

$variavel = 100;
$variavel = "cem";

# Apesar de serem variaveis de tipo implícito, é importante saber

$inteiro = 100;            # int
$float = 10.5;             # float (com casas decimais)
$bool = true;              # verdadeiro ou falso
$string = "Olá Mundo! ";   # string (cadeia de caracteres)
$array = [1,2,3];          # array - coleção de valores
$pessoa = new Pessoa();    # Objeto com propriedades e métodos
$nulo = null;              # Variavel com valor nulo


# Antes e depois do PHP 8

$variavel;
echo $variavel;

