
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

function somar3() {
    // 1. Declaração das Variáveis
    var num1;
    var num2;
    var soma;

    // 2. Atribui valores às Variáveis (ENTRADA)
    num1 = document.getElementById('valor1').value;
    num2 = document.getElementById('valor2').value;

    console.log("Num1: " + num1);
    console.log("Num2: " + num2);

    // 3.1 Converte para Inteiro (PROCESSAMENTO)
    num1 = parseInt(num1);
    num2 = parseInt(num2);

    // 3.2 Cálculos (PROCESSAMENTO)
    soma = num1 + num2;

    console.log("Soma: " + soma);

    // 3. Mostra o resultado (SAÍDA)
    document.getElementById('resultado3a').innerText = "Resultado: <br>" + soma;
    document.getElementById('resultado3b').value = soma;
    document.getElementById('resultado3c').innerHTML = "Resultado: <br>" + soma;
}

// Mostrar o texto informado no input
function mostrarTexto() {
    // 1. Declaração das Variáveis
    var texto;

    // 2. Atribui valores às Variáveis (ENTRADA)
    texto = document.getElementById('texto').value;

    // 3. Cálculos (PROCESSAMENTO)

    // 3. Mostra o resultado (SAÍDA)
    document.getElementById('resultado4').innerHTML = texto;
}

// Mostrar o nome informado no input (por parâmetro)
function mostrarNome(nome) {
    document.getElementById('resultado5').innerHTML = nome.value;
}

// Verificar a hora
function mostrarHora() {
    document.getElementById('hora').innerHTML = Date();
}

// Modificar texto
function mudarTexto() {
    document.getElementById('p1').innerHTML = "Novo texto";
}

// Mudar a Imagem
function mudarImg() {
    var imagem = document.getElementById('p2');

    imagem.src = "img/farol.jpg"
    imagem.style.borderRadius = "15px";
    imagem.style.transition = "1s";
}

// Mudar Borda
function mudarBorda() {
    var cor = document.getElementById('p2');

    // cor.style.borderWidth = "3px";
    // cor.style.borderStyle = "solid";
    // cor.style.borderColor = "blue";

    cor.style.border = "solid 3px blue";
}

// Transformar em Maiúsculas
function toUpper(texto) {
    texto = texto.value.toUpperCase();

    document.getElementById('texto1').value = texto;
}

// Transformar em Minúsculas
function toLower(texto) {
    texto = texto.value.toLowerCase();

    document.getElementById('texto1').value = texto;
}
