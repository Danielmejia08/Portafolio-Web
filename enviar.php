<?php

$destino = "guillermohdloco@gmail.com";
$nombre = $_POST["name"];
$email = $_POST["mail"];
$telefono = $_POST["phone"];
$mensaje = $_POST["message"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino,"Contacto",$contenido);
header("Location:index.html");


// if (isset($_POST['enviar'])){
//     if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['phone']) && !empty($_POST['message'])){
//         $name = $_POST['name'];
//         $email = $_POST['mail'];
//         $phone = $_POST['phone'];
//         $message = $_POST['message'];
//         $header  = "From: salvadorcartajena@hotmail.com". "\r\n";
//         $header.= "Reply-to: salvadorcartajena@hotmail.com". " \r\n";
//         $header.= "X-Mailer: PHP/" . phpversion();
//         $mail = mail($email, $name, $message, $header);
//         if($mail){
//             echo "<h4> Mail enviado con exito </h4>";
//         }
//     }
// }
?>