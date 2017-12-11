<?php
//Verificando se a sessão esta aberta
session_start();
if(!empty($_SESSION['login']) && $_SESSION['login']==true){

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="Jessé Levandovski" content=""> 
        <title>Dashboard My System</title> 
        <!-- Bootstrap core CSS -->
        <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS personalizado -->
        <link href="bootstrap-3.3.5-dist/css/signin.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="estilo.css"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <meta name="google-signin-client_id" content="633890497367-m2qjt6tqgv3f6eoon10umg9vp25v5n68.apps.googleusercontent.com">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/funcao.js"></script>   
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand s" href="#">Dashboard My System</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active s"><a href="inicio.php">Início</a></li>
                        <li class="s"><a href="cadastrar.php">Nova Tarefa</a></li>
                        <li class="s"><a href="alterar.php">Alterar Tarefa</a></li>
                        <li class="s"><a href="listar.php">Listar Tarefas</a></li>
                        <li class="s"><a href="excluir.php">Excluir Tarefa</a></li>                        
                    </ul>            
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" placeholder="text" class="form-control" disabled value="<?=$_SESSION['userName'];?>">
                        </div>                        
                        <a href="dao/logout.php" class="btn btn-success" onclick="signOut();">Logout</a>
                       
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav> 
          <!-- Main jumbotron for a primary marketing message or call to action -->
          <div class="jumbotron fundo">
            <div class="container fundo">
                <h2 class="s">Bem vindo ao Sistema</h2>
                <p class="s">Utilize o menu acima para navegar na página</p>
            </div>
        </div>        
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
   <?php }else{ require_once "erro_sessao.php"; }?>
