<?php

# ACCESS LEVEL - Aspetos importantes a reter

# Uma boa prática é criar o menor número de propriedades de uma classe como públicas
# Colocar uma propriedade como pública é expor em demasia essa propriedade
# Um exemplo: Imaginem que querem que uma propriedade de uma classe seja sempre um número

class Humano
{
    public $idade;
}

$eu = new Humano();
$eu -> idade = 'Olá Mundo!'; # Isto é possível porque o PHP não é strongly typed

# Para definir corretamente este tipo de situação, podemos usar métodos para definir e ir buscar 
# os valores das propriedades privadas. Estes métodos permitem garantir que a integridade
# das propriedades seja mantida

class Humano1
{
    private $idade;
}

$eu1 -> idade = 'João'; # não é possível porque a propriedade é privada
