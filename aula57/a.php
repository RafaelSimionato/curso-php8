<?php

# CLASSES ABSTRATAS

/*
    Uma classe abstrata é constituída por uma implementação parcial
    a partir das quais outras classes podem crescer

    Quando uma classe é declarada como abstrata, isso significa que ela tem 
    métodos incompletos que, obrigatoriamente tem que ser implementados nas
    classes que a herdam

    As classes abstratas não podem ser instanciadas. Servem apenas para 
    poderem ser herdadas por outras classes
*/

abstract class Forma
{
    public $largura = 100; //propriedade pública 1
    public $altura = 200; //propriedade pública 2

    abstract public function area(); //método público abstrato *apenas a assinatura, sem bloco de código

    function altura() {//aqui, ao contrário, já é um método tradicional
        return $this -> altura;
    }
}

// $quadrado = new Forma(); # Isto não é permitido,
// pois não é possível fazer a instanciação de uma classe abstrata

// Porém, o que eu posso fazer, é o seguinte...

class Retangulo extends Forma
{
    public function area() {//esta implementação de area() é obrigatória, pois é uma extensão de Forma
        return $this -> largura * $this -> altura;
    }
}

$r = new Retangulo();
echo $r -> area();
echo '<br>';
echo $r -> altura();

/*
    Uma classe abstrata permite então uma implementação parcial de métodos
    e a definição de um modelo de implementação de outros métodos
    Isto permite em modelos de programação orientada a objetos, juntamente com outro mecanismo
    designado por interfaces, a estrutura do código que segue os melhores padrões de escrita

    É uma matéria fundamentalmente destinada a quem constrói código para ser 
    implementado por outros programadores
*/