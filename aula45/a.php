<?php

# CONSTRUCTOR

# Olhemos para os exemplos

class Humano1 //Esta class tem apenas propriedades definidas
{
    public $nome;
    public $apelido;
}

class Humano2 // Ao contrário da class acima, esta class tem apenas métodos definidos
{
    public function falar() 
    {
        // Código aqui
    }

    private function andar()
    {
        // Método apenas acessível dentro da class
    }

    public function movimento()
    {
        $this -> andar();
    }
}

# Podemos ter classes sem qualquer tipo de método
# E podemos ter classes sem qualquer tipo de propriedade

# Ao instanciar-mos a classe Humano1, podemos aceder diretamente as suas propriedades
# pelo fato de estarem identificadas com o access modifier public

$homem = new Humano1();
$homem -> nome = "João";
$homem -> apelido = "Ribeiro";

$mulher = new Humano2();
$mulher -> movimento(); // Para sair o erro, devo trocar aqui andar() por movimento()
// Pois andar() esta como private na class, já movimento() está public e conhecido dentro da class
// então assim, chamamos o andar() através do movimento() usando o $this dentro da class conforme acima


