<?php 

    include '../../config/conexao.php';

    $id = $_GET['idcli'];
    $delcli = "delete from cliente where id = {$id}";


    $sqlDocumento = "select * from documento where idcliente = {$id}";
    $queryDocumento = mysqli_query($conn, $sqlDocumento);
    if(mysqli_num_rows($queryDocumento) > 0){
      echo  $delDoc = "delete from documento where idcliente = {$id}";
        if (mysqli_query($conn, $delDoc)){
            $query = mysqli_query($conn, $delcli);
            $msg = "Cliente excluido com sucesso";
            header("location: ../index.php?msg={$msg}");
        }
        else {
            $msg = "Erro ao excluir";
          
        }

    }
    else{
        $query = mysqli_query($conn, $delcli);
        $msg = "Cliente excluido com sucesso";
            header("location: ../index.php?msg={$msg}");
    }

    
