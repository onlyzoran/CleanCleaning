<?php 

include 'mailconfig.php';

require_once('phpmailer/PHPMailerAutoload.php');

$phone = $_POST['phone'];

$mail->Subject = 'Заявка с сайта Clean Cleaning';
$mail->Body    = 'Телефон: +7 '.$phone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>