<?php

use \PHPMailer\PHPMailer\PHPMailer; 
use \PHPMailer\PHPMailer\SMTP;
use \PHPMailer\PHPMailer\Exception;

require('./PHPMailer.php');
require('./SMTP.php');
require('./Exception.php');

//validando as informações pra depois enviar.
if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $telefone = $_POST['telefone'];

try{

// Instância do objeto PHPMailer
$mail = new PHPMailer;
 
// Configura para envio de e-mails usando SMTP
$mail->isSMTP();
 
// Servidor SMTP
$mail->Host = 'smtp.gmail.com';
 
// Usar autenticação SMTP
$mail->SMTPAuth = true;
 
// Usuário da conta
$mail->Username = 'guialamino16@gmail.com';
 
// Senha da conta
$mail->Password = 'Guilherme100%';
 
// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';
 
// Porta do servidor SMTP
$mail->Port = 465;
 
// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);
 
// Email do Remetente
$mail->From = 'marcos@neonet.com.br';
 
// Nome do Remetente
$mail->FromName = 'Formulario de Contato';
 
// Endereço do e-mail do destinatário
$mail->addAddress('marcos@neonet.com.br');
 
// Assunto do e-mail
$mail->Subject = 'E-mail com PHPMailer / Formulario de Contato';
 
// Mensagem que vai no corpo do e-mail
$mail->Body = '<h1>Mensagem enviada via PHPMailer</h1>' . "Nome Contato: " .  $nome . "<br>" . "E-mail Contato: " . $email . "<br>" . "Idade Contato: " . $idade  . "<br>" . "Telefone Contato: " . $telefone;
 

// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;

} catch (Exception $e) {

echo "A mensagem não pôde ser enviada. Erro do Mailer: {$mail-> ErrorInfo}";
} 
}else{
    echo "Erro ao validar";
}
?>