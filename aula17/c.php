<?php

# HEREDOC e NOWDOC (outras formas de delimitação)
# Apesar de não serem muito comuns, podem ser usadas para tratamento de maiores blocos de texto

# HEREDOC - Permite fazer o Parse de variaveis

$cliente = 'Rafael Simionato';
$email = 'actrafael2@gmail.com';

$texto = <<<LABEL
Olá, SR. $cliente
Serve a presente mensagem para informar que se encontra inscrito no proximo concurso
Enviamos o regulamento para o seu $email
Obrigado pela sua simpatia
LABEL;

echo $texto;

die();





# NOWDOC - Não permite Parse de variaveis
$texto = <<<'LABEL'
Olá, SR. $cliente
Serve a presente mensagem para informar que se encontra inscrito no proximo concurso
Enviamos o regulamento para o seu $email
Obrigado pela sua simpatia
LABEL;

echo $texto;

// Neste caso acima, o texto sairá no output com o nome das variaveis ao inves dos objetos
