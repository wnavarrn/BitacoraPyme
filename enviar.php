<?php
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$mail = $_POST['txtMail'];
$empresa = $_POST['txtMensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre .' '. $apellido . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['txtMensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'walter.navarrete@outlook.com,nestor.lombardo@bitacorapyme.com,stella.ballestero@bitacorapyme.com';
$asunto = 'Mensaje desde mi sitio www.bitacorapyme.com';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>