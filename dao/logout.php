<?php
     //Limpando e destruindo a sessão, após o usuário sair do sistema
     session_start();
     session_unset();
     session_destroy();
     header("Location: ../login.php");
  
?>