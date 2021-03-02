<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos em PHP</title>
</head>
<body>
    <h3>Classes e Objetos em PHP</h3>

    <h4>Cria um Objeto da Classe Pessoa</h4>
    <pre>
    $pessoa = new Pessoa();

    $pessoa->nome = "Marnei";
    $pessoa->idade = 43;
    </pre>

    <?php
    //include "Pessoa.php";
    
    //require "Pessoa.php";
    //require_once "Pessoa.php";

    // Inclui o arquivo da classe Pessoa
    include_once "Pessoa.php";

    $pessoa = new Pessoa();

    //$pessoa->falar();

    $pessoa->permitirFalar();

    // Utilizando Get e Set
    /*
    // Atribui valor ao Objeto (cópia da Classe)
    $pessoa->setNome("Marnei");
    $pessoa->setIdade(43);

    // Pega o valor do Objeto
    echo "<br>" . $pessoa->getNome();
    echo "<br>" . $pessoa->getIdade();
    */

    // Utilizando os Métodos Mágicos
    $pessoa->id = 12345;
    $pessoa->nome = "Marnei";
    $pessoa->sobrenome = "Cardoso";
    $pessoa->email = "prof.marneicardoso@gmail.com";
    $pessoa->senha = "12345";

    echo "<p>ID: " . $pessoa->id . "</p>";
    echo "<p>Nome: " . $pessoa->nome . " " . $pessoa->sobrenome . "</p>";
    echo "<p>E-mail: " . $pessoa->email . "</p>";
    echo "<p>Senha: " . $pessoa->senha . "</p>";

    ?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>