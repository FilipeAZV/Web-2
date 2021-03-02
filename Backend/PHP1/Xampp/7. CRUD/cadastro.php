<?php
//Guarda os valores informados no form
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

/*echo "Nome: " . $nome . "<br>";
echo "E-mail: " . $email . "<br>";
echo "Senha: " . $senha;*/

//Sitema de login

//Dados vindos do BD (simulados)
$emailDB = "filipeazevedomoraes@gmail.com";
$senhaDB = "12345";

//Compara os dados informados no form com os do BD
//strcmp - faz comparação entre strings
//Verificação individual
if (strcmp($email, $emailDB) == 0) {
    if (strcmp($senha, $senhaDB) == 0) {
        echo "Login efetuado com sucesso";
        
    } else {
        echo "Senha inválida";
    }

} else {
    echo "E-mail não encontrado";
}


//As duas verificações em apenas uma linha (um teste)
/*if (strcmp($email, $emailDB) == 0 && strcmp($senha, $senhaDB) == 0) {
    echo "Login efetuado com sucesso";

} else {
    echo "E-mail ou senha inválidos";
}*/