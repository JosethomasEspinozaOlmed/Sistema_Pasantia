
<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $correo, $mensaje);
$stmt->execute();
$stmt->close();
$conn->close();

echo "Mensaje enviado correctamente.";
?>
