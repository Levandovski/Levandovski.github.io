<?php 

require_once "conexao.php";

       //Pegando o anexo da tarefa     
       $diretorio = "../uploads/";     
       
       if (!is_dir($diretorio)){ 
           echo "Pasta $diretorio nao existe";
        }else{
            echo "A Pasta Existe<br>";     
       
             $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
       
               for ($k = 0; $k < count($arquivo['name']); $k++)
                 {
                    $destino = $diretorio."/".$arquivo['name'][$k];
                        
                     if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
                         echo "Pasta movida<br>";
                      }else{
                          echo "Erro ao mover";
                        }
                 }        
       }
       
    
        


        //Pegando os valores enviados pelo post
        $nome=isset($_POST['nome'])?$_POST['nome']:"";
        $desc=isset($_POST['descricao'])?$_POST['descricao']:"";
        $prioridade=isset($_POST['prioridade'])?$_POST['prioridade']:"";
        $usuario=isset($_POST['usuario'])?$_POST['usuario']:"";
        $status="Processada";
        //Cadastrando os valores das variáveis    
        $stmt=$conn->prepare("INSERT INTO tarefa (nome,descricao,anexos,prioridade,usuario,status) VALUES (?,?,?,?,?,?)");
        $stmt->bindParam(1,$nome);  
        $stmt->bindParam(2,$desc);  
        $stmt->bindParam(3,$destino);  
        $stmt->bindParam(4,$prioridade);  
        $stmt->bindParam(5,$usuario); 
        $stmt->bindParam(6,$status); 
        $stmt->execute();
        header("Location: ../cadastrar.php");

