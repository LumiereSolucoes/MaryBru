<?php

include_once './class/Contato.class.php';
$idFeedback = $_REQUEST['idFeedback'];
$delete = new Feedback ($idFeedback, "", "", "", "");
$delete -> delete();
header('Location: admin.php');

include_once './class/Cadastro.class.php';
$idUsuario = $_REQUEST['idUsuario'];
$delete = new Usuario ($idUsuario, "", "", "", "");
$delete -> delete();
header('Location: admin.php');


?>