<?php

# FUNCTIONS / FUNÇÕES

# Funções são blocos de código identificados por um nome e uma assinatura
# e que permitem que o código seja reutilizado e organizado de uma forma
# muito mais consistente

# Estes blocos só são executados quando são solicitados

# Definimos uma função usando a palavra chave function, seguido de um nome, 
# um conjunto de parênteses e um bloco de código

# (forma correta de uma escrita de uma função)
function funcao() {
    // Código da função aqui
}



# Exemplo de sua aplicação
echo 'Início da nossa aplicação';
echo '<br>';
executar(); //A chamada da função pode vir antes (conforme este exemplo) ou depois... 

// Não existe problema algum da chamada vir antes ou depois da função

function executar() {
    echo 'A função foi executada';
}

# No PHP o nome das funções é case insensitive
// Nos exemplo abaixo, aconteceria um erro fatal
/*

function Falar() {

}

function falar() {

}

*/

# Podem ser usados vários padrões para o nome das funções
# Os mais comuns são o Camel Case e o Snake Case

function camelCase() {
    // Código aqui
}

function snake_case() {
    // Código aqui
}

function getClient() {
    // Código aqui
}

function get_client() {
    // Código aqui
}

