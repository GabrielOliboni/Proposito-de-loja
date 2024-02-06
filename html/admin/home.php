<?php 
// Inicia a sessão
session_start();

// Inclui o arquivo de conexão com o banco de dados
include("../config/conexao.php");

// Obtém o endereço de e-mail da sessão
$email = $_SESSION["EMAIL"];

// Executa uma consulta SQL para selecionar todos os dados do usuário com o e-mail correspondente
$res = mysqli_query($link, "SELECT * FROM usuario WHERE email = '$email' ");

// Obtém os resultados da consulta como uma array associativa
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="../../style/site/adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <!--font--> <link rel="preconnect" href="https://fonts.googleapis.com">
  <!--font--><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--font--><link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="      " type="image/x-icon">
</head>
<body class="editar">
   
<?php
// Configuração para suprimir mensagens de erro (desativar relatório de erros)
error_reporting(0);

// Obtém o valor do parâmetro 'erro' da consulta GET
$erro = $_GET['erro'];

// Estrutura switch para exibir mensagens com base no valor do 'erro'
switch ($erro) {
    case 0:
        // Nenhuma ação específica para o caso 0
        break;
    case 1:
        // Exibe uma mensagem de sucesso
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Registro adicionado!</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        break;
    case 2:
        // Exibe uma mensagem de erro
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Erro ao efetuar!</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        break;
    case 3:
        // Nenhuma ação específica para o caso 3
        break;
}
?>

    <div class="img">
      <br>
    <a href="../home/home.php" class="btn-btn-danger">SAIR</a>
        <form action="../config/trataProdutos.php" method="POST" style="width:50%;margin:0 auto;padding:0 auto;" enctype="multipart/form-data">
        <div class="box-branco">

        <h2 style="font-size: 70px; font-weight: bolder;margin-bottom: 50px; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.256);">
  <b>Cadastro de Produtos</b>
</h2>
                <input type="text" class="form-control" name="nome" placeholder="Nome Produto" required/><br>
                <input type="text" class="form-control" name="descricao" placeholder="Descricao Produto" required/><br>
                <input type="text" class="form-control" name="valor" placeholder="Valor Produto" required><br>
                <select class="form-control" name="categoria" id="">
                    <option style="color: rgb(89, 92, 95) !important;"class="form-control" value="0">Escolha uma categoria</option>
                    <?php 
                       // vai fazer uma busca no banco para saber quais são as categorias
                        $res = mysqli_query($link, "SELECT * FROM categoria");
                        while($show = mysqli_fetch_assoc($res)){
                            $cod_cat = $show['cod_categoria'];
                            $nome_categoria = $show['nome_categoria'];
                            echo "<option value='$cod_cat'>$nome_categoria</option>";
                           
                        }
                    ?>
                </select>
                <input  class="form-control" type="file" id="categoria" name="foto"  required><br>
                <input name="destaque" type="checkbox" > <P style="font-weight: bold;">DESTAQUE</P>
                <input class="cadastrar" type="submit" class="btn btn-primary" value="Cadastrar" /><br>
            </form>
        </div>
    </div>
    
    <?php
// Inclui o arquivo de conexão com o banco de dados
include("../config/conexao.php");

// Executa uma consulta para obter todos os produtos
$result = mysqli_query($link, "SELECT * FROM produto");

// Obtém o número de linhas resultantes da consulta
$possui = mysqli_num_rows($result);

// Verifica se existem produtos cadastrados
if ($possui > 0) {
    echo "<h2 class=\"cadastro\">Produtos Cadastrados</h2>";
    echo "<div class=\"box-externa\"><table style=\"border-radius: 20px !important;\" class='table table-striped' id='table' style='padding: 30px; background-color: white;'>";
    echo "<tr>";
    echo "<th class=\"nomes\">Categoria</th>";
    echo "<th class=\"nomes\">Nome produto</th>";
    echo "<th class=\"nomes\">Descrição Produto</th>";
    echo "<th class=\"nomes\">Valor Produto</th>";
    echo "<th class=\"nomes\">Imagem</th>";
    echo "<th class=\"nomes\">Destaque</th>";
    echo "<th class=\"nomes\">Ação</th>";
    echo "</tr>";

    // Executa uma consulta para obter produtos com informações de categoria
    $res = mysqli_query($link, "SELECT p.*, c.nome_categoria FROM produto p JOIN categoria c ON p.cod_categoria = c.cod_categoria");

    // Loop para exibir os produtos
    while ($show = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td class=\"produtos\">" . $show['nome_categoria'] . "</td>";
        echo "<td class=\"produtos\">" . $show['nome_produto'] . "</td>";
        echo "<td class=\"produtos\">" . $show['descricao_produto'] . "</td>";
        echo "<td class=\"produtos\">" . $show['valor_produto'] . "</td>";
        echo "<td class=\"produtos\">" . $show['img'] . "</td>";
        echo "<td class=\"produtos\">" . ($show['destaque'] == 1 ? 'Sim' : 'Não') . "</td>";
        echo "<td class=\"produtos\"><a href='editar.php?id=$show[cod_produto]' >
                                            <img src='images/edit.png' width=20 />
                                          </a><a href='remover.php?id=$show[cod_produto]'>
                                            <img src='images/delete.png' width=20/>
                                        </a>
                                    </td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "<h2 class=\"nenhum-ptoduto-cadastrado\">NENHUM PRODUTO CADASTRADO!</h2>";
}
?>

        

</body>
</html>