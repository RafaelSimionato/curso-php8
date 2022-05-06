<?php

class Humano1
{
    public $nome = 'João';
    public $apelido = 'Ribeiro';

    public function nomeCompleto()
    {
        return $this -> nome . ' ' . $this -> apelido;
    }
}

$homem = new Humano1();
echo $homem -> nomeCompleto(); # João Ribeiro

/*
    Neste script acima temos as propriedades já definidas, ex: $nome = 'João' $apelido = 'Ribeiro'
    E isso não faz muito sentido, pois queremos que cada objeto tenha seus valores atribuídos de maneira diferenciada em cada uma de suas propriedades
    Desde modo, não faz sentido ter uma classe em que já temos definido o nome de todos os objetos que forem criados a partir desta classe, pois queremos que isso seja dinâmico
*/

// No script acima, sempre que fizer a instanciação e executar o método usando o nomeCompleto()
// O resultado será sempre João Ribeiro
// Por isso usamos o CONSTRUCTOR