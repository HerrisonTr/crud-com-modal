<?php 
include '../config/conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];



if(empty($login and $senha)){
    $msg = "toast1";
    header("location: ../index.php?msg=$msg");
}
else {
    $sqlLogin = "select * from login where login = '{$login}' and senha = '{$senha}'";
    $queryLogin = mysqli_query($conn, $sqlLogin);

    if (mysqli_num_rows($queryLogin) > 0) {
        header("Location: ../app/index.php?msg");
        $rowLogin = mysqli_fetch_array($queryLogin);
        session_start();
        
        $_SESSION['id'] = $rowLogin[0];
        $_SESSION['login'] = $rowLogin[1];
    }
    else {
        $msg = "toast2";
        header("Location: ../index.php?msg=$msg");
    
    }
}
