<?php

# OPERADOR TERNÁRIO

# É um operador condicional que pode substituir uma estrutura simples IF ELSE
# O operador necessita de três expressões ou áreas:
    # 1. A expressão que será avaliada como verdadeira
    # 2. A expressão que será executada com o true
    # 3. A expressão que será executada com o false


$opcao = 1;

$nome = $opcao == 1 ? 'Joao' : 'Antonio';
/*
A primeira parte do operador ternário, vai até o ponto de interrogação ( ? )
E determina a condição à ser avaliada
Neste caso, a pergunta que é feita aqui é: $opcao é igual a 1 ? 
Se a resposta for verdadeira, o resultado será Joao, caso contrário ( : ) se for falsa, será Antonio

Neste caso, $opcao é igual a 0, ou seja, a declaração do operador ternário é falsa
Por conta disso, o resultado será 'Antonio'
*/


# Podemos também usar da seguinte forma:


$opcao == 1 ? $nome = 'Joao' : $nome = 'Antonio';

# Podemos usar o operador ternário em várias situações distintas
# Por exemplo, para apresentar um determinado texto

echo $opcao == 1 ? 'SIM' : 'NAO';
//Como $opcao é igual a 0, a resposta será 'NAO'

?>


<!-- Com instrução condicional IF -->

<?php if($opcao == 1): ?>
    <h2>SIM</h2>
<?php else: ?>
    <h2>NAO</h2>
<?php endif; ?>


<!-- Com operador ternário -->
<h2><?= $opcao == 1 ? 'SIM' : 'NAO' ?></h2>
<!-- Esta tag utilizada, significa abrir PHP e fazer echo ( = ) -->


<!-- Por exemplo, para controlar CSS -->

<h2 style="color: <?= $opcao == 1 ? 'red' : 'blue' ?>">>Este texto tem cor definida pelo PHP<</h2>
