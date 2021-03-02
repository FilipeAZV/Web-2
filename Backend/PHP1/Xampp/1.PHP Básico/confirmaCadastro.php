<?php
//Foi atribuido valor para este campo?
if (isset($_POST['formCadastro'])) {
   cadastrar();

} elseif (isset($_POST['formMedia'])) {
  calcularMedia();

} else {
    header("Location: Formulario.php");
}

function cadastrar()
{
    //Recebe os dados informados no formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    // Mostra os dados informados
    echo "Nome: " . $nome . " " . $sobrenome;
    echo "<br>Idade: " . $idade;
}
function calcularMedia()
{
    //recebe os dados informados no formulario
    $nota1 = $_POST['nota1'];
    $nota2= $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    //Calcula a média
    $media = ($nota1 + $nota2 + $nota3) / 3;

    //Mostra a média
    echo "Média: " . $media;
}

// Se só tiver código PHP no arquivo, não se deve fechar a tag com ? >