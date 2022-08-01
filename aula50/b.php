<?php

# ACCESS LEVELS - NÍVEIS DE ACESSO

# PROTECTED

# Um elemento protected pode ser alcançado dentro da classe
# e dentro de uma qualquer classe que seja uma extensão de outra classe

class ClasseTeste
{ //Aqui tenho apenas 3 propriedades com nível de acesso distintos
    public $publica = "a";
    protected $protegida = "b";
    private $privada = "c";
}

class ClasseDerivada extends ClasseTeste
{
    function teste()
    {
        echo $this -> publica;          # possível
        echo $this -> protegida;        # possível
        echo $this -> privada;          # erro
    }
}

$a = new ClasseTeste();
$a -> publica = "1";            # possível
$a -> protegida = "2";          # gera erro
$a -> privada = "3";            # gera erro

$b = new ClasseDerivada();
$b -> publica = "a";            # possível
$b -> protegida = "b";          # erro
$b -> privada = "c";            # erro

$b -> teste();


# PRIVATE

# Só pode ser visível dentro da própria classe
# Não é visível nos objetos istanciados nem noutras classes herdadas

# --------------------------

# Ao contrário das propriedades, os métodos não necessitam de ter um
# nível de acesso especificado claramente. Se não for identificado,
# por defeito o método é público

class Teste
{
    function mover() {
        // Código aqui
    }
}

$a = new Teste();
$a -> mover();          # possível
