<?php

# HERANÇA | INHERITANCE

# Para herdar uma classe a partir de outra, usamos a expressão extends

# Exemplo (uma classe base):

class Animais
{
    public $especie; // propriedade 1
    public $peso; // propriedade 2

    function tipoEspecie() { // método
        return "Este animal é da espécie {$this -> especie}";
    }
}

# Exemplo (uma classe com herança):

class Mamifero extends Animais
{
    // Não é necessário voltar a definir
    // as propriedades e métodos que já existem na classe base

    // Podemos acrescentar outras propriedades e outros métodos

    public $quantidade_pernas;
    public $tem_pelo;

    function temQuantasPernas() {
        return "O animal da especie {$this -> especie} tem {$this -> quantidade_pernas} pernas";
    }
}

$mamifero = new Mamifero();
//Aqui estou estanciando a classe derivada e também importando as propriedades e métodos da classe base
//também, através do extends
$mamifero -> especie = 'Cavalo';
$mamifero -> quantidade_pernas = 4;
echo $mamifero -> temQuantasPernas();
