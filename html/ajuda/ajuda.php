<?php 
session_start();
//include("../config/verifica.php"); //Verifica a sessão esta ativa
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Agro</title>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../style/site/pagamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <?php 
  error_reporting(0);
    $erro = $_GET['erro'];
    switch($erro){
      case 4:
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Ops!!</strong>Voce não pode acessar o ADMIN
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        break;
    }
  
  ?>
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
                    <a   href="#"  >HOME</a >
                    <a  href="#" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(0, 0, 0);">
                      CATEGORIA <img src="../../img/seta-para-baixo.png" alt="" style="width: 30px;">
                    </a>
                    <ul class="dropdown-menu ">
                     
                      <li><a href="../venda/trator.php">Trator</a></li>
                      <li><a href="../venda/seifa.php">Seifa</a></li>
                      <li><a href="../venda/plantadeira.php">Plantadeira</a></li>
                      <li><a href="../venda/pulverizador.php">Pulverizador</a></li>
                      <li><a href="../venda/grades.php">grade agrícola</a></li>
                      <li><a href="../venda/subsolador.php">Subsolador</a></li>
                    </ul>
                    <a    href="../../html/sobre-nos/Quem-somos.php">SOBRE NÓS</a>
                    <a    href="../contato/contato.php">CONTATO</a>
                    <a    href="../ajuda/ajuda.php" style="color: rgb(131, 31, 0)!important">AJUDA</a>
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
      </header>
          <nav id="secun" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
   
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    
                  </li>

                  <div class="btn-group" style="text-aling:center;">
                  <a  class="a"  href="#" style="color: rgb(131, 31, 0); margin-left:195%">Pagamento/Entrega</a>
                    
                    <a  class="a"  href="../../html/home/home.php#h1-da-categoria">Endereço</a>
     
                    
                  </div>
                
                </ul>
              </div>
            </div>
          </nav>

      </header>
        <div>
            <div style="float: right">
                <img src="../../img/pagamento-e-entrga.webp" alt="" >
            </div>
            <div>
                <h1 class="pagamento">PAGAMENTO E ENTREGA</h1>
                <p><i>
                    No Auto Agro, valorizamos a importância do atendimento personalizado. Por essa razão, todas as transações de compra devem ser realizadas exclusivamente em nossa loja física. Destacamos que não oferecemos serviços de entrega e pagamento online. Ao visitar nossa loja, você terá a oportunidade de explorar nossa vasta gama de máquinas agrícolas, receber orientação especializada da nossa equipe e efetuar o pagamento na hora.
                    
                    Este modelo de compra presencial permite uma experiência mais próxima e eficiente, garantindo que suas necessidades sejam atendidas da melhor maneira possível. Agradecemos pela compreensão e aguardamos ansiosamente por sua visita ao Auto Agro.
                </i></p>
            </div>
        </div>

        <footer style="padding: 7px; color: white; background-color: rgb(13, 13, 13); text-align: center; transform: translate(0px, 200px); width: 100%; "><b style="transform: translate(600px, 0px); font-weight: normal;">© Gabriel Mezzomo Oliboni</b></footer>
    
</body>
</html>
