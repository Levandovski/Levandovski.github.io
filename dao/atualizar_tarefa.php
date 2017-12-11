<?php 
require_once "conexao.php";
//Pegando dados para atualizar o sistema
$id=isset($_POST['id'])?$_POST['id']:0;
$nome=isset($_POST['nome'])?$_POST['nome']:"";
$descricao=isset($_POST['descricao'])?$_POST['descricao']:"";
$prioridade=isset($_POST['prioridade'])?$_POST['prioridade']:"";
$usuario=isset($_POST['usuario'])?$_POST['usuario']:"";    

if($id!=0){
    $stmt=$conn->prepare("UPDATE tarefa SET nome=?,descricao=?,prioridade=?,usuario=? WHERE cod_tarefa=?");
    $stmt->bindParam(1,$nome);
    $stmt->bindParam(2,$descricao);
    $stmt->bindParam(3,$prioridade);
    $stmt->bindParam(4,$usuario);
    $stmt->bindParam(5,$id);
    $stmt->execute();
    header("Location: ../alterar.php");
}
else{
    header("Location: ../alterar.php");
}