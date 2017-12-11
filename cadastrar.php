<?php
//Verificando se a sessão esta aberta
session_start();
if(!empty($_SESSION['login']) && $_SESSION['login']==true){

 ?>
<?php require_once "utf.php"; ?>
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
		<link rel="stylesheet" href="css/estilo.css"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
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
                       <li class="s"><a href="inicio.php">Início</a></li>
                       <li class="active s"><a href="cadastrar.php">Nova Tarefa</a></li>
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
                <h2 class="s">Cadastro de Tarefas</h2>
                <p class="s"></p>
            </div>
        </div>        
        <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title h1">Cadastrar Nova Tarefa</h3>
                </div>
                <br >
                <form name="cadastro" enctype="multipart/form-data" class="form-horizontal" action="dao/cadastrar_tarefa.php" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="inputNome" class="col-lg-2 control-label">Nome da Tarefa</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="inputNome" name="nome" placeholder="informe o nome da tarefa" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                           <label for="descricao" class="col-lg-2 control-label">Descrição:</label>
                        <div class="col-lg-9">
                               <textarea class="form-control" rows="2" name="descricao" id="descricao" placeholder="Informe a descrição da tarefa"  required=""></textarea>
                        </div>
                      </div> 
                      
                      <div class="form-group">
                            <label for="files" class="col-lg-2 control-label">Anexar arquivo</label>
                            <div class="col-lg-9">       
                            <input type='file' name='arquivo[]'/><br>
                            
                            </div>
                        </div>                                
                        <div class="form-group">
                            <label for="inputPrio" class="col-lg-2 control-label">Prioridade</label>
                            <div class="col-lg-9">
                                 <select class="selectpicker" name="prioridade">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                                 </select>
                            </div>
                        </div>    
                        <input type="hidden" placeholder="text" class="form-control" name="usuario" value="<?=$_SESSION['userName'];?>">  
                        <div class="form-group">
                            <div class="col-lg-6 col-lg-offset-2">
                                <button type="submit" name="operacao" class="btn btn-success" value="cadastrar">Cadastrar</button>
                            </div>
                        </div>
                    </fieldset>
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
<?php }else{ require_once "erro_sessao.php"; }?>