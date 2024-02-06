<?php
// Inicia a sessão
session_start();

// Remove a variável específica da sessão (no caso, "EMAIL")
unset($_SESSION["EMAIL"]);

// Destrói completamente a sessão
session_destroy();

// Redireciona para a página inicial com um parâmetro de erro 4
header("Location: ../home/home.php?error=4");
?>