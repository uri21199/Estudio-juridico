<?php
    $destinatario = 'estudiomaiorano@hotmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde nuestro sitio web";

    $mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre;
    
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Mensaje enviado correctamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?> 