<?php
function cadastrar()
{
    //Guarda valores informados no FORM
    $nomeTela  = $_POST['nome'];
    $emailTela = $_POST['email'];
    $senhaTela = $_POST['senha'];

    //Incluir os arquivos
    include_once "Usuario.php";
    include_once "Conexao.php";

    //Cria o objeto da classe
    $usuario = new Usuario();
    $db = new ConexaoDB();

    //Guarda os dados no objeto
    $usuario->$nome = $nomeTela;
    $usuario->email = $emailTela;
    $usuario->senha = $senhaTela;

    $conexao = $db->abrirConexao();

    $sql = "INSERT INTO usuario (nome, email, senha)
            VALUES
            (?, ?, ?)";

    //Cria i Statement
    $stmt = $conexao->prepare($sql);

    //Vincula o parâmetro que sera inserido no DB
    $stmt->bind_param("sss", $nome, $email, $senha);
    
    $nome  = $usuario->nome;
    $email = $usuario->email;
    $senha = $usuario->senha;
    
    // Executa o Statement
    $stmt->is_execute();

    //Fecha o Statement e a conexão
    $stmt->close();
    $db->fechaConexaoDB();
}