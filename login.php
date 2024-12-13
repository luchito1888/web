<?php
include 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $contraseña = $_POST['contraseña'] ?? '';

    // Verificar que los campos no estén vacíos
    if (empty($nombre) || empty($contraseña)) {
        echo "Por favor, completa todos los campos.";
        exit; // Detener la ejecución si hay campos vacíos
    }

    // Verificar si el usuario existe
    $sql = "SELECT * FROM usuarios WHERE nombre=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($contraseña, $row['contraseña'])) {
            // Establecer variables de sesión
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['rol'] = $row['rol'];

            // Redirigir según el rol
            if ($row['rol'] == 'admin') {
                header("Location: admin_dashboard.php");
            } else {
                header("Location: user_dashboard.php");
            }
            exit; // Asegúrate de salir después de redirigir
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>

