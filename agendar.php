<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $socio = $_POST['socio'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO turnos (nombre, socio, fecha, hora, comentario) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $socio, $fecha, $hora, $comentario);

    if ($stmt->execute()) {
        echo "Turno agendado correctamente.";
    } else {
        echo "Error al agendar el turno.";
    }

    $stmt->close();
    $conn->close();
}
?>
