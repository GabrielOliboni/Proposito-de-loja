<?php

// Inclui o arquivo de conexão com o banco de dados
include("../../config/conexao.php");

// Obtém o endereço de e-mail e senha do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta para verificar se o e-mail existe na tabela de usuários
$res = mysqli_query($link, "SELECT * FROM usuario WHERE email = '$email'") or die(mysqli_error($link));
$row = mysqli_num_rows($res);

// Verifica se o e-mail existe
if ($row == 1) {
    // Consulta para verificar se a senha corresponde ao e-mail
    $resPass = mysqli_query($link, "SELECT * FROM usuario WHERE senha = '$senha' AND email = '$email'") or die(mysqli_error($link));
    $rowPass = mysqli_num_rows($resPass);

    // Verifica se a senha está correta
    if ($rowPass == 1) {
        // Inicia a sessão e armazena o e-mail na variável de sessão
        session_start();
        $_SESSION["EMAIL"] = $email;

        // Redireciona para a página home em caso de sucesso
        header("Location:../../home/home.php");
    } else {
        // Redireciona para a página de login com um parâmetro de erro em caso de senha incorreta
        header("Location:../../tela-inicial/login/login.php?erro=1");
    }
} else {
    // Redireciona para a página de login com um parâmetro de erro em caso de e-mail não existente
    header("Location:../../tela-inicial/login/login.php?erro=1");
}

?>
