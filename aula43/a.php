<?php

# CLASSES

# Para aceder às propriedades de uma classe, dentro dos métodos da classe
# é usada a pseudo variável $this seguida do operador -> 

class Humano
{
    public $nome = 'João';                  // Propriedades
    public $apelido = 'Ribeiro';            // Propriedades

    public function nomeCompleto() {        // Métodos ou função
        return $this -> nome . ' ' . $this -> apelido;  // Métodos ou função
    }
} // As propriedades da classe são definidas fora das funções conforme exemplo acima
  // Ou seja, se tivesse uma $nome na função, logo acima do return, ela seria apenas
  // uma variável conhecida dentro da função, não seria nem sequer uma propriedade da classe


# As classes recorrem a utilização de Access Modifiers - Níveis de acesso
# Os níveis de acesso aos dados indicam se podemos ver os dados apenas dentro da classe
# Se os podemos ver fora da classe ou se estão protegidos por algum motivo extra
# Veremos mais à frente como estas informações são importantes

# INSTANCIAR UM OBJETO

# Um objeto é uma variável criada a partir de uma classe
# Instanciar um objeto significa criar um objeto a partir de uma classe atribuindo
# à variável a expressão new e o nome da classe

$homem = new Humano();

# Veremos depois o porquê dos parênteses

# Com a implementação anterior podemos agora aceder às propriedades e métodos

echo $homem -> nomeCompleto(); # João Ribeiro

# Tal como acontece com as funções, os objetos podem ser istanciados mesmo
# se a definição da classe aparecer mais abaixo no script
