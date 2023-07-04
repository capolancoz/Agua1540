<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $dni_ruc = $_POST['dni_ruc'];
    $mensaje = $_POST['mensaje'];

    $to = 'capolancoz@gmail.com'; // Cambia esta dirección de correo electrónico por tu dirección de correo electrónico.
    $subject = 'Nuevo formulario de contacto';
    $message = "Nombre: $nombre\nApellido: $apellido\nTeléfono: $telefono\nCorreo Electrónico: $email\nDNI o RUC: $dni_ruc\nMensaje: $mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Error al enviar el mensaje. Por favor, intenta nuevamente más tarde.";
    }
}
?>