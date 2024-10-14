<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir el nombre enviado desde el formulario
    $nombre = htmlspecialchars($_POST['nombre']);

    // Mostrar un saludo personalizado
    echo "¡Hola, " . $nombre . "! Bienvenido a nuestro sitio web.";
}
?>
