<?php
// Inclui o arquivo de conexão com o banco de dados
include("conexao.php");

// Obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Executa uma consulta para inserir os dados na tabela "usuario"
$res = mysqli_query($link, "INSERT INTO usuario (
                                        nome,
                                        email,
                                        senha)
                                        VALUES ('$nome',
                                                '$email',
                                                '$senha')");

// Verifica o resultado da inserção
if (!$res) {
    // Se a inserção falhar, redireciona para a página home.php com o parâmetro de erro 1
    header("Location: ../home/home.php?erro=1");
} else {
    // Se a inserção for bem-sucedida, redireciona para a página de login
    header("Location: ../tela-inicial/login/login.php");
}
?>
