<?php

# ACCESS LEVEL - Aspetos importantes a reter

class Humano2
{
    private $idade = 0; // Poderia não ter atribuido valor nenhum... 

    public function setIdade($valor) {

        // Verifica se o $valor é numérico
        if (is_numeric($valor)) {
            $this -> idade = $valor;
        }
    }

    public function getIdade() {
        return $this -> idade;
    }
}

$eu2 = new Humano2(); //Aqui tenho a instanciação
$eu2 -> setIdade ('João');
echo $eu2 -> getIdade();
//Neste caso acima, o resultado seria sempre o zero, pois, dentro da classe estou usando o if
// para verificar se o valor passado é numérico, como 'João' é uma string, nã acontecerá nada
// e por consequência, o resultado será o zero, que está atribuído na $idade
// Se ao invés de 'João' eu passade algum número, este número seria mostrado... 

// Não é obrigatório usar setIdade e ou getIdade nos métodos e ou funções
// Porém, é comum usar o set para definir um valor e o get quando é para buscar um valor
// e por fim o nome, é costume usar o próprio nome da propriedade. EX: setIdade
