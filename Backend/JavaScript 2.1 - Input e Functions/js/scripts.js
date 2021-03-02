
// Somar 2 números (valores fixos)
function somar1() {
    // 1. Declaração das Variáveis
    var num1;
    var num2;
    var soma;

    // 2. Atribui valores às Variáveis (ENTRADA)
    num1 = 5;
    num2 = 3; // a variável num2 recebe o valor 3

    // 3. Cálculos (PROCESSAMENTO)
    soma = num1 + num2;

    // 4. Mostra o resultado (SAÍDA)
    alert(soma);
}

// Somar 2 números (usuário informa os valores com prompt)
function somar2() {
    // 1. Declaração das Variáveis e Atribuição de valores (ENTRADA)
    var num1 = parseInt(prompt("informe o primeiro valor"));
    var num2 = prompt("informe o segundo valor");
    var soma;

    // Converte para Inteiro
    num2 = parseInt(num2);

    // 2. Cálculos (PROCESSAMENTO)
    soma = num1 + num2;

    // 3. Mostra o resultado (SAÍDA)
    document.getElementById('resultado2').innerHTML = soma;
}