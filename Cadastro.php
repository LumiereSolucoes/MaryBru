<?php

    require 'sanitizeRequest.php';

    $email           =  $_REQUEST['email'];
    $senha           =  $_REQUEST['senha'];
    $nome            =  $_REQUEST['nome'];
    $telefone        =  $_REQUEST['telefone'];

    function enviarEmail( $to, $from, $replyTo, $subject, $message ) {
        $headers =  'From: '       .$from .    "\r\n" .
                    'Reply-To: '   .$replyTo . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
        $mail_enviado =   mail($to, $subject, $message, $headers);
        // A função mail() retorna true ou false pro envio
        if ( $mail_enviado ){
            return (true);
        }else{
            echo ("Falha ao Enviar Email! \n<br> Verifique suas configurações smtp no php.ini");
            return (false);
        }
        
    }
    
    
    $cdg="123";
    // INICIO Exemplo de Uso da Função 
    
    $mailTo      = "$email"; // Destinário do Email
    $mailFrom    = 'marybrudocuras2@gmail.com'; // Remetente do Email
    $mailReplyTo = 'marybrudocuras2@gmail.com';  // Em caso de Resposta enviar pra quem?
    $mailSubject = 'Confirmação de Cadastro';       // Título do Email
    $mailMessage = 'Seu código de confirmação é: '.$cdg;        // Corpo do Email
    
    enviarEmail($mailTo, $mailFrom, $mailReplyTo, $mailSubject, $mailMessage);
    
    // FIM Exemplo de Uso da Função
    
if (enviarEmail($mailTo, $mailFrom, $mailReplyTo, $mailSubject, $mailMessage) == true){

    include_once './class/Cadastro.class.php';
    $usuario = new Usuario( $email, md5($senha), $nome, $telefone);
    $usuario->insert();


} else {

    echo "codigo errado";

}


?>