<?php

// Configurações para a conexão com o banco de dados
$host = "127.0.0.1"; // Endereço do servidor MySQL
$user = "root";      // Nome de usuário do MySQL
$pass = "";          // Senha do MySQL
$bd = "login";       // Nome do banco de dados

// Tenta estabelecer a conexão com o banco de dados
$link = mysqli_connect($host, $user, $pass, $bd);

// Verifica se a conexão foi bem-sucedida
if (!$link) {
    // Exibe uma mensagem de erro em caso de falha na conexão
    echo "Erro ao conectar com o banco de dados!";
    echo mysqli_error($link); // Exibe informações detalhadas sobre o erro (não recomendado em produção)
}
?>
