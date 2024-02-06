<?php
// Configurações de conexão com o banco de dados
$host = "127.0.0.1"; // Endereço do servidor MySQL
$user = "root"; // Nome de usuário do MySQL
$pass = ""; // Senha do MySQL
$bd = "AutoAgro"; // Nome do banco de dados

// Estabelece a conexão com o banco de dados
$link = mysqli_connect($host, $user, $pass, $bd);

// Verifica se a conexão foi bem-sucedida
if (!$link) {
    // Se a conexão falhar, exibe uma mensagem de erro e o erro específico
    echo "Erro ao conectar com o banco de dados!";
    echo mysqli_error($link);
}
?>
