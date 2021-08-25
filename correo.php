<?php
    $destinatario = 'josue4074@gmail.com';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $header = "Prueba de envio de correo."
    $mensajeCompleto = $mensaje. "\nAtentamente: " . $nombre

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>