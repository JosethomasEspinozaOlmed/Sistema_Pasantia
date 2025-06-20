<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $mensaje);

    if ($stmt->execute()) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }

    $stmt->close();
    $conn->close();
}
?>
