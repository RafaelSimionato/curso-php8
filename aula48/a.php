<?php

# OVERRIDING

# O mecanismo de overriding permite a uma classe derivada 
# ter métodos reescritos especificamente para esta classe

# Por exemplo, podemos ter um método TESTE na classe base
# e ter o mesmo método TESTE com código diferente na classe derivada

class Animal
{
    function mover() {
        echo 'Mover a partir da classe base';
    }
}

class Mamifero extends Animal
{

}

class Peixe extends Animal
{
    function mover() {
        echo 'Mover a partir da classe peixe';
    }
}

$animal = new Animal();
echo $animal -> mover();
echo '<br>';

$mamifero = new Mamifero();
echo $mamifero -> mover();
echo '<br>';

$peixe = new Peixe();
echo $peixe -> mover();
