<?php
//Links importantes para crear contraseña de aplicacionde la cuenta de google
//Primer link https://support.google.com/mail/answer/185833?hl=es-419
//Segun link https://myaccount.google.com/apppasswords?pli=1&rapt=AEjHL4M8kKaO_PBucwrpOCqhCtnip9oa4HDWyU6s91Yo4XCLAzxZ1O8iWu6tgv3m4ngpO-MISBD_sFRtf2O0Du0g8Ed_a87yn4E8xhqpkZKedToqcCrdK9U     (Creas la contraseña de la aplicacion )
//En cuenta -> seguridad -> activar Navegacion segura mejorada para tu cuenta

// Configuración y carga de librerías
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../phpmailer/Exception.php';
require '../../phpmailer/PHPMailer.php';
require '../../phpmailer/SMTP.php';

include("../../config/conexcion.php");

// Verifica si el formulario ha sido enviado
if (!empty($_POST["email"])) {
    $email = $conexion->real_escape_string($_POST["email"]);

    // Consulta para obtener el correo electrónico y el token del usuario específico
    $sql = $conexion->query("SELECT email, reset_token FROM registro_usuario WHERE email ='$email'");

    if ($data = $sql->fetch_object()) {
        $destinatario = $data->email;

        // Crear una instancia de PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP
            $mail->SMTPDebug = 0; // Habilitar salida de depuración
            $mail->isSMTP(); // Usar SMTP
            $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
            $mail->SMTPAuth = true; // Habilitar autenticación SMTP
            $mail->Username = 'erik61869@gmail.com'; // Usuario SMTP
            $mail->Password = 'xsus ihhw htpo hlbv'; // Contraseña de aplicación SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Habilitar cifrado TLS implícito
            $mail->Port = 465; // Puerto TCP

            // Configuración del remitente y destinatario
            $mail->setFrom('erik61869@gmail.com', 'Erik');
            $mail->addAddress($destinatario);

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'Recuperación de Contraseña';
            $mail->Body = " <html>
             <head>
                 <title>Recuperación de Contraseña</title>
             </head>
             <body>
             <p>Hola,</p>
             <p>Hemos recibido una solicitud para restablecer tu contraseña. Si no realizaste esta solicitud, por favor ignora este correo electrónico. De lo contrario, haz clic en el enlace a continuación para restablecer tu contraseña:</p>
             <p><a href='http://localhost/los-hermanos/mvc/views/reset_password.php?token={$data->reset_token}'>Restablecer Contraseña</a></p>
             <p>Si tienes algún problema, por favor contacta con nuestro soporte técnico.</p>
             <p>Gracias,</p>
             <p>Equipo de Soporte</p>
             </body>
             </html>";

            // Enviar el correo
            $mail->send();
            echo 'El mensaje se envió correctamente. Revisa tu correo electrónico.';
        } catch (Exception $e) {
            echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
        }
    } else {
        echo "<div><h2>El correo no está registrado</h2></div>";
    }
} else {
    echo "<div><h2>No se ha proporcionado un correo electrónico</h2></div>";
}
