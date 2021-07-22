<?php

session_start();

$botao = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);

if($botao){

    
    $para = "thiagodevmobile@gmail.com";
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $subject = "Site";
    $message = $_POST['texto'];

    $mensagem = "Nome: $name<br>";
    $mensagem .= "Email: $email<br>";
    $mensagem .= "Celular: $celular<br>";
    $mensagem .= "Assunto: $subject<br>";
    $mensagem .= "Mensagem: $message<br>";

    
    
    $headers = 'From: '.$email."\r\n". 'Reply-To: '.$email."\r\n";
    
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($para, $subject, $mensagem, $headers)){
        $_SESSION['mensagem'] = "<script>Swal.fire(
            '',
            'Enviado Com Sucesso !',
            'success'
        )

        </script>";
        header("Location: faleconosco.php");
    
    }
    else{
        $_SESSION['mensagem'] = "<script>Swal.fire({
            type: 'error',
            title: 'Falha Ao Enviar ',
            text: 'Tente Novamente Mais Tarde ! ',
            footer: ''
          })
         
          </script>";
          header("Location: faleconosco.php");
    }
}
    

?>