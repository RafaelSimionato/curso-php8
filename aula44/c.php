<?php

# Para classes que tem construtor sem parâmetros, 
# podemos instanciar da seguinte forma

class Humano
{
    function __construct()
    {
        // Código aqui
    }
}

$homem = new Humano;
# ou
$homem = new Humano();
