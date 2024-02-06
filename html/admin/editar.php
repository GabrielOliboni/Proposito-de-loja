<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/site/adm-editar.css">
      <!--font--> <link rel="preconnect" href="https://fonts.googleapis.com">
  <!--font--><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--font--><link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <title>Editar </title>
</head>
<body>

    <div class="box-editar">
        <form action="" method="POST" enctype="multipart/form-data">
            <?php
  
                // Inclui o arquivo de conexão com o banco de dados
                include("../config/conexao.php");
                
                // Obtém o valor do parâmetro 'id' da consulta GET
                $id = $_GET['id'];
                
                // Executa uma consulta SQL para selecionar todos os dados do produto com o ID correspondente
                $res = mysqli_query($link, "SELECT * FROM produto WHERE cod_produto = '$id'");
                
                // Obtém os resultados da consulta como uma array associativa
                $show = mysqli_fetch_assoc($res);
                
                // Exibe um link para voltar para a página 'home.php'
                echo '<a href="home.php" class="btn-btn-danger">SAIR</a>';
            ?>
    
            <h1>EDIÇÃO</h1>
            <p class="sub">DE PRODUTO</p>
            <input class="form-control"type="text" name="nome" value="<?php echo $show['nome_produto'] ?>" placeholder="Nome Produto"/><br>
            <input  class="form-control"type="text" name="descricao" value="<?php echo $show['descricao_produto'] ?>" placeholder="Descricao Produto"/><br>
            <input class="form-control" type="text" name="valor" value="<?php echo $show['valor_produto'] ?>" placeholder="Valor Produto"/><br>
            <select name="categoria" class="form-control" id="">
    
                            <option style="color: rgb(89, 92, 95) !important;"class="form-control" value="0">Escolha uma categoria</option>
                            <?php 
                            // vai fazer uma busca no banco para saber quais são as categorias
                        $res = mysqli_query($link, "SELECT * FROM categoria");
                        $cod_cat = $show['cod_categoria'];
                        while($categorias = mysqli_fetch_assoc($res)){
                            $nome_categoria = $categorias['nome_categoria'];
                            $selected = ($categorias['cod_categoria'] == $cod_cat) ? 'selected' : '';
                            echo "<option value='$cod_cat' $selected>$nome_categoria</option>";
                           
                        }
                    ?>
            </select>
            <br>
            <input  class="form-control" type="file" id="file" name="foto"  required><br>
            <input   style="transform: translate(10px, -130px );  " name="destaque" class="form-control" type="checkbox" <?php echo ($show['destaque'] == 1) ? 'checked="checked"' : ''; ?> > <P class="destaque" style="font-weight: bold;">DESTAQUE</P>
            <input type="submit" class="cadastrar"  value="Salvar" name="Salvar" /><br>
            </form>
    </div>

    <?php
        // Verifica se o formulário foi submetido
        if(isset($_POST['Salvar'])){
            // Obtém os dados do formulário
            $nome = $_POST['nome'];
            $desc = $_POST['descricao'];
            $valor = $_POST['valor'];
            $cat = $_POST['categoria'];
            $img= $_POST['foto'];
            
            // Obtém a foto do formulário e realiza o upload
            $img = $_FILES['foto'];
            $destaque = isset($_POST['destaque']) ? 1 : 0;
            
            // Obtém a extensão do arquivo
            $ext = strtolower(substr($_FILES['foto']['name'], -4));
            
            // Define um novo nome para o arquivo baseado na data atual
            $new_name = date("Y.m.d-H.i.s") . $ext;
            
            // Diretório para uploads
            $dir = '../config/imagens/';
            
            // Move a foto para o diretório de uploads
            move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name);
            
            // Exibe uma mensagem de sucesso
            echo("Imagem enviada com sucesso!");

            // Atualiza os dados do produto no banco de dados
            $res = mysqli_query($link,"UPDATE produto SET nome_produto = '$nome', 
                                                        descricao_produto = '$desc',
                                                        valor_produto = '$valor',
                                                        cod_categoria = '$cat',
                                                        img = '$new_name',
                                                        destaque = '$destaque'
                                                        WHERE cod_produto = '$id' ");

            // Verifica o resultado da atualização e redireciona com base no resultado
            if(!$res){
                header("Location: home.php?erro=2");
            } else {
                header("Location: home.php?erro=1");
            }    
        }
    ?>

</body>
</html>