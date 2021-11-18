<?php 
    
    include "../../config/conexao.php";

    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $id = $_GET['idcli'];

    
    $verificar = "select * from documento where rg = '{$rg}' or cpf = '{$cpf}'";
    $query_verificar = mysqli_query($conn, $verificar);

    if(mysqli_num_rows($query_verificar) > 0 ){
        $msg = "Documento já cadastrado";
        header("location: ../index.php?msg={$msg}");
    }
    else {
        $sql = "insert into documento values (null, '{$rg}', '{$cpf}', {$id})";
        if(mysqli_query($conn, $sql)){
            $msg = "Documento cadastrado com sucesso";
            header("location: ../index.php?msg={$msg}");
        }
        else {
            $msg = "Erro ao cadastrar documento";
            header("location: ../index.php?msg={$msg}");
    
        }
    }
