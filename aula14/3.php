<?php

# 'a' é iniciado e apresentado com o valor 20
# Na instrução seguinte, o 'a' deverá ser apresentado com o valor 21

/*
$a = 20;
echo $a++;
echo '<br>';
echo $a;
*/

// Outra maneira de resolver...

echo $a = 20;
echo '<br>';
echo ++$a;
