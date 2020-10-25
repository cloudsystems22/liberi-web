<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "PHPMailer/PHPMailerAutoload.php";

//VARIÁVEIS PARA ENVIO.
$Name = $_POST['name'];
$Email = $_POST['email'];
//$Phone = $_POST['phone'];
$Subject = $_POST['subject'];
$Mesage = $_POST['mensagem'];


// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 
 
// Método de envio 
$mail->IsSMTP(); 
 
// Enviar por SMTP 
$mail->Host = "mail.liberimovil.com.br"; 
//$mail->Host = "n3plcpnl0264.prod.ams3.secureserver.net"

// Porta de saída 
$mail->Port = 587; 
//$mail->Port = 465; 
 
 
// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 
 
// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'cadastro@liberimovil.com.br'; 
$mail->Password = 'Liberi@@qwe45'; 

 
// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
 
// Exibir mensagem. 
//$mail->SMTPDebug = 2; 
 
// Define o remetente 
// Seu e-mail 
$mail->From = "cadastro@liberimovil.com.br";
//$mail->From = $Email;
 
// Seu nome 
$mail->FromName = $Name; 
 
// Define o(s) destinatário(s) 
$mail->AddAddress($Email, $Name);
//$mail->AddAddress('davidfico22@gmail.com', 'Site - Liberi');
//$mail->AddAddress('damiko@mdk.net.br', 'MDK INFORMÁTICA'); 
 
// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 
 
// Opcionais: CC e BCC
// $mail->AddCC('logistica@unioperadora.com.br', 'Site - Liberi'); 
// $mail->AddCC('andre.ribeiro@hellocelular.com.br', 'Site - Liberi');
//$mail->AddBCC('contato@unioperadora.com.br', 'David'); 
$recipients = array(
    'logistica@unioperadora.com.br' => 'Site - Liberi',
    'andre.ribeiro@hellocelular.com.br' => 'Site - Liberi',
    // ..
 );
 foreach($recipients as $email => $name)
 {
    //$mail->AddCC($email, $name);
    $mail->addBCC($email, $name);
 }
 
// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 
 
// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 
 
// Assunto da mensagem 
$mail->Subject = $Subject; 
 
// Corpo do email 
$mail->Body =  "<h3 style='font-family:Arial'>". $Name ."</h3>"
                ."<table style='width:500px; height:70px; font-family:Arial; border:0px'>"
                ."<tr style='background-color:#0a2f59'>"
                ."<td style='width:120px;'>Liberi movil</td>"
                ."<td style='width:380px'><h3 style='font-family:Arial; color:white; text-align:center'>Email site - ".$Subject ."</h3></td></tr></table>"
                ."<tr><td style='width:120px;'>Nome:</td><td style='width:380px'>". $Name ."</td></tr>"
                ."<tr><td style='width:120px;'>Email:</td><td style='width:380px'>". $Email ."</td></tr>"
                ."<tr><td style='width:120px;'>Mensagem:</td><td style='width:380px'>". $Mesage ."</td></tr>";
 
// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail 
$enviado = $mail->Send(); 

 
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso!</title>
    <link rel="stylesheet" href="css/sucesso.css">
</head>
<body>

    <div id='sucesso'>
        <div class="div-sucesso">
            <h1>Sucesso!</h1>
            <h2>Seu contato foi recebido!</h2>
        </div>
        <div class="cadastro-logo">
            <h1><span id='logo-left'>Liberi</span><span id='logo-right'>móvil</span></h1>
        </div>
        <div class="div-dados">
            <p><span class="nome"><?php $_POST['name']; ?></span></p>
            <p><span class="email"><?php $_POST['email']; ?></span></p>

        </div>
    </div>
    
</body>
</html>
 
<?php
    //echo "Seu email foi enviado com sucesso!"; 
    echo "<meta http-equiv='refresh' content='10;URL=index.php'>";
} else { 
    ?>

        <?php
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 