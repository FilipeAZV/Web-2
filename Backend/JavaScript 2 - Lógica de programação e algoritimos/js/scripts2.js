// --- ALERT ---

// Comentário em linha

/*Comentário em bloco*/

// Declaração da variáveis 


// TIPO     NOME        VALOR   
// var valor1 = 5;
// var valor2 = 3;
// var soma;

// // Faz os cálculos 
// soma = valor1 + valor2;

// // Mostra o resultado 
// alert(soma);

// --- PROMPT ---

// Recebe os valores informados pelo usuário

// 1. Declaração das variavéis
var nota1;
var nota2;
var nota3;
var media;

// 2. Atribui Valores as variavéis
nota1 = prompt("informe a primeira nota");
nota2 = prompt("informe a segunda nota");
nota3 = prompt("informe a terceira nota");

// 3 Converte para Inteiro (PROCESSAMENTO):
nota1 = parseInt(nota1);
nota2 = parseInt(nota2);
nota3 = parseInt(nota3);

//3.1. Cálculos (PROCESSAMENTO):
media = (nota1 + nota2 + nota3) / 3;

// 4.Mostra o resultado (SAÍDA)
alert(media);

// alert("A média das notas é: " + media);

// A mesma variável recebe um texto (String)
media = "Marnei";
alert(media);

// A mesma variável recebe um booleano 
media = true;
alert(media);

//--- IMPUT---