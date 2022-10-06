<?php

# OBJECT ACCESS

# No PHP, um objeto instanciado a partir de uma classe
# pode aceder a elementos privados e protegidos de outro objeto
# criado a partir da mesma classe
# Este comportamento não acontece na maior parte das linguagens de programação

class Humano
{
    private $nome = 'x'; //Esta é a propriedade privada, conhecida somente dentro desta classe

    function setPrivate($objeto, $valor) {//Esta função recebe 2 parâmetros ($objeto, $valor)
        $objeto -> nome = $valor;//Objeto altera sua propriedade $nome para o valor que eu indicar
        //Ou seja, altera o nome, para o valor que eu passar no parâmetro
    }

    function apresentar() {//Este método apresenta o valor do nome
        echo $this -> nome;//$this->nome, permite aceder a propriedade privada dentro da mesma classe
    }
}
/*
O objeto não consegue perceber o valor da propriedade privada, porém, existe uma maneira
Esta maneira, conforme abaixo, não é possível na maioria das linguagens de programação

Os 2 obejetos abaixo ($a, $b) são criados a partir da mesma classe (class Humano)
 */
$a = new Humano();
$b = new Humano();
$a -> setPrivate($b, 'João');// O $b passa a ser o objeto, e o $valor, passa a ser 'João'
/*
Como o objeto $nome é igual a $valor ($objeto->nome = $valor) conforme a function setPrivate
$a está modificando o valor de $b, não é comum, mas é possível no PHP
Quando faço o echo apresentar() o $a, conforme abaixo, 
$a verifica dentro da sua estrutura, qual valor que tem o nome, e apresenta através da
function apresentar() echo $this -> nome;
E portanto irá apresentar o 'X', porque o valor de $nome não foi alterado

No entanto o $b quando for apresentar o valor do seu $nome, conforme abaixo, vai apresentar o valor que foi alterado pela linha 31, pois na linha 15, o script diz, $objeto ($b) -> nome = $valor
deste modo, conforme a linha 31, o nome será alterado para 'João'
*/
$a -> apresentar();
echo '<br>';
$b -> apresentar();
