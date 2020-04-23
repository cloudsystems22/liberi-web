<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "PHPMailer/PHPMailerAutoload.php";

//VARIÁVEIS PARA ENVIO.
$Name = $_POST['name'];
$RG = $_POST['rg'];
$CPF = $_POST['cpf'];
$Genero = $_POST['genero'];
$CEP = $_POST['cep'];
$Endereco = $_POST['endereco'];
$Bairro = $_POST['bairro'];
$Cidade = $_POST['cidade'];
$Estado = $_POST['estado'];
$Email = $_POST['email'];
$Phone = $_POST['telefone'];
$Concordo = $_POST['condcontrat'];
$Promo = $_POST['recedpromo'];
$Operadora = $_POST['operadora'];
//$Subject = $_POST['subject'];
$Subject = 'Cadastro site Liberi - Plano';
//$Mesage = $_POST['mensagem'];


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
$mail->Username = 'test@liberimovil.com.br'; 
$mail->Password = 'liberi$movil$br$20'; 

// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

// Exibir mensagem. 
//$mail->SMTPDebug = 2; 

// Define o remetente 
// Seu e-mail 
$mail->From = "test@liberimovil.com.br";
//$mail->From = $Email;

// Seu nome 
$mail->FromName = $Name; 

// Define o(s) destinatário(s) 
$mail->AddAddress('contato@liberimovil.com.br', 'Site - Liberi'); 
//$mail ->AddAddress('davidfico22@gmail.com', 'David Fico');

// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 

// Opcionais: CC e BCC
$mail->AddCC('logistica@unioperadora.com.br', 'Site - Liberi'); 
//$mail->AddBCC('davidfico22@gmail.com', 'David'); 

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
."<td style='width:380px'><h3 style='font-family:Arial; color:white; text-align:center'>Cadastro enviado site liberi</h3></td></tr></table>"
."<tr><td style='width:120px;'>Nome:</td><td style='width:380px'>". $Name ."</td></tr>"
."<tr><td style='width:120px;'>Genero:</td><td style='width:380px'>". $Genero ."</td></tr>"
."<tr><td style='width:120px;'>Email:</td><td style='width:380px'>". $Email ."</td></tr>"
."<tr><td style='width:120px;'>Fone:</td><td style='width:380px'>". $Phone ."</td></tr>"
."<tr><td style='width:120px;'>Operadora:</td><td style='width:380px'>". $Operadora ."</td></tr>"
."<tr><td style='width:120px;'>CEP:</td><td style='width:380px'>". $CEP ."</td></tr>"
."<tr><td style='width:120px;'>End:</td><td style='width:380px'>". $Endereco ."</td></tr>"
."<tr><td style='width:120px;'>Bairro:</td><td style='width:380px'>". $Bairro ."</td></tr>"
."<tr><td style='width:120px;'>Cidade:</td><td style='width:380px'>". $Cidade ."</td></tr>"
."<tr><td style='width:120px;'>Estado:</td><td style='width:380px'>". $Estado ."</td></tr>"
."<tr><td style='width:120px;'>Termo Aceito:</td><td style='width:380px'>". $Concordo ."</td></tr>"
."<tr><td style='width:120px;'>Env. Msg:</td><td style='width:380px'>". $Promo ."</td></tr>";
                


//Arquiva documento
//$Arquivo = filter_input(INPUT_POST, 'arquivo', FILTER_SANITIZE_STRING);

$nome_arquivo = $_FILES['arquivo']['name'];
$tipo_arquivo = $_FILES['arquivo']['type'];
//var_dump($_FILES['arquivo']);
$diretorio = 'imgdocs/';
if($tipo_arquivo == 'image/png' || $tipo_arquivo == 'image/jpg'){
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$nome_arquivo);         
    // Opcional: Anexos 
    $mail->AddAttachment("http://www.liberimovil.com.br/".$diretorio.$nome_arquivo, $mome_arquivo); 

}
                
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
            <h2>Seu cadastro foi recebido!</h2>
        </div>
        <div class="cadastro-logo">
            <h1><span id='logo-left'>Liberi</span><span id='logo-right'>móvil</span></h1>
        </div>
        <div class="div-dados">
        <p><span class="nome"><?php $Name; ?></span></p>
            <p><span class="email"><?php $Email; ?></span></p>

        </div>
    </div>
    
</body>
</html>
<?php
    echo "Seu cadastro foi enviado com sucesso! ". $Name; 
    echo "<meta http-equiv='refresh' content='10;URL=index.php'>";
} else { 
    ?>

        <?php
    echo "Houve um erro no envio do cadastro: ".$mail->ErrorInfo; 
} 