<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cadastro.css">
</head>

<body>
    <div class="cadastro">

        <h3>Cadastro</h3>
        <h5>Cadastre-se para fazer login e para receber as novidades da loja por e-mail</h5>

        <form action="controleUsuario.php" method="post">

            <p class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </p>

            <p class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email">
            </p>

            <p class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha">
            </p>

            <h4>
                <p>
                    <button class="btn btn-success" type="submit" name="cadastrar">Cadastrar</button>
                </p>
            </h4>

        </form>
    </div>
</body>
    <h6><a href="login.html">Clique aqui caso já tenha login</a></h6>
?>