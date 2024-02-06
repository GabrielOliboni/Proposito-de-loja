<?php 
// Inclui o arquivo de conexão com o banco de dados
include("../config/conexao.php");

// Verifica se o parâmetro "id" está presente na URL e é um número
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Executa uma consulta para excluir o produto com o ID fornecido
    $query = mysqli_query($link, "DELETE FROM produto WHERE cod_produto = $id");

    // Verifica o resultado da exclusão
    if (!$query) {
        // Se a exclusão não foi bem-sucedida, redireciona para a página home.php com o parâmetro de erro 1
        header("Location: ../home/home.php?erro=1");
    } else {
        // Se a exclusão foi bem-sucedida, redireciona para a página admin/home.php
        header("Location: ../admin/home.php");
    }
} else {
    // Se o parâmetro "id" não for válido, exibe uma mensagem
    echo "ID inválido ou não fornecido.";
}
?>
