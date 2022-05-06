<?php

# CONSTRUCTOR

# O Constructor é um método (neste caso uma função) especial dentro de uma classe
# que é sempre executado automaticamente quando é criado um
# objeto a partir de uma classe. Este método é definido de uma forma
# especial com __ (dois underscores). São chamados métodos mágicos
# porque tem uma execução específica ou automática associada.

class Humano
{
    private $nome;
    private $apelido;

    // private aqui significa que os valores que aqui estão, somente são reconhecidos pelos métodos
    // no interior desta classe, os objetos criados a partir desta classe, não sabem de sua existência
    // Só sabem da existência destas propriedades, os métodos e ou funções que estão aqui abaixo,
    // dentro desta classe Humano

    function __construct($n, $a) // Este método é executado de forma automática,
    // quando faço a instanciação do objeto
    {
        $this -> nome = $n; //Lê-se: A propriedade nome desta classe
        // passa a ser o valor que eu passar para $n
        $this -> apelido = $a;
    }

    public function nomeCompleto() {
        return $this -> nome . ' ' . $this -> apelido;
    }
}

$homem = new Humano('João', 'Ribeiro');
$mulher = new Humano('Ana', 'Martins');

echo $homem -> nomeCompleto();
echo '<br>';
echo $mulher -> nomeCompleto();
