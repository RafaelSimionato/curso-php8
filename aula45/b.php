<?php

# CONSTRUCTOR

# Com PHP 8 foi introduzido o conceito de Property Promotion no construtor
# Isto permite definir propriedades diretamente nos parâmetros do construtor
# Vejamos um exemplo "antes" e "depois"

class Humano1
{
    public $nome;
    public $apelido;

    function __construct($n, $a)
    {
        $this -> nome = $n;
        $this -> apelido = $a;
    }
}

# No PHP 8 podemos criar a mesma classe da seguinte forma

class Humano2
{
    function __construct(public $nome, public $apelido)
    {
        $this -> nome = $nome;
        $this -> apelido = $apelido;
    }
}

// Agora vou fazer uma instanciação das classes acima, criando 2 objetos

$h1 = new Humano1 ('João', 'Ribeiro');
$h2 = new Humano2 ('Ana', 'Martins');

echo $h1-> nome . ' ' . $h1-> apelido;
echo '<br>';
echo $h2-> nome . ' ' . $h2-> apelido;

# IMPORTANTE 
# Ao contrário do nome das variáveis, o nome das classes é case insentitive

$h3 = new humano1 ('nome', 'apelido'); // mesmo usando humano com h minusculo, funciona igual
echo '<br>';
echo $h3-> nome . ' ' . $h3-> apelido;
