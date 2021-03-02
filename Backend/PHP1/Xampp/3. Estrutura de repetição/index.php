<?php
// ===== Estruturas de Repetição =====

// FOR (PARA)

//      Inicializa o contador; Condição (verificação);  Incrementação
// for ($cont = 1;             $cont <= 10;             $cont++) {

// Divisão do bloco For
// 1. Inicializa o contador
// 2. Condição (verificação)
// 3. Incrementação

/*echo "Com FOR:<br>";

for ($cont = 1; $cont <= 10; $cont++) {
    echo $cont . "<br>";
}

// Exemplo 2
$numeroAlunos = 30;

for ($nomeDoEstudante = 1; $nomeDoEstudante <= $numeroAlunos; $nomeDoEstudante++) {
    echo "Bem-Vindo estudante " . $nomeDoEstudante . "<br>";
}

// Ou pode ser usado:

/*for ($i = 1; $i <= 30; $i++) {
    echo "Bem-Vindo estudante " . $i . "<br>";
}*/

//ou:

/*for ($cont = 1; $cont <= 30; $cont++) {
 
    //Bloco de código
    //Vamos verificar dentro do FOR, em cada passada, enquanto não acabar os 30, verificar só os pares 
    if ($cont % 2 == 0) { // dividindo o número que está dentro do contador por 2, tem alguma coisa de resto? se tiver é impar, se for 0 é par. 
        echo "Bem-Vindo estudante " . $cont; 
        echo "<br>";
    }
}*/

// Exemplo 3
/*for ($cont = 1; $cont <= 30; $cont++) {
    
    // Bloco de código
    if ($cont % 2 == 0) {
        echo "Bem-vind@ estudante " . $cont;
        echo "<br>";
    }
}
*/

// -----------------------
// WHILE (ENQUANTO)
/*$cont = 1;

echo "<hr>Com WHILE:<br>";

while ($cont <= 10) {
    echo $cont . "<br>";
    $cont++;// de 1 em 1
    //$cont = $cont + 1; // O mesmo que o de cima, se eu quiser colocar mais de 1 número usar o de cima.
}*/

// Exemplo 2
/*$cont = 1;

echo "<hr>Com WHILE:<br>";

while ($cont <= 30) {

    //Verifica se é impar, para fazer o contrário "!if ($cont % 2 == 1) {" add o !. 
    if ($cont % 2 == 1) {
        echo $cont . "<br>";

    }

    $cont++;

}*/

// -----------------------
// DO WHILE (FAÇA ENQUANTO)

$cont = 1; 

echo "<hr>Com DO WHILE:<br>";

do { //
    echo $cont . "<br>";
    $cont++;

} while ($cont <= 10); //ENQUANTO o contator for igual ou menor ou igual a 10
