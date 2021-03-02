<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Login PHP</title>
    <!-- Inclui o arquivo CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Formulario de Login -->

    <div>
        <div class="contato">

            <h2>Efetuar Login</h2>

            <form action="confirmaLogin.php" method="post">

                <p class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </p>

                <p class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha">
                </p>

                <p>
                    <button class="btn btn-success" type="submit" name="submit" name="formLogin">Logar</button>
                    <button class="btn btn-danger" type="reset" name="reset">Limpar</button>
                </p>
            </form>

        </div>

</body>

</html>