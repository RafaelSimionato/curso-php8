<?php

# Uma função nunca pode ser chamada sem que os valores obrigatórios sejam fornecidos

# Exemplos

function funcao($a, $b)
{
    // Código aqui... 
}

// funcao('teste'); Comentei aqui para não mostrar o erro no output
# Isto é errado - só foi fornecido o valor de $a

# Contudo, embora pouco frequente, podemos passar mais argumentos do que o solicitado

function outraFuncao($a)
{ // Posso retirar esta $a, não muda nada... 
    $x = func_get_arg(0);
    $y = func_get_arg(1);
    $z = func_get_arg(2);
    echo "$x - $y - $z";
    // O PHP consegue buscar $x, $y, $z, utilizando a função nativa do PHP func_get_arg()
    echo '<br>';

    echo func_num_args(); # Avalia quantos argumentos foram passados para a função

}

outraFuncao(10, 20, 30);

echo '<br>';

# Também não muito comum, mas sendo possível, podemos usar um argumento especial
# Designado por variadic parameter

function minha_funcao(...$argumentos)
{
    foreach ($argumentos as $v) {
        echo "$v<br>";
    }
}

minha_funcao(10, 20, 30, 40, 50);
