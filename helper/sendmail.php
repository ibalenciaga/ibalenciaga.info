<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


require("../vendor/autoload.php");
require("../vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("../vendor/phpmailer/phpmailer/src/SMTP.php");
require("../vendor/phpmailer/phpmailer/src/Exception.php");
require_once "smtp-connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg_subject = $_POST['msg_subject'];
    $message = $_POST['message'];
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    //para poder ver mensajes de errores:
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->isHTML(true);

    $smtp_connection = new smtpConection();
    $mail->Host = $smtp_connection->host;
    $mail->Username = $smtp_connection->username;
    $mail->Password = $smtp_connection->password;

    $mail->From = 'contacto@ibalenciaga.info';
    $mail->FromName = 'Portfolio';
    $mail->addAddress("ibalenciaga@gmail.com");
    $mail->Subject = "Contacto desde mi portfolio";
    $mail->Body = "<p>Nombre: $name</p>";
    $mail->Body .= "<p>Email: $email</p>";
    $mail->Body .= "<p>Asunto: $msg_subject</p>";
    $mail->Body .= "<p>Mensaje: $message</p>";
    $mail->AltBody = "Nombre: $name";
    $mail->AltBody .= "Email: $email";
    $mail->AltBody .= "Asunto: $msg_subject";
    $mail->AltBody .= "Mensaje: $message";

    if($mail->send())
        $response = "success";
    else
        $response = "error";

    echo $response;
}
?>