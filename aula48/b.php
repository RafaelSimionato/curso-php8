<?php

# OVERRIDING

# Este sistema também é aplicável as propriedades

class Animal
{
    public $especie = 'Ave';
}

class Mamifero extends Animal
{
    public $especie = 'Cavalo';
}

$a = new Animal();
echo $a -> especie;
echo '<br>';
$b = new Mamifero();
echo $b -> especie;
