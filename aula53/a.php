<?php

# STATIC

# A palavra chave static pode ser usada para declarar propriedades e métodos de uma classe
# que podem ser acedidos sem que seja necessário criar um objeto a partir desta classe

class Teste
{

    // Instance members - um membro por cada objeto criado a partir da classe
    public $nome;
    function teste() {
        // Código aqui
    }

    // static ou class members - apenas existentes uma vez na classe
    static $idade;
    static function mover() {
        // Código aqui
    }
}
