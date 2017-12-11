<?php
session_start();
require_once "conexao.php";
//FILTER_SANITIZE_STRING informa que a variavel é um string.
$email=filter_input(INPUT_POST,'userEmail',FILTER_SANITIZE_STRING);
$userName=filter_input(INPUT_POST,'userName',FILTER_SANITIZE_STRING);
//Realizando a consulta para verificar email no banco de dados
$stmt=$conn->prepare("SELECT * FROM usuarios where email = ?");
$stmt->bindParam(1,$email);
$stmt->execute();
$rs=$stmt->fetch(PDO::FETCH_ASSOC);
$rsRows=$stmt->rowCount();
if(($stmt==true) AND ($rsRows!=0)){//Se o email do gmail for igual do banco o sistema é liberado   
    $_SESSION['login']=true;
    $_SESSION['userName']=$userName;
   $resultado='inicio.php';
   echo $resultado;
}else{//Caso o email não exista no banco de dados, na mesma hora ele é inserido
    $stmt=$conn->prepare("INSERT INTO usuarios (nome,email) VALUES (?,?)");
    $stmt->bindParam(1,$userName);  
    $stmt->bindParam(2,$email);  
    $stmt->execute();    
    $stmt=$conn->prepare("SELECT * FROM usuarios where email = ?");
    $stmt->bindParam(1,$email);
    $stmt->execute();
    $rs=$stmt->fetch(PDO::FETCH_ASSOC);
    $rsRows=$stmt->rowCount();   
    if(($stmt==true) AND ($rsRows!=0)){//Após ser inserido o email é verificado novamente se ele cadastrou no banco
       $_SESSION['login']=true;
       $_SESSION['userName']=$userName;
       $resultado='inicio.php';
       echo $resultado;
    }else{//Caso contrário é enviado uma mensagem de erro que impede de o login ser iniciado
        $resultado='erro';
        echo(json_encode($resultado));
    }

}


