<?php

//Ajustar o código, alt + shitf + f

//6. Variaveis em PHP (SEMPRE devem ter o $)-------------------------------------------
$num1;
$num2 = 6;
$soma = "Texto";


//Atribuir valor á variavél num1
$num1 = 5;

//Somar os valores 
$soma = $num1 + $num2;

//Mostra o resuldado da Soma
//echo soma;
//echo "Resultado: " . soma; 
echo "<br>A soma de $num1 . $num2 é $soma<br>";

//Em PHP a CONCATENAÇÃO é feita com . (ponto)

//Concatenação é um termo usado em computação para designar a operação de unir o conteúdo de duas strings.
//Por exemplo, considerando as strings "casa" e "mento" a 
//concatenação da primeira com a segunda gera a string "casamento". 


// 7. Cálculo da Média (revisão do IF ELSE)-------------------------------------------
$nota1 = 4;
$nota2 = 8;
$nota3 = 6;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "Média: " . $media;

// Verifica se Aprovado
if ($media >= 6) {
    echo "<br>Aprovado";

} elseif ($media >= 3 && $media < 6) {
    echo "<br>Exame";

} else {
    echo "<br>Reprovado";
}

//Em PHP o Else If deve ser ecrito sem espaço-------------------------------------------

//else if << funciona porém não é o recomendado
//elseif << Recomendado 

//8. Estrutura condicional switch case:-------------------------------------------------

//Recebe um valor como parâmetro e verifica se ele atende alguma das condições especificadas...
//Ou seja, ela verifica se o valor recebido como parâmetro é igual a alguma das opções especificadas em seu corpo.
//Echo = saída qualquer informação, podendo conter texto, números ou variáveis.

//Sul = 1, Sudeste = 2, Centro-Oeste = 3, Norte = 4, Nordeste = 5

$regiao = 4;

echo "<hr><h3>Regiões do país com switch case<hr>";

switch ($regiao) {
    case 1:
        echo "<br>Sul";
        break;

    case 2:
        echo "<br>Sudeste";
        break;

    case 3:
        echo "<br>Centro-Oeste";
        break;

    case 4:
        echo "<br>Norte";
        break;

    case 5:
        echo "<br>Nordeste";
        break;


    default:
        echo "informe uma das regiões";
        break;
}

$nome = "Marnei";
?>

<html>

<body>
    <!-- Forma encurtada do Echo --------------------------------------------->
    <h3>Professor: Marnei<?= $nome ?></h3>

    <hr>

    <p>
        <a href="formulario.php">Pegando dados do formulário com PHP</a>
    </p>

    <body>

    <html>