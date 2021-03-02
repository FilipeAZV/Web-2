<?php
//Verifica se veio do formulário
/*if (isset()) {

}
*/

//Recebe os dados informados no formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

//Simula os valores vindos do banco de dados(DB)
$emailDB = "prof.marneicardoso@gmail.com";
$senhaDB = "12345";

$resultado = "";

//Compara o valor informado com o valor vindo do DB
//strcmp = string compare
//         str    cmp 
if (strcmp($email, $emailDB) == 0 && strcmp($senha, $senhaDB) == 0) {
    $resultado = "Login efetuado com sucesso!";
} else {
    $resultado = "E-mail ou senha inválidos";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirma Login</title>
    <!-- Inclui o arquivo CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="contato">

        <h2>Confirma Login</h2>

        <div>
        <!-- Mostra o resultado com echo (encurtado) -->
            <?= $resultado ?>
        </div>

    </div>
</body>

</html>