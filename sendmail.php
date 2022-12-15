<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require("vendor/autoload.php");
require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("vendor/phpmailer/phpmailer/src/SMTP.php");
require("vendor/phpmailer/phpmailer/src/Exception.php");
require_once "smtp-conection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

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


$mail->From ='contacto@ibalenciaga.info';
$mail->FromName = 'Portfolio';
$mail->addAddress("ibalenciaga@gmail.com");
$mail->Subject = "Contacto desde mi portfolio";
$mail->Body = "<b>Mensaje con código HTML</b>";
$mail->AltBody = "Este es el texto para clientes de correo que no muestren HTML";

if (!$mail->send()) {
    $msg = 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $msg = 'Message sent!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PHPMailer</title>
</head>
<body>
<h1>Contact us</h1>
<?php
echo $msg;
?>
</body>
</html>