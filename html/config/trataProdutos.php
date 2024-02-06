<?php
// Inclui o arquivo de conexão com o banco de dados
include("conexao.php");

// Obtém os dados do formulário
$nome_produto = $_POST['nome'];
$desc_produto = $_POST['descricao'];
$valor_produto = $_POST['valor'];
$cat = $_POST['categoria'];
$foto = $_FILES['foto'];
$destaque = isset($_POST['destaque']) ? 1 : 0;

// Verifica se o arquivo de imagem foi enviado
if (isset($_FILES['foto'])) {
    // Obtém a extensão do arquivo
    $ext = strtolower(substr($_FILES['foto']['name'], -4));

    // Define um novo nome para o arquivo baseado na data atual
    $new_name = date("Y.m.d-H.i.s") . $ext;

    // Diretório para uploads
    $dir = './imagens/';

    // Move a foto para o diretório de uploads
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name);

    // Exibe uma mensagem de sucesso
    echo("Imagem enviada com sucesso!");

    // Executa uma consulta SQL para inserir os dados do novo produto na tabela "produto"
    $res = mysqli_query($link, "INSERT INTO produto(
                                        nome_produto,
                                        descricao_produto,
                                        valor_produto,
                                        cod_categoria,
                                        img,
                                        destaque)
                                        VALUES('$nome_produto',
                                                '$desc_produto',
                                                '$valor_produto',
                                                $cat,
                                                '$new_name',
                                                $destaque)");

    // Verifica o resultado da inserção
    if (!$res) {
        // Se a inserção falhar, redireciona para a página home.php com o parâmetro de erro 1
        header("Location:../home/home.php?erro=1");
    } else {
        // Se a inserção for bem-sucedida, redireciona para a página admin/home.php
        header("Location:../admin/home.php");
    }
}
?>
