<?php 

require 'sanitizeRequest.php';

session_start();

// para o cliente não acessar diretamente a página login.php

if (isset($_REQUEST["email"]) && isset($_REQUEST["senha"])){

//definindo variável para buscar dados do arquivo usuario.class.php

    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];
            
     // Consulta ao banco de dados
     include_once './class/Login.class.php';
     $usuario = new Users();
     $usuario->__setLogin("$email", md5($senha));
     
     $resultSet  = $DBConnection->query($usuario->checkUsersLogin());
     $checkUser = mysqli_num_rows($resultSet);
     $dado = mysqli_fetch_array($resultSet);
     $_SESSION ['idUser'] = $dado['idNivelUsuario'];
 
     if ($checkUser == 1 && $_SESSION['idUser']=='1') {
        header ("Location: impressao.php");
    }
 
    if ($checkUser == 1) {
        if ( isset ($_SESSION['idUser'])!='0' && ($_SESSION['idUser'])!='1')  {
            header ("Location: cardapio.php");
            }
        }
   
        else {
            header("Location:login.html");
        }
 

}
     




?>
