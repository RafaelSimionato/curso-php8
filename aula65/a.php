<?php

# TESTANDO VARIÁVEIS

/*
Acontece inúmeras vezes no nosso código a necessidade de verificar ou testar
a existência de variáveis ou do seu valor

Para isso o PHP contém um conjunto de construções internas que nos permitem
fazer essa verificação
*/

# ISSET //Significa is set? Está definido?

/*
Esta construção permite verificar se uma variável está ou não definida
Ela retorna verdadeiro se a variável existe, e false se não existe
*/

$a = 1;
if(isset($a)) {
    echo 'A variável existe!<br>';
} else {
    echo 'A variável NÃO existe!<br>';
}

/*
Se tivermos uma variável definida, mas o seu valor for null, é considerada
como uma variável inexistente
*/
$b = null; //Nulo significa uma variável sem valor... 
echo isset($b) ? 'sim' : 'não';

# EMPTY

/*
Verifica se a variável tem um valor vazio (null, 0, false ou string vazia) e
retorna verdadeiro ou falso
*/

$b = 'João';
empty($b); // false

$c = false;
empty($c); // true

$nomes = [];
empty($nomes); // true

$outro = null;
empty($outro); // true
