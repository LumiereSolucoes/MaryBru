<?php

session_start();
    $email           =  $_REQUEST['email'];
    $senha           =  $_REQUEST['senha'];
    $nome            =  $_REQUEST['nome'];
    $telefone        =  $_REQUEST['telefone'];
    var_dump($nome);

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

    function gerarcode(){
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $max = strlen($caracteres) - 1;
        $code = "";
            for($i=0; $i < 5; $i++) {
                $code .= $caracteres[mt_rand(0, $max)];
            }
       
        return $code;
    }
    
    $cdg=gerarcode();
    $_SESSION['cdg']=$cdg;
    $_SESSION['email'] =$email;        
    $_SESSION['senha'] =$senha;
    $_SESSION['nome']=$nome;           
    $_SESSION['telefone']=$telefone;     

    // INICIO Exemplo de Uso da Função 
    
    $mailTo      = "$email"; // Destinário do Email
    $mailFrom    = 'marybrudocuras2@gmail.com'; // Remetente do Email
    $mailReplyTo = 'marybrudocuras2@gmail.com';  // Em caso de Resposta enviar pra quem?
    $mailSubject = 'Confirmação de Cadastro';       // Título do Email
    $mailMessage = 'Seu código de confirmação é: '.$cdg;        // Corpo do Email
    
    enviarEmail($mailTo, $mailFrom, $mailReplyTo, $mailSubject, $mailMessage);
    
    // FIM Exemplo de Uso da Função
    
if (enviarEmail($mailTo, $mailFrom, $mailReplyTo, $mailSubject, $mailMessage) == true){

    header ('Location: confirmacao.html');

} else {

    echo "email não foi enviado";

}


?>