<?php

session_start();
$cdg=$_SESSION['cdg'];
$idUsuario = $_SESSION['idUsuario'];
$email           =  $_SESSION['email'];
$senha           =  $_SESSION['senha'];
$nome            =  $_SESSION['nome'];
$telefone        =  $_SESSION['telefone'];

 if ($_POST['codigo']==$cdg) { 

    include_once './class/Cadastro.class.php';
    $usuario = new Usuario($idUsuario, $email, md5($senha), $nome, $telefone);
    $usuario->insert();
    echo "<script>alert('Cadastro feito com sucesso!');location.href=\"login.php\";</script>";
 } else {

    echo "<script>alert('Código incorreto!');location.href=\"cadastro.html\";</script>";

 }


    ?>