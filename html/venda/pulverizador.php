<?php 
  session_start();
  include("../config/conexao.php"); //Verifica a sessão esta ativa
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>Auto Agro </title>
    <link rel="stylesheet" href="../../style/site/categorias.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script><!--interação-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script><!--interação-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><!--design-->

    
</head>
<body>
      <header>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a href="../home/home.php"><img  src="../../img/logo.png" alt="Logo" width="200px" class="d-inline-block align-text-top" style="margin-left: 10px; margin-right: 150px;"></a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    
                  </li>

                  <div class="btn-group">
                    <a   href="../home/home.php"  >HOME</a >
                    <a  href="#" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(131, 31, 0)!important">
                      CATEGORIA <img src="../../img/seta-para-baixo.png" alt="" style="width: 30px;">
                    </a>
                    <ul class="dropdown-menu ">
                      
                      <li><a href="../venda/trator.php">Trator</a></li>
                      <li><a href="../venda/seifa.php">Seifa</a></li>
                      <li><a href="../venda/plantadeira.php">Plantadeira</a></li>
                      <li><a href="../venda/pulverizador.php">Pulverizador</a></li>
                      <li><a href="../venda/grades.php">Grade agrícola</a></li>
                      <li><a href="../venda/subsolador.php">Subsolador</a></li>
                    </ul>
                    <a    href="../../html/sobre-nos/Quem-somos.php">SOBRE NÓS</a>
                    <a    href="../contato/contato.php">CONTATO</a>
                    <a    href="../ajuda/ajuda.php">AJUDA</a>
                    <?php 

                      error_reporting(0);
                     
                      if($_SESSION["EMAIL"]){
                        echo '<span class="email">' . $_SESSION["EMAIL"] . '</span>';
                        echo ' <a style="margin-left: -1px !important; border-top-left: none !important; " class="sair" href="../config/logout.php">SAIR</a>';
                        if($_SESSION["EMAIL"] == "gabriel.oliboni@gmail.com"){
                        echo "<a  class='adm' href='../admin/home.php'>ADMIN</a>";
                      }
                    }
                      else{
                        echo "<a  class='entrar_no_login' href='../tela-inicial/login/login.php'>ENTRAR</a>";
                      }
                    ?>
                  </div>
                
                </ul>
              </div>
            </div>
          </nav>
       
          <header class="linha_vermelha"></header>
      </header>
      <img src="../../img/pulverizador.png" alt="" height="600px" width="100%">
      <div class="linha-gray"> 
      <div class="card-group"><!--INICIO DO CARD-->
          <?php
            include("../config/conexao.php");

          $res = mysqli_query($link,"SELECT p.* from produto p join categoria c on p.cod_categoria=c.cod_categoria where c.nome_categoria = 'Pulverizador' ")or die(mysqli_error($link));
          while($show=mysqli_fetch_assoc($res)){
            $nome = $show['nome_produto'];
            $desc = $show['descricao_produto'];
            $valor = $show['valor_produto'];
            $img = $show['img'];
          ?>
           <div class="card" style=" border-radius: 5px;">
              <img class="img-banco-de-dados" src="../config/imagens/<?php echo $img; ?>" class="card-img-top" alt="..." style=" border-radius: 5px;  background-size: cover;object-fit:cover;">
              <div class="card-produto">
                <h5 class="card-title" ><?php echo $nome ?></h5>
                <p class="card-text"><?php echo $desc ?></p>
                <p class="card-text">R$ <?php echo $valor ?></p>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
    </div>
  
   <footer style="padding: 7px; color: white; background-color: rgb(13, 13, 13); text-align: center; transform: translate(0px, 5px);">© Gabriel Mezzomo Oliboni</footer>
</body>
</html>
      





