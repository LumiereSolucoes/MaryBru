<?php

session_start();
    $idFeedback = $_REQUEST['idFeedback'];
    $nome     = $_REQUEST['nome'];
    $email    = $_REQUEST['email'];
    $telefone = $_REQUEST['telefone'];
    $mensagem = $_REQUEST['mensagem'];
    
include_once './class/Contato.class.php';
$feedback = new Feedback($idFeedback, $email, $nome, $telefone, $mensagem);
$feedback->insert();
echo "<script>alert('Agradecemos o contato!');location.href=\"contato.html\";</script>";
?>