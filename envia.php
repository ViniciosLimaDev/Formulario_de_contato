<?php

// Importar classes PHPMailer para o namespace global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Carrega o autoloader do Composer
require './vendor/autoload.php';

//validando as informações para depois enviar.
if (isset($_POST['nome'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $telefone = $_POST['telefone'];
    // Cria uma instância; passar `true` permite exceções
    $mail = new PHPMailer(true);


    try {

        // configurações do servidor
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'viniciis404@gmail.com';
        $mail->Password   = 'Veltra45';
        $mail->SMTPSecure = 'tsl';
        $mail->Port       = 587;

        // destinatários
        $mail->setFrom('viniciis404@gmail.com', 'formulario de contato');
        $mail->addAddress('vini-1213@hotmail.com', 'vinicios');    //destinatario

        //Conteúdo
        $mail->isHTML(true);
        $mail->Subject = 'Formulario de contato'; // Titulo do email
        $mail->Body    = '<h1></h1>' . "Nome: " .  $nome . "<br>" . "E-mail: " . $email . "<br>" . "Idade: " . $idade  . "<br>" . "Telefone: " . $telefone;

        //intanciando envio do email
        $mail->send();


        echo 'email enviando com sucesso';
    } catch (Exception $e) {
        echo " Error:";
    }
}
