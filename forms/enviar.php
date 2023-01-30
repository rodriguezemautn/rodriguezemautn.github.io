<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Cabeceras del correo
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: ' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";

    // Contenido del correo
    $contenido = '<html><body>';
    $contenido .= '<h1>Mensaje de mi sitio web</h1>';
    $contenido .= '<p><b>Nombre:</b> ' . $name . '</p>';
    $contenido .= '<p><b>Email:</b> ' . $email . '</p>';
    $contenido .= '<p><b>Asunto:</b> ' . $subject . '</p>';
    $contenido .= '<p><b>Mensaje:</b> ' . $message . '</p>';
    $contenido .= '</body></html>';

    $destinatario = "emanuelrodriguez644@gmail.com";
    $asunto = "Mensaje desde mi cv/contactos";

    if (mail($destinatario, $asunto, $contenido, $headers)) {
        // Si el correo se envía correctamente
        header("Location:mensaje-de-envio.html");
    } else {
        // Si el correo no se puede enviar
        echo "Error al enviar el correo";
    }
?>