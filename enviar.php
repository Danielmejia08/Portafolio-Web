<?php

if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['phone']) && !empty($_POST['message'])){
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $header  = "From: salvadorcartajena@hotmail.com". "\r\n";
        $header.= "Reply-to: salvadorcartajena@hotmail.com". " \r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        mail($mail, $name, $message, $header);
        if($mail){
            echo "<h4> Mail enviado con exito </h4>";
        }
    }
}
?>