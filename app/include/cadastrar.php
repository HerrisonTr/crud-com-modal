<?php 
    
    include "../../config/conexao.php";

    $nome = $_POST['nome'];
    $dtnasc = $_POST['dtnasc'];
    $id = $_GET['idcli'];

    $sql = "insert into cliente values (null, '{$nome}', '{$dtnasc}', 'a')";

    
    if(mysqli_query($conn, $sql)){
        $msg = "Usuário cadastrado com sucesso";
        header("location: ../index.php?msg={$msg}");
    }
    else {
        $msg = "Erro ao cadastrar usuário";
        header("location: ../index.php?msg={$msg}");

    }


?>