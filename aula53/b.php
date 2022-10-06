<?php

# STATIC

# Como se fazem as implementações?

class Operacoes
{
    static $valor1; // propriedade estática 1
    static $valor2; // propriedade estática 2

    static function adicionar() // método também estático, pois tem static no início
    {
        return self ::$valor1 + self ::$valor2; //self é semelhante ao $this e lê-se: eu própria
        // return Operacoes::$valor1 + Operacoes::$valor2; // alternativa
    }

    //Outro exemplo de uso do static
    static function hashAleatoria()
    {
        return rand(0, 1000);// Função rand sorteia um valor aleatório, neste caso, entre 0 e 1000
    }
}


// Para alterar o valor1, não estou usando a funcionalidade tradicional ( -> ),
// pois não tenho de fato, objeto criado a partir desta classe

// Estarei então definindo o valor das propriedades, conforme abaixo

Operacoes::$valor1 = 10;
Operacoes::$valor2 = 20;
echo Operacoes::adicionar();// Aqui já não é uma propriedade, e sim, um método

// Chamando abaixo o ultimo exemplo static da class Operacoes
$hash = Operacoes::hashAleatoria();// O número aleatório da função rand virá para o $hash
// quando este método estático for chamado
