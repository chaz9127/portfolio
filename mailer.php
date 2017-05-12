<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$mail = new PHPMailer;

$mail->isSMTP();
$mail->isHTML(true);
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'personal.portfolio.cj@gmail.com';
$mail->Password = 'plz_dont_steal';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($email, $name);
$mail->addAddress('chasanid@gmail.com');
$mail->Subject = "Portfolio Contact - {$name}";
$mail->Body    = "<strong>Who:</strong> {$name} <br><br> <strong>Phone:</strong> {$phone} <br><br> <strong>Message:</strong> {$message}";

$mail->send();

header('Location: /');
?>
