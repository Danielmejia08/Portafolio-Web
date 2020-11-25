<?php

$destino = "raudamejia2014@hotmail.com";
$nombre = $_POST["name"];
$email = $_POST["mail"];
$telefono = $_POST["phone"];
$mensaje = $_POST["message"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino,"Contacto",$contenido);
header("Location:index.html");

?>