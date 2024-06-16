<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../../PHPMailer-master/src/Exception.php';
require '../../../PHPMailer-master/src/PHPMailer.php';
require '../../../PHPMailer-master/src/SMTP.php';

$subject = $_POST["subject"];
$content = $_POST["content"];
$content = nl2br($content); 

$link = @mysqli_connect('localhost','root','','mailer');  
if (!$link) {
    die("資料庫無法開啟<br>");
}  

$SQL = "SELECT * FROM  mailer";
$result = mysqli_query($link, $SQL);
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = false;        
    $mail->isSMTP(); 
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true; 
    $mail->Username   = 'a1113324@mail.nuk.edu.tw';
    $mail->Password   = 'jbun gkez nlxn hgil';    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port       = 465; 
    >CharSet    = 'utf-8';   ENCRYPTION_STARTTLS

    $mail->setFrom('a1113324@mail.nuk.edu.tw', 'Mailer');
    $mail->addReplyTo('a1101224@mail.nuk.edu.tw', 'Information');
    while($row = mysqli_fetch_assoc($result)) {
        $email = $row["Email"];
        $mail->isHTML(true); 
        $mail->addAddress($email, 'Recipient');     
        $mail->Subject = $subject;     
        $mail->Body    = $content;
        $mail->send();
        $mail->clearAddresses();
    }
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}