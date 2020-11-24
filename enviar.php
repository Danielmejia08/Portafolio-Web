<?php

//En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
$destino = "guillermohdloco@gmail.com";
$nombre = $_POST["nombre"];
// $apellido = $_POST["apellido"];
$email = $_POST["email"];
$numero = $_POST["numero"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nNúmero: " . $numero . "\nAsunto: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location: index.html");
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar

// $name = $_POST['name'];
// $mail = $_POST['mail'];
// $phone = $_POST['phone'];
// $message = $_POST['message'];

// $header = 'From: ' . $mail . " \r\n";
// $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
// $header .= "Mime-Version: 1.0 \r\n";
// $header .= "Content-Type: text/plain";

// $message = "Este mensaje fue enviado por: " . $name . " \r\n";
// $message .= "Su e-mail es: " . $mail . " \r\n";
// $message .= "Teléfono de contacto: " . $phone . " \r\n";
// $message .= "Mensaje: " . $_POST['message'] . " \r\n";
// $message .= "Enviado el: " . date('d/m/Y', time());

// $para = 'guillermohdloco@gmail.com';
// $asunto = 'Mensaje de Usuario';

// mail($para, $asunto, utf8_decode($message), $header);

// header("Location:contacto.html");
?>