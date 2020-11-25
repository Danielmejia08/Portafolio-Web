<?php

if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $header  = "From: guillermohdloco@gmail.com". "\r\n";
        $header.= "Reply-to: guillermohdloco@gmail.com". " \r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail($email, $name, $message, $header);
        if($mail){
            echo "<h4> Mail enviado con exito </h4>";
        }
    }
}
?>