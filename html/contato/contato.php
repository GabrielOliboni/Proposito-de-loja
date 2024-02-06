<?php 
session_start();
//include("../config/verifica.php"); //Verifica a sessão esta ativa

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>Auto Agro </title>
    <link rel="stylesheet" href="../../style/site/contato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</head>
<body style="background-color: rgb(238, 238, 238);">
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
                    <a class="p" href="../home/home.php" >HOME</a>
                    <a  href="#" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(0, 0, 0);">
                      CATEGORIA <img src="../../img/seta-para-baixo.png" alt="" style="width: 30px;">
                    </a>
                    <ul class="dropdown-menu ">
                      <li><a href="../venda/trator.php" style="text-align: center;">Trator</a></li>
                      <li><a href="../venda/seifa.php">Seifa</a></li>
                      <li><a href="../venda/plantadeira.php">Plantadeira</a></li>
                      <li><a href="../venda/pulverizador.php">Pulverizador</a></li>
                      <li><a href="../venda/grades.php">grade agrícola</a></li>
                      <li><a href="../venda/subsolador.php">Subsolador</a></li>
                    </ul>
                    <a  class="a"  href="../../html/sobre-nos/Quem-somos.php">SOBRE NÓS</a>
                    <a  class="a"  href="#" style="color: rgb(131, 31, 0); ">CONTATO</a>
                    <a  class="a" href="../ajuda/ajuda.php">AJUDA</a>
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
      <div class="linha-laranja">
     
                 <h1 style="color: white !important; font-size: 26px;"> <img src="../../img/figurinha-gmail.png" style="width: 40px; display: inline;" alt=""> EMAIL</h1>
                 <p>   Auto.agro@gmail.com</p>
                 <br><br><br>
                 <h1 style="color: white !important; font-size: 26px;"> <img src="../../img/figurinha-telefone.png" style="width: 40px; display: inline;" alt=""> NÚMERO DE CELULAR</h1>
                 <p>   +55 99544-4545</p>
                 <br><br><br>
                 <h1 style="color: white !important; font-size: 26px;"> <img src="../../img/figurinha-loc.png" style="width: 30px; display: inline;" alt=""> LOCALIZAÇÃO</h1>
                <p>   J4WW+6W São Lourenço do Oeste, SC</p>
      
        <div class="quadrado-branco">
<h1 style="font-size: 60px; text-align: center; padding-top: 50px; font-family: Courier, monospace; color: black !important;">CONTATO</h1>
<br><br>

<form action="enviar-email.php" method="POST">
  <input class="escrever" name="nome" type="text" placeholder="Escreva seu nome" required>
  <br><br><br>
  <input class="escrever" name="email" type="email" placeholder="Digite um endereço de e-mail válido" required>
  <br><br><br>
   <textarea name="mensagem" class="escrever"  placeholder="Escreva..." ></textarea>
  <br><br><br><br>
  <input class="ENVIAR" type="submit" value="ENVIAR" style="padding-right: 30px;">
</form>
        </div>
      </div>
      <footer style="padding: 7px; color: white; background-color: rgb(13, 13, 13); text-align: center; transform: translate(0px, 392%);">© Gabriel Mezzomo Oliboni</footer>

    </body>
</html>