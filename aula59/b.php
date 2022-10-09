<?php

include 'config.php';//Devo inserir este script para que o echo abaixo não apresente erro

echo NOME_APLICAÇÃO;

# CAMINHO PARA O INCLUDE

/*
Podemos "incluir" um script dentro de outro usando:
1. nenhum caminho e apenas o nome do script a ser incluído;
2. um caminho relativo ao script atual;
3. um caminho absoluto - que indica a localização exata do script no filesystem
*/

# 1. apenas quando o script a incluir esta na mesma pasta do script atual

# 2. caminho relativo à pasta do script atual
include 'inc/dados.php';
echo '<br>';
echo $nome;
// Clicando com o botão direito do mouse no arquivo, posso usar o copy path, ou
// o copy relative path, para copiar o caminho do arquivo

// Quando é necessário "andar para trás" na árvore de pastas usamos ../
include '../aula59/2/outro_script.php';
echo '<br>';
echo $valor;

# 3. caminho absoluto
include 'C:/laragon/www/curso_PHP8/aula59/inc/dados2.php';
echo '<br>';
echo $hoje -> format('d-m-y');


/*
//Seleciono a linha para alterar as barras e aperto Ctrl + f
// em seguida seleciono a opção [ab] para alterar somente a parte selecionada
// clico na seta na ponta esquerda para apontar para baixo e seleciono o find in selection (Alt+L)
//Deleto o texto na caixa e substituo pela barra que quero alterar,
// e coloco a outra barra na parte de baixo. 
// Em seguida clico em Replace All (Ctrl+Alt+Enter)

# No Linux e no DB é usado a barra invertida, por isso, também, é aconselhado alterar as barras
*/