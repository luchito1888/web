<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "delicious_coffee"; // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id_producto = $_GET['id']; // Recibir el ID del producto desde la URL

$sql = "SELECT nombre, descripcion, precio, stock FROM productos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_producto);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["error" => "Producto no encontrado"]);
}

$conn->close();
?>