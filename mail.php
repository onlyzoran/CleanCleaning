<?php 

include 'mailconfig.php';

require_once('phpmailer/PHPMailerAutoload.php');

$room = $_POST['room'];
$bathroom = $_POST['bathroom'];
$phone = $_POST['phone'];

$mail->Subject = 'Заявка с сайта Clean Cleaning';
$mail->Body    = 'Телефон: +7 '.$phone.'<br>'.$room.'<br>'.$bathroom;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>