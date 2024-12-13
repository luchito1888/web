<?php
include 'conexion.php';

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'] ?? '';
    $contraseña = $_POST['contraseña'] ?? '';
    $confirmar_contraseña = $_POST['confirmar_contraseña'] ?? '';
    $rol = $_POST['rol'] ?? '';

    // Validar que todos los campos estén llenos
    if (empty($nombre) || empty($contraseña) || empty($confirmar_contraseña) || empty($rol)) {
        die("Por favor, completa todos los campos.");
    }

    // Verificar que las contraseñas coincidan
    if ($contraseña !== $confirmar_contraseña) {
        die("Las contraseñas no coinciden.");
    }

    // Hash de la contraseña
    $contraseña_hash = password_hash($contraseña, PASSWORD_BCRYPT);

    // Consulta para insertar el usuario en la base de datos
    $sql = "INSERT INTO usuarios (nombre, contraseña, rol) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $contraseña_hash, $rol);

    // Ejecutar la consulta y verificar el resultado
    if ($stmt->execute()) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
