<?php
// $destino = "salvadorcartajena@hotmail.com";
// $email = $_POST["mail"];
// $numero = $_POST["phone"];
// $mensaje = $_POST["message"];
// $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nNúmero: " . $numero . "\nAsunto: " . $mensaje;
// mail($destino, "Contacto", $contenido);

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'salvadorcartajena@hotmail.com';
$asunto = 'Mensaje de Usuario';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>