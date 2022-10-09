<?php

# TYPE DECLARATIONS

/*
Também é possível atribuir tipos de retorno de dados de uma função
*/

function funcao(): array {
    return [
        1,2,3
    ];
}

function funcao2(): string {
    return [1,2,3];
}

/* É uma forma interessante de forçar a construção de código com menos erros */

// Para definir uma função, conforme exemplos acima, que retorna um determinado tipo específico
// de valor, é colocado os 2 pontos ( : ) e antes da implementação do bloco de código que é executado
// por esta mesma função, colocamos os : e definimos o tipo, que nos exemplos acima, foram o array
// e também o tipo string