<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';
require_once "smtp-conection.php";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    require("PHPMailer-master/class.phpmailer.php");
    require("PHPMailer-master/class.smtp.php");

    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->isHTML(true);

    $smtp_connection = new smtpConection();
    $mail->Host = $smtp_connection->host;
    $mail->Username = $smtp_connection->username;
    $mail->Password = $smtp_connection->password;
    $mail->From = $smtp_connection->from;

    $mail->FromName = "El nombre de remitente que queremos que aparezca";

    $mail->AddAddress("contact@ibalenciaga.info");

    $mail->Subject = "Contacto desde mi portfolio";

    $nombre = (string)$_POST['nombre'];
    $email = (string)$_POST['email'];
    $asunto = (string)$_POST['asunto'];
    $mensaje = (string)$_POST['mensaje'];
    $body = "<p>Nombre:  $nombre </p>";
    $body .= "<p>Email: $email </p>";
    $body .= "<p>Asunto: $asunto </p>";
    $body .= "<p>Mensaje: $mensaje</p>";

    $mail->Body = $body;
    $mail->AltBody = "Este es el texto para clientes de correo que no muestren HTML";

    $mail->Send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>

<?php
/*
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
    $headers .= "From:" . $from;
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['result' => true]);
    } else {
        echo json_encode(['result' => false]);
    }
    exit;
}
*/
?>