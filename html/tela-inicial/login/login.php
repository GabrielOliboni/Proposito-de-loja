<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Agro</title>
    <link rel="stylesheet" href="../../../style/tela-inicial/login.css">
    <link rel="shortcut icon" href="../../../img/favicon.png" type="image/x-icon">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&family=Italiana&display=swap');
</style>

</head>
<body>
<a class="ir-para-o-home" href="../../home/home.php">VOLTAR PARA O HOME</a>
    <section class="area-de-login">
        <div class="login">
            
              <h1 class="img">Login</h1>
            
        <form action="tratalogin.php" method="POST">

            <p class="nomes">Endereço de email:</p>
            <input type="email" name="email" placeholder="Endereço de email" style="font-size: 20px;">
        <p class="nomes">Senha:</p>
        <input type="password"name="senha" placeholder="Senha" style="font-size: 20px;">
        <input type="submit" value="Entrar" style="padding-right: 30px;">
        </form>
        <br>
         
            <p >Ainda não tem uma conta? <a href="../criar-conta/cria-conta.html">Criar conta</a></p>
        </div>
    </section>
</body>
</html> 