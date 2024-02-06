<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <style>
        body{
            background:url('https://images.pexels.com/photos/1139556/pexels-photo-1139556.jpeg?cs=srgb&dl=pexels-zhang-kaiyv-1139556.jpg&fm=jpg');
            background-size:1300px;
            
        }
        form{
            width:400px;
            height:250px;
            margin:0 auto;
            padding:0 auto;
            background-color:#f2f3f4;
            padding:10px;
            padding-top:40px;
            border-radius:10px;
            margin-top:180px;
            box-shadow:2px 2px 8px #000;
        }
    </style>
</head>
<body>
    <form action="trataLogin.php" method="Post" >
        <h4>Login no sistema</h4>
        <input type="email" class="form-control" name="email" placeholder="Email"><br>
        <input type="password" class="form-control" name="senha" placeholder="Senha"><br>
        <input type="submit" class="btn btn-primary" value="Entrar">
    </form>
</body>
</html>
