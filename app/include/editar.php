<?php 

include "../../config/conexao.php";

$nome = $_POST['nome'];
$dtnasc = $_POST['dtnasc'];
$id = $_GET['idedit'];



$updatecli = "update cliente set nome = '{$nome}', dtnasc = '{$dtnasc}' where id = {$id}";
if (mysqli_query($conn, $updatecli)) {
    $msg = "Cliente editado com sucesso";
    header("location: ../index.php?msg={$msg}");
} else {    $msg = "Cliente editado com sucesso";
    header("location: ../index.php?msg={$msg}");}
