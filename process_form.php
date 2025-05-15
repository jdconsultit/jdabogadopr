<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "jjimenez@jdconsultit.com"; // Reemplaza con tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto";
    $cuerpo = "Nombre: " . $nombre . "\nEmail: " . $email . "\nMensaje: " . $mensaje;
    $encabezados = "From: tu_sitio@example.com"; // Reemplaza con tu dominio

    if (mail($destinatario, $asunto, $cuerpo, $encabezados)) {
        echo "¡Mensaje enviado con éxito!"; // Esto no se mostrará en la página, se usa para depuración
    } else {
        echo "Error al enviar el mensaje."; // Esto tampoco se mostrará en la página
    }
}
?>
