<?php
session_start();

// Verifica a funcionalidade chamada
if (isset($_POST['cadastrar'])) {
    cadastrar();

} elseif (isset($_POST['login'])) {
    efetuarLogin();

} else {
    efetuarLogout();
}

function cadastrar()
{
    // Guarda os valores informados no FORM
    $nomeTela   = $_POST['nome'];
    $emailTela  = $_POST['email'];
    $senhaTela  = $_POST['senha'];

    // Inclui os arquivos
    include_once "Usuario.php";
    include_once "ConexaoDB.php";

    // Cria o objeto da classe
    $usuario = new Usuario();
    $db = new ConexaoDB();

    // Guarda os dados no objeto
    $usuario->nome = $nomeTela;
    $usuario->email = $emailTela;
    //$usuario->senha = $senhaTela;
    $usuario->senha = criptografarSenhaMD5($senhaTela);

    $conexao = $db->abrirConexao();

    $sql = "INSERT INTO usuario (nome, email, senha)
            VALUES
            (?, ?, ?)";

    // Cria o Statement
    $stmt = $conexao->prepare($sql);

    // Vincula o parâmetro que será inserido no DB
    $stmt->bind_param("sss", $nome, $email, $senha);
      
    $nome = $usuario->nome;
    $email = $usuario->email;
    $senha = $usuario->senha;

    // Executa o Statement
    $stmt->execute();

    // Fecha o Statement e a Conexão
    $stmt->close();
    $db->fecharConexaoDB($conexao);

    echo "Cadastro efetuado com sucesso!";
    header("refresh: 2;index.php");
}

function efetuarLogin()
{
    // Guarda os valores informados no FORM
    $emailTela  = $_POST['email'];
    $senhaTela  = $_POST['senha'];

    // Inclui os arquivos
    include_once "ConexaoDB.php";

    // Cria o objeto da classe
    $db = new ConexaoDB();

    $conexao = $db->abrirConexao();

    $sql = "SELECT * FROM usuario WHERE email = ?";

    // Cria o Statement
    $stmt = $conexao->prepare($sql);

    // Vincula o parâmetro que será buscado
    $stmt->bind_param("s", $email);

    $email = $emailTela;

    // Executa o Statement
    $stmt->execute();

    // Guarda o resultado encontrado
    $resultado = $stmt->get_result()->fetch_assoc();

    // Fecha o Statement e a Conexão
    $stmt->close();
    $db->fecharConexaoDB($conexao);

    // Se houver resultado na busca
    if ($resultado != null) {
        // Recebe os valores vindos do DB
        $senhaDB = $resultado['senha'];
        // Criptografa a senha informada
        $senhaTela = criptografarSenhaMD5($senhaTela);

        // Compara os dados informados no form, com os do DB
        if (strcmp($senhaTela, $senhaDB) == 0) {
            echo "Login efetuado com sucesso";

            $_SESSION['id'] = $resultado['id'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['email'] = $resultado['email'];

            //header("Location: index.php");
            header("refresh: 2;index.php");

        } else {
            echo "Senha inválida";
        }

    } else {
        echo "E-mail não encontrado";
    }
}

function efetuarLogout()
{
    session_destroy();
    header("Location: login.html");
}

function criptografarSenhaMD5($senha)
{
    return md5($senha);
}