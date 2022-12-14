<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) ); //Aquí se genera un control de errores "NO BORRAR NI SUSTITUIR"

if (isset($_POST['email'])) {
    // ...geting data
    $to = 'ibalenciaga@ibalenciaga.info, contacto@ibalenciaga.info';
    $from = 'contacto@ibalenciaga.info';

    $subject = 'Correo desde portfolio';

    $nombre = (string)$_POST['nombre'];
    $email = (string)$_POST['email'];
    $asunto = (string)$_POST['asunto'];
    $mensaje = (string)$_POST['mensaje'];
    $body = "Nombre: " . $nombre . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Asunto: " . $asunto . "\n";
    $body .= "Mensaje: " . $mensaje;
    $headers = "MIME-Version: 1.0 Content-type: text/html; charset=iso-8859-1";
    // More headers
    $headers .= 'From: <contacto@ibalenciaga.info>';
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['result' => true]);
    } else {
        echo json_encode(['result' => false]);
    }
    exit;
}
?>