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
    <script>       
          function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var userId=profile.getId();
            var userName=profile.getName();
            var userPicture=profile.getImageUrl();
            var userEmail=profile.getEmail();
            var userToken=googleUser.getAuthResponse().id_token;
             //document.getElementById('msg').innerHTML=userEmail;
             if(userName!==''){
                var dados = {
                    userId:userId,
                    userName:userName,
                    userPicture:userPicture,
                    userEmail:userEmail
                };
                $.post('dao/valida.php', dados, function(retorna){
                    if(retorna==='"erro"'){
                        var msg="Usuário não encontrado";
                        document.getElementById('msg').innerHTML=msg;                        
                    }else{
                        window.location.href=retorna;
                    }                 
                });                
             }else{
                 var msg="Usuário não encontrado";
                 document.getElementById('msg').innerHTML=msg;                
             }
            }           
        </script>       
        <div class="container">
        <div class="col-md-12">            
            <div class="panel-heading">
                <h2 class="text-center s">Acessar Dashboard My System</h2>
            </div>
            <form class="form-signin" role="form" action="" method="post">
               <div class="g-signin2 botao_gmail2 " data-onsuccess="onSignIn"  data-theme="dark"></div>
               <p id="msg" class="erro"></p>
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
