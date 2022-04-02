<?php
$nome = "joão";
$sobrenome = "ribeiro";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>outra maneira de resolver o exercicio</title>
</head>
<body>
    <p><?= "O meu nome é " . strtoupper($nome) . " e o meu sobrenome é " . strtoupper($sobrenome)?></p>
    <p><?= "O meu nome é " . mb_strtoupper($nome) . " e o meu sobrenome é " . strtoupper($sobrenome)?></p>
    <!-- Em casos de nomes com acentos, é interessante avaliar a possibilidade de usar a função mb_strtoupper para não ocorrer erros, como, por exemplo, a letra que tiver acento ficar minuscula no output quando precisamos que todas sejam maiusculas, como é o caso do exercicio proposto -->
</body>
</html>