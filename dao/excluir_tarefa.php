<?php 
require_once "conexao.php";
//Pegando id da url para realizar a exclusão de dados
$id=isset($_POST['id'])?$_POST['id']:0;
if($id!=0){
    $stmt=$conn->prepare("DELETE FROM tarefa where cod_tarefa = ?");
    $stmt->bindParam(1,$id);
    $stmt->execute();
    header("Location: ../excluir.php");
}
else{
    header("Location: ../excluir.php");
}

     

