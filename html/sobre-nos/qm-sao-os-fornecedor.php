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
    <link rel="stylesheet" href="../../style/site/fornecedor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</head>
<body>
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
                    <a   href="#">HOME</a >
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
  <nav class="navbar navbar-expand-lg bg-body-tertiary" > <!--INICIO DA NAVEGAÇÃO-->
  

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../sobre-nos/Quem-somos.php" >Quem somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Nossa-Equipe.php" aria-disabled="true"  style="padding-left: 40px;">Nossa Equipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Nossa-Missão.php"  style="padding-left: 40px;">Nossa Missão</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="O-Que-Oferecemos.php" style="padding-left: 40px;  ">O Que Oferecemos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Compromisso-com-a-Qualidade.php" aria-disabled="true"  style="padding-left: 40px;">Compromisso com a Qualidade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Sustentabilidade-ambiental.php" aria-disabled="true"  style="padding-left: 40px; ">Sustentabilidade Ambiental</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="qm-sao-os-fornecedor.php" aria-disabled="true"  style="padding-left: 40px;  color: rgb(131, 31, 0) ">Quem são os fornecedores</a>
        </li>
        
        </ul>
      </div>
    </div>
  </nav> <!--FIM DA NAVEGAÇÃO-->
<div class="carosel"> </div>
 <div class="main">
  <h1>Nossos fornecedores</h1>
</h1>
  <p>
    <br>
    A Auto Agro é uma empresa dedicada a fornecer soluções de alta qualidade e inovação para a indústria agrícola. Comprometida com a excelência, a empresa estabeleceu parcerias estratégicas com os melhores fabricantes de máquinas agrícolas do mercado. Esses fornecedores líderes em inovação e tecnologia garantem que os produtos da Auto Agro representem o estado-da-arte em eficiência, conectividade e sustentabilidade. A empresa mantém uma rede global de fornecimento, assegurando a disponibilidade de peças de reposição e suporte técnico em diversas regiões. Além disso, a Auto Agro e seus fornecedores compartilham um compromisso com práticas responsáveis, visando reduzir o impacto ambiental da agricultura. Juntos, buscam promover um futuro mais verde e sustentável na indústria agrícola global.</p>
</div >
<h1 style="text-align:  center; font-family: Courier, monospace; ">Fique por dentro</h1>
<div style="justify-content: center; display: flex; padding: 30px; ">
    <div class="porque-compra" >
      <a href="https://www.cnnbrasil.com.br/economia/conexao-agro-pib-agropecuario-deve-aumentar-mais-de-10-em-2023-diz-ipea/"> <div class="imagem"></div>
        <p>Conexão Agro: PIB agropecuário deve <br> aumentar mais de 10% em 2023, diz Ipea</p></a>
    </div>
 
    <div class="porque-compra" >
      <a href="https://www.ipea.gov.br/portal/categorias/45-todas-as-noticias/noticias/13827-ipea-revisa-de-11-6-para-13-2-o-crescimento-do-pib-agro-para-2023#:~:text=Pecu%C3%A1ria%20e%20Pesca-,Ipea%20revisa%20de%2011%2C6%25%20para%2013%2C2%25,do%20PIB%20agro%20para%202023&text=Desde%20setembro%20do%20ano%20passado,ent%C3%A3o%2C%20o%20cen%C3%A1rio%20%C3%A9%20positivo."> <div class="imagem-2"></div>
        <p>Máquinas agrícolas: o que são e qual a  <br> importância para  o aumento <br> da produtividade no campo</p></a>
    </div>
     
    <div class="porque-compra" >
      <a href="https://www.negocioseguroaig.com.br/blog/fato-ou-fake/maquinas-agricolas#:~:text=O%20investimento%20n%C3%A3o%20%C3%A9%20pouco,foi%20o%20de%20m%C3%A1quinas%20agr%C3%ADcolas."> <div class="imagem-3"></div>
        <p>Vale a pena investir em  <br>máquinas agrícolas novas</p></a>
    </div>
</div>



<footer style="padding: 7px; color: white; background-color: rgb(13, 13, 13);text-align: center;">© Gabriel Mezzomo Oliboni</footer>
</body>
</html>





