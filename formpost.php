<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $formcontent="Nombre: $nombre \n E-mail: $email \n Asunto: $asunto \n Mensaje: $mensaje";
    $para = "mkjofre@gmail.com";
    $subject = "Consulta por el sitio web de Angel Pelletán";
    $header = "From: $email \r\n";
    $header .= "Content-Type: text/plain; charset=UTF-8";
    mail($para, $subject, $formcontent, utf8_decode($mensaje), $header) or die("Error!");
    header("Location: index.html");
?>