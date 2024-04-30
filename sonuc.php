<?php
header("Content-Type:text/html; chatset =UTF-8");/*utf-8 genel olarak kullanılan karakter setidir */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'w PHPMailer/src/SMTP.php';


function Filtrele($Deger){ //güvenlik için önemli bir func
    $IslemBir   = trim($Deger);
    $IslemIki   =strip_tags($IslemBir);   //tagları temizledi
    $IslemUc    =htmlspecialchars($IslemIki, END_QUOTES);
    $Sonuc      =$IslemUc;
        return $Sonuc;
}

$GelenIsimSoyisim    = Filtrele($_POST["adisoyadi"]);
$GelenTelefon        = Filtrele($_POST["telefon"]);
$GelenEmail          = Filtrele($_POST["email"]);
$GelenKonu           = Filtrele($_POST["konusu"]);
$GelenMesaj          = Filtrele($_POST["mesaj"]);






$MailGonder = new PHPMailer(true); 
try {
    //sunucu ayarları
    $MailGonder->SMTPDebug        = 0;    //2 dediğimiz için çıktıları bize verir 0 dersek kapatır
    $MailGonder->isSMTP(); 
    $MailGonder->Host             = 'mail.extraegitim.net';                     //Set the SMTP server to send through
    $MailGonder->SMTPAuth         = true;                                   //Enable SMTP authentication
    $MailGonder->CharSet          = 'UTF-8';
    $MailGonder->Username         = 'sevval123';                      //SMTP username
    $MailGonder->Password         = 'SEvval80';                               //SMTP password
    $MailGonder->SMTPSecure       = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $MailGonder->Port             = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $MailGonder->SMTPOptions      =  array(
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false;
            'verify_depth' => 3,
            'allow_self_signed' => true,
            'peer_name' => 'smtp.example.com',
            'cafile' => '/etc/ssl/ca_cert.pem',
        ],
    );
    //Recipients
    $MailGonder->setFrom('sevvaloveyik@gmail.com','Extra Eğitim');
    $MailGonder->addAddress('sevvaloveyik@gmail.com','Extra Eğitim');     //Add a recipient kime gidecek bu mail
    $MailGonder->addReplyTo($GelenEmail , $GelenIsimSoyisim); //yanıtlama maili
    $MailGonder->addCC('cc@example.com');      //mail
    $MailGonder->addBCC('bcc@example.com');

    
    //Content
    $MailGonder->isHTML(true);                                  //Set email format to HTML
    $MailGonder->Subject = $GelenKonu; 
    $MailGonder->MsgHTML($GelenMesaj);    
    
    //$MailGonder->Body    = 'mailin gövdesi';
    //$MailGonder->AltBody = 'html içerikli metin okunamıyorsa txt selinde kullanılır ama buna cok gerek yok';

    $MailGonder->send();
    echo 'Mail gönderildi';






} 

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$MailGonder->ErrorInfo}";
}


?>
