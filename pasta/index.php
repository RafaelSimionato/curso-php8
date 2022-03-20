<?php

echo "index PHP";
/*O index e padrao e sempre vai aparecer por primeiro, (isso é uma convenção internacional) e o primeiro que o servidor ira buscar

A preferencia padrao de extensao e a HTML neste caso, porém, posso alterar isso facilmente...
(Na maioria dos servidores de sites, o padrão será o index.PHP)

Na tela do Laragon, (right+click) Apache e httpd.conf, após, ir na linha 285 dir_module e ai basta alterar a ordem padrao colocando index.php a frente do index.html, por exemplo.

Após, basta dar um reload no Apache dentro do Laragon e ou reiniciar todo sistema do Laragon
*/

//E valido destacar que e importante que NÃO exista 2 files com o nome index no mesmo projeto

//Caso não exista um arquivo com nome (index) ou esteja escrito errado, por exemplo (indexa) o resultado pode ser bem indesejado, podendo o sistema mostrar ao usuario toda estrutura do projeto