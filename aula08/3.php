<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php echo 'teste 1' ?>

<br> <!-- Quebra de linha em HTML -->

<?php echo "teste 2" ?>
<!-- Aspas duplas oferece outras funcionalidades em conjunto com o echo, mas neste caso, o resultado no output será exatamente o mesmo nos 3 exemplos -->

<br>

<?= 'teste 3' ?> <!-- Esta opção permite ignorar o echo inserindo o sinal de igual ( = ), posso usar tanto aspas simples quanto aspas duplas -->

<!-- Também não utilizei o ponto e vírgula ( ; ) no final em nenhum exemplo, que nestes casos, ter ou não ter o ( ; ) é exatamente a mesma coisa -->

<!--O output dos 3 será o mesmo -->
    
</body>
</html>