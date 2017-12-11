<?php 
session_start();
require_once "conexao.php";
//Pegando id da url da tabela da tela listar para realizar a alteração do status da tarefa
$id=isset($_GET['id'])?$_GET['id']:0;
$usuario_alterado=$_SESSION['userName'];

$status="Finalizada";    
if($id!=0){
    $stmt=$conn->prepare("UPDATE tarefa SET status=?, usuario_alteracao=? WHERE cod_tarefa=?");
    $stmt->bindParam(1,$status);
    $stmt->bindParam(2,$usuario_alterado);
    $stmt->bindParam(3,$id);
    $stmt->execute();
    header("Location: ../listar.php");
}
else{
    header("Location: ../listar.php");
}