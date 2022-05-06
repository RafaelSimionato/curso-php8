<?php

# CLASSES

# As classes são definidas pela declaração class, o seu nome e o bloco
# de código que contém as suas propriedades e métodos

# Por convensão PSR-1, o nome de uma classe deve ser sempre atribuído
# na forma de StudlyCaps/PascalCase/MixedCase.
# O corpo deve ser definido da seguinte forma

class Humano
{ // Diferente dos ciclos, nas classes, as chaves devem ser postas sempre desta forma
    // Propriedades e Métodos
}

class JogadorFutebol
{
    // Propriedades e Métodos
}

# O corpo de uma classe contém PROPRIEDADES e MÉTODOS
# PROPRIEDADES - São variáveis que guardam as características do objeto
# MÉTODOS - São funções que definem o que o objeto pode fazer

# As propriedades são também conhecidas como Fields (campos) ou atributos de uma classe
# Ex: Como no caso da classe Humano, o atributo cor do cabelo, atributo peso, altura
# No PHP, as propriedades têm que ter um nível de acesso especificado
# Ex: Privada, Pública ou Reservada
# Veremos o que isso significa mais à frente

class FiguraGeometrica
{
    public $largura, $altura; // Aqui temos 4 propriedades e ou (fields) larg, alt, $x, $y
    public $x; // Poderiam estar todas na mesma linha, não tem problema algum... 
    public $y;

    function novaArea($a, $b) { // Aqui temos uma função tradicional, porém, neste contexto de classe
        return $a * $b;         // chamamos esta função de Método
    } // Ela funcionaria também se estivesse fora desta classe de qualquer maneira
}
