<?php
    $nome = "Rafael";
    $sobrenome = "Simionato";
    $nome_completo = "$nome $sobrenome";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1enum.php - outra resposta</title>
</head>
<body>
    <!-- Outra possibilidade de resolver o mesmo exercicio -->
    <p><?= $nome_completo ?></p>
    <p><?= "O meu nome tem " . mb_strlen($nome_completo) . " caracteres. " ?></p>
    <!-- As vezes o calculo com a funcao acima strlen não será correto, por conta de alguns fatores, como, por exemplo, letras com acentos, para resolver isso, colocamos a funcao chamada mb_strlen() porém, pode apresentar erro também, caso não esteja na biblioteca das funções disponíveis -->
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1enum.php</title>
</head>
<body>
    <?php
        $nome = 'Rafael';
        $apelido = 'Simionato';
        echo "<p>$nome $apelido</p>";
        $total = strlen($nome . $apelido);
        echo "<p>Meu nome tem $total letras</p>";
    
    ?>
    
</body>
</html>