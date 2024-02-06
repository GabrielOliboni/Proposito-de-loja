<?php

include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta para verificar se o e-mail existe na tabela de usuários
$res = mysqli_query($link, "SELECT * FROM usuario WHERE email = '$email'");
$row = mysqli_num_rows($res);

// Verifica se o e-mail existe
if ($row == 1) {
    // Consulta para verificar se a senha corresponde ao e-mail
    $resPass = mysqli_query($link, "SELECT * FROM usuario WHERE senha = '$senha'");
    $rowPass = mysqli_num_rows($resPass);

    // Verifica se a senha está correta
    if ($rowPass == 1) {
        // Redireciona para a página home em caso de sucesso
        header("Location:home.php");
    } else {
        // Redireciona para a página de login com um parâmetro de erro em caso de senha incorreta
        header("Location:index.php?erro=1");
    }
} else {
    // Redireciona para a página de login com um parâmetro de erro em caso de e-mail não existente
    header("Location:index.php?erro=1");
}

?>
