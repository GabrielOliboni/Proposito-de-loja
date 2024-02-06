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
    <link rel="stylesheet" href="../../style/site/home.css">
   
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script><!--interação-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script><!--interação-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><!--design-->


    
</head>
<body>
  <?php 

error_reporting(0); // Desativa a exibição de erros (pode ser útil em ambientes de produção)
$erro = $_GET['erro'];

switch ($erro) {
    case 4:
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Ops!!</strong> Você não pode acessar o ADMIN
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
        break;
    // Adicione mais casos conforme necessário para lidar com outros valores de $erro

    default:
        // Código a ser executado se $erro não corresponder a nenhum dos casos anteriores
        break;
}
?>

      <header>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
   <a href="#"><img  src="../../img/logo.png" alt="Logo" width="200px" class="d-inline-block align-text-top" style="margin-left: 10px; margin-right: 150px;"></a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    
                  </li>

                  <div class="btn-group">
                    <a   href="#" style="color: rgb(131, 31, 0)!important" >HOME</a >
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
      
        <div id="carouselExampleCaptions" class="carousel slide" ><!--INICIO DO CAROSSEL-->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../img/tela principal.jpg" class="d-block w-100" alt="automovel" style= " height: 650px; box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.589); object-fit: cover;" >
            <div class="carousel-caption d-none d-md-block">
              <h5>VENHA CONHECER NOSSAS MÁQUINAS AGRÍCOLAS</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../img/trator.jpg" class="d-block w-100" alt="..." style= " height: 650px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>TRATORES</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../img/pulve.jpg" class="d-block w-100" alt="..." style= " height: 650px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>PULVERIZADORES</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../img/seifa.jpg" class="d-block w-100" alt="..." style= " height: 650px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>SEIFAS</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../img/plantadeitra.jpg" class="d-block w-100" alt="..." style= " height: 650px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>PLANTADEIRAS</h5>
            </div>
          </div>
          
          <div class="carousel-item" >
            <img src="../../img/grade-agrícola.jpg" class="d-block w-100" alt="..." style= " height: 650px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block" >
              <h5>GRADES AGRÍCOLAS</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../../img/subsolador.webp" class="d-block w-100" alt="..." style= " height: 650px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>SUBSOLADORES</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div style="background-color: brown; width: 100%; height: 3px;"></div>
      </div><!--FIM DO CAROSSEL-->
      
      <h1 id="h1-da-categoria">Navegue pelas categoria</h1><!-- inicio da categoria-->
      <div class="categoria" style="padding-left: 12.5%;">
        <a href="../venda/trator.php">
          <div class="escrita">
            <div class="trator"></div>
            <p>trator</p>
          </div>
        </a>
        <a href="../venda/pulverizador.php">
          <div class="escrita">
            <div class="pulverizador"></div>
            <p>pulverizador</p>
          </div>
        </a>
        <a href="../venda/seifa.php">
          <div class="escrita">
            <div class="seifa"></div>
            <p>seifa</p>
          </div>
        </a>
        <a href="../venda/plantadeira.php">
          <div class="escrita">
            <div class="plantadeira"></div>
            <p>plantadeira</p>
          </div>
        </a>
        <a href="../venda/grades.php">
          <div class="escrita" >
            <div class="grades-agricola"></div>
            <p>grades agrÍcola</p>
          </div>
        </a>
        <a href="../venda/subsolador.php">
          <div class="escrita">
            <div class="subsoladores"></div>
            <p>subsoladores</p>
          </div>
        </a>
      </div>
      <div style=" padding-bottom: 40px;"> </div><!-- fim da categoria-->
      <div class="fundo" >
        <div class="box">
        <header class="linha_vermelha" style="background-color: rgb(0, 0, 0); margin-top: 0%; padding-bottom: 7px;"></header>
      <div>
        <h1 class="um-pouco">UM POUCO SOBRE NÓS </h1>
      </div>
 
      
        <div id="Nossa-Historia" >
  
          <h1 class="pergunta">Nossa Historia</h1>
       
          <p>No início, Pedro, um empreendedor determinado, fundou a "Auto Agro" em uma pequena cidade rural. A loja de máquinas agrícolas enfrentou desafios iniciais, incluindo concorrência acirrada e recursos limitados. No entanto, Pedro manteve seu compromisso com a qualidade e o atendimento ao cliente. Com o tempo, a "Auto Agro" ganhou a confiança dos agricultores locais, construindo relacionamentos sólidos. A loja continuou a crescer, oferecendo produtos de alta qualidade e serviços confiáveis. 
          </p>
        </div>
        <div class="maps"><div class="loc"> <img src="../../img/LOCALIZAÇÃO.png" alt="" style="width: 250px; margin-top: 4px; margin-left: 35%;"></div><iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28599.407054768635!2d-52.8671779618305!3d-26.361259173466262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fab0f2fe7ed79d%3A0xb9821f7e97323093!2zU8OjbyBMb3VyZW7Dp28gZG8gT2VzdGUsIFND!5e0!3m2!1spt-BR!2sbr!4v1698196513653!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="margin-left: 35%; width: 50%;"></iframe></div>
      </div>
      <header class="linha_vermelha" style="background-color: rgb(0, 0, 0); margin-bottom: 40px;"></header>
       
     
    
    

  <div class="vender">
   <img class="mais-vendido" src="../../img/mais-vendidos.png" alt="" height="100px" width="600px">


          <div class="card-group"><!--INICIO DO CARD-->
          <?php
            include("../config/conexao.php");

          $res = mysqli_query($link,"select * from produto where destaque = 1")or die(mysqli_error($link));
          while($show=mysqli_fetch_assoc($res)){
            $nome = $show['nome_produto'];
            $desc = $show['descricao_produto'];
            $valor = $show['valor_produto'];
            $img = $show['img'];
          ?>
           <div class="card" style=" border-radius: 5px;">
              <img src="../config/imagens/<?php echo $img; ?>" class="card-img-top" alt="..." style=" border-radius: 5px;  background-size: cover;object-fit:cover;">
              <div class="card-body">
                <h5 class="card-title" style="color: rgb(255, 230, 219);"><?php echo $nome ?></h5>
                <p class="card-text"><?php echo $desc ?></p>
                <p class="card-text">R$ <?php echo $valor ?></p>
              </div>
            </div>
          <?php
          }
          ?>
           
       
            
          </div>

      </div>



        
     
      <header class="linha_verde"></header>


      <header class="linha_verde"></header>
      <footer><!--INICIO DO RODAPÉ-->
        <header style="background-color: green;" class="linha_vermelha"></header>
        <div id="footer_content">
            <div id="footer_contacts">
                <img src="../../img/favicon.png" alt="Logo" width="100px">
                <p>Conecte-se Conosco nas Redes Sociais</p>
            <div class="justimgfooter">
                <div id="footer_social_media" >
        
                    <a href="https://www.instagram.com/aut0.agr0/?next=%2F" target="_blank" class="footer-link" id="instagram" style="margin-left: 20%;" >
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61553975190900&is_tour_dismissed=true" target="_blank" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://w.app/T7KjNL" target="_blank" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    
        <ul class="footer-list">
          <li>
              <h3 class="h3">Auto Agro</h3>
          </li>
          <li>
              <a href="../sobre-nos/Quem-somos.php" class="footer-link"> Quem somos</a>
          </li>
          <li>
              <a href="../sobre-nos/Nossa-Missão.php" class="footer-link">Nossa Missão </a>
          </li>
          <li>
              <a href="../sobre-nos/O-Que-Oferecemos.php" class="footer-link">O Que Oferecemos</a>
          </li>
          <li>
            <a href="../sobre-nos/Compromisso-com-a-Qualidade.php" class="footer-link">Compromisso com a Qualidade </a>
        </li>
        <li>
            <a href="../sobre-nos/Sustentabilidade-ambiental.php" class="footer-link"> Sustentabilidade Ambiental </a>
        </li>
        <li>
            <a href="../sobre-nos/Nossa-Equipe.php" class="footer-link">Nossa Equipe</a>
        </li>
         
      </ul>
      <ul class="footer-list">
        <li>
            <h3 class="h3">categoria</h3>
        </li>
        <li>
            <a href="../sobre-nos/Quem-somos.html" class="footer-link"> Trator</a>
        </li>
        <li>
            <a href="../sobre-nos/Nossa-Missão.html" class="footer-link">Pulverizador </a>
        </li>
        <li>
            <a href="../sobre-nos/O-Que-Oferecemos.html" class="footer-link">Seifa</a>
        </li>
        <li>
          <a href="../sobre-nos/Compromisso-com-a-Qualidade.html" class="footer-link">Plantadeira</a>
      </li>
      <li>
          <a href="../sobre-nos/Sustentabilidade-ambiental.html" class="footer-link"> Grade agrícola</a>
      </li>
      <li>
          <a href="../sobre-nos/Nossa-Equipe.html" class="footer-link">Subsolador</a>
      </li>
       
    </ul>
            <ul class="footer-list">
                <li>
                    <h3 class="h3">Duvidas </h3>
                </li>
                <li>
                    <a href="../../html/home/home.php#h1-da-categoria" class="footer-link">Localização</a>
                </li>
                <li>
                    <a href="../ajuda/ajuda.php" class="footer-link">Entrega</a>
                </li>
                <li>
                    <a href="../ajuda/ajuda.php" class="footer-link">Pagamento</a>
                </li>
                <li>
                  <a href="../tela-inicial/criar-conta/termos.html" class="footer-link">Politica de privacidade</a>
                  </li>
                  <li><a href="../tela-inicial/criar-conta/termos.html" class="footer-link">Termos de serviços</a></li>
             
            </ul>
        </div>
    </footer><!--FIM DO RODAPÉ-->
<footer style="padding: 7px; color: white; background-color: rgb(13, 13, 13); text-align: center;">© Gabriel Mezzomo Oliboni</footer>
</body>
</html>