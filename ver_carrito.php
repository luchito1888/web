<?php
session_start();

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delicious_coffee";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verifica si el carrito existe en la sesión
$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="tabla.css">
</head>
<body>
    <div class="carrito-container">
        <table class="tabla-carrito">
            <thead>
                <tr>

                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Stock</th>
                    <th>Total</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $subtotal = 0;

                foreach ($carrito as $item) {
                    // Consulta a la base de datos para obtener datos actualizados del producto
                    $sql = "SELECT id, nombre, precio, imagen, stock FROM productos WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $item['id']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $producto = $result->fetch_assoc();

                    // Calcula el total por producto
                    $cantidad = $item['cantidad'];
                    $total_producto = $producto['precio'] * $cantidad;
                    $subtotal += $total_producto;

                    echo "<tr>
                        
                        <td>{$producto['nombre']}</td>
                        <td>\${$producto['precio']}</td>
                        <td>
                            <div class='cantidad'>
                                <button class='btn-menos' onclick='actualizarCantidad({$producto['id']}, -1)'>-</button>
                                <input type='text' value='{$cantidad}' readonly>
                                <button class='btn-mas' onclick='actualizarCantidad({$producto['id']}, 1)'>+</button>
                            </div>
                        </td>
                        <td>{$producto['stock']}</td>
                        <td>\${$total_producto}</td>
                        <td>
                            <button class='btn-eliminar' onclick='eliminarProducto({$producto['id']})'>🗑️</button>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="totales">
            <h3>Totales del carrito</h3>
            <p>Subtotal: S/ <?php echo $subtotal; ?></p>
            <p>Total: S/ <?php echo $subtotal; ?></p>
            <button class="btn-comprar">Pasar por la caja</button>
        </div>
    </div>

    <script>
        // Función para actualizar la cantidad de productos
        function actualizarCantidad(id, cambio) {
            // Implementar lógica para enviar datos al servidor y actualizar la sesión
            console.log("Actualizar cantidad del producto con ID " + id + " con cambio " + cambio);
        }

        function eliminarProducto(id) {
        if (confirm("¿Estás seguro de que deseas eliminar este producto del carrito?")) {
        // Crear una solicitud AJAX
        fetch('eliminar_producto2.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `id=${id}`
        })
        .then(response => response.text())
        .then(data => {
            alert("Producto eliminado del carrito.");
            location.reload(); // Recargar la página para actualizar el carrito
        })
        .catch(error => {
            console.error('Error al eliminar el producto:', error);
            alert("Hubo un error al intentar eliminar el producto.");
        });
    }
}
    </script>
</body>
</html>
