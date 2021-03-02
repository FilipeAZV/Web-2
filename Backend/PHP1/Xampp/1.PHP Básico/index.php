<?php
// Comentário em Linha (C, C++, C#, Java, PHP, JavaScript)

/* Comentário em Bloco */

// 1. Código PHP puro (com Echo) - é uma função de saida, tipo um alert
echo "texto 1<br>";
echo 'texto 2<br>';
echo("texto 3<br>");
echo('texto 4<br>');


// 2. HTML dentro do ECHO
echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Página em PHP" content="width=device-width, initial-scale=1.0">
    <title>Página HTML em PHP</title>
</head>
<body>
    <h3>Página HTML em PHP (Dentro do echo)<h3>
</body>
</html>';
?>

<!--3. Código HTMl numa página PHP -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Página HTML em PHP" content="width=device-width, initial-scale=1.0">
    <title>Página HTML em PHP</title>
</head>
<body>
    <h3>Página HTML em PHP (arquivo .php)<h3>

    <p>
        <a href="002.html">Página em HTML</a>
    <p>

    <?php

// 4. Código PHP dentro do HTML
echo "Código PHP dentro do HTML (Arquivo .php)";
?>

<!--5. Depois do código em PHP (Arquivo .PHP)-->
<p>Depois do código em PHP (Arquivo .PHP)</p>

   <!--6. Vaiaveis em PHP-->
   <a href="pagina.php">Variavéis em PHP</a>

</body>
</html>