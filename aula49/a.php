<?php

# FINAL

# Para impedir que uma classe derivada possa fazer override de métodos
# podemos utilizar a expressão FINAL da seguinte forma:

class Veiculo
{
    function mover()
    {
        // Código aqui
    }
}

class Bicicleta extends Veiculo
{
    function mover()
    {
        // Override do código original
    }
}

# Podemos inclusive, definir uma class como não sendo passível de ser herdada
# colocando FINAL antes de CLASS

final class Humano
{
    // Código aqui
    function teste()
    {
        echo 'teste';
    }
}

class Homem extends Humano
{
    // Código aqui
}

$a = new Homem();
$a -> teste();
