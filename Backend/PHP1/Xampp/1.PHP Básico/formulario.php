<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>

<body>
    <h3>Pegando Dados do formulário com PHP</h3>

    <p>Cadastro de contato</p>

<?php
echo "Teste em PHP";
?>

    <!-- action == para onde vai enviar os dados (qual página) -->
    <form action="confirmaCadastro.php" method="POST">

        <p>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            <!-- o ID é usado com o javascript (manipulação do DOM) -->
        </p>

        <p>
            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome"required>
            <!-- o name é usado pelo PHP (e outras linguagens do backend) -->
        </p>

        <p>
            <label for="idade">idade</label>
            <input type="text" id="idade" name="idade" required>
        </p>

        <p>
            <!-- Submit é o padrão (mesmo se não informar) -->
            <button type="submit" name="formCadastro">Cadastrar</button>
            <button type="reset">Limpar</button>
        </p>

    </form>

<hr>
    <form action="confirmaCadastro.php" method="POST">
        <p>
            <label for="nota1">Nota 1</label>
            <input type="number" id="nota1" name="nota1" required>
        </p>

        <p>
            <label for="nota2">Nota 2</label>
            <input type="number" id="nota2" name="nota2" required>
        </p>

        <p>
            <label for="nota3">Nota 3</label>
            <input type="number" id="nota3" name="nota3" required>
        </p>

        <p>
            <button type="submit" name="formMedia"> Calcular Média </button>
        </p> 
    </form>

</body>
</html>