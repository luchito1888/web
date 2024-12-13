<?php
session_start();

// Verifica si se pasó un ID de producto válido
if (!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])) {
    echo json_encode(["status" => "error", "message" => "ID de producto inválido"]);
    exit;
}

// Captura el ID del producto desde la URL
$id_producto = intval($_GET['id']);

// Inicializa el carrito si no existe en la sesión
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delicious_coffee";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Error de conexión a la base de datos: " . $conn->connect_error]);
    exit;
}

// Consulta para buscar el producto en la base de datos
$sql = "SELECT id, nombre, precio FROM productos WHERE id = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo json_encode(["status" => "error", "message" => "Error en la preparación de la consulta"]);
    exit;
}

$stmt->bind_param("i", $id_producto);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Obtén los datos del producto
    $producto = $result->fetch_assoc();

    // Verifica si el producto ya está en el carrito
    $encontrado = false;
    foreach ($_SESSION['carrito'] as &$item) {
        if ($item['id'] == $producto['id']) {
            $item['cantidad']++; // Incrementa la cantidad si ya existe
            $encontrado = true;
            break;
        }
    }

    // Si no está en el carrito, lo agrega con cantidad inicial 1
    if (!$encontrado) {
        $producto['cantidad'] = 1; // Añadir cantidad de 1
        $_SESSION['carrito'][] = $producto;
    }

    echo json_encode(["status" => "success", "message" => "Producto agregado al carrito"]);
} else {
    echo json_encode(["status" => "error", "message" => "Producto no encontrado"]);
}

// Cierra la conexión
$conn->close();
?>






