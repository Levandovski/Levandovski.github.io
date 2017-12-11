<?php
//Verificando se a sessão esta aberta
session_start();
if(!empty($_SESSION['login']) && $_SESSION['login']==true){
   require_once "dao/redirecionar_login.php";
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content=""> 
        <title>Dashboard My System</title> 
        <!-- Bootstrap core CSS -->
        <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS personalizado -->
        <link href="bootstrap-3.3.5-dist/css/signin.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilo.css"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="633890497367-m2qjt6tqgv3f6eoon10umg9vp25v5n68.apps.googleusercontent.com">
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
      
        <div class="container">
        <div class="col-md-12">
            <div class="panel-heading">
                <h2 class="text-center s">Acessar Dashboard My System</h2>
            </div>
            <form class="form-signin" role="form" action="login_gmail.php" method="post">           
                <button class="btn btn-lg btn-primary botao_gmail btn-block" type="submit">Logar no sistema com o Google</button>
           </form>    
        </div> <!-- /container --> 
        </div>
        
        <hr>
        <footer>
            <p class="text-center">© Desenvolvido by: Jessé Levandovski</p>
        </footer> 
        <!-- Scripts jQuery e Bootstrap -->
        <script src="bootstrap-3.3.5-dist/js/jquery-1.11.3.min.js"></script>
        <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    </body>
</html>
