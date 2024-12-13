<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "delicious_coffee"; // Nombre de la base de datos


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificamos si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener ventas por año
$sql = "SELECT YEAR(v.fecha_venta) AS año, p.nombre AS producto, SUM(v.monto) AS total_ventas
        FROM ventas v
        JOIN productos p ON v.id = p.id  
        GROUP BY YEAR(v.fecha_venta), p.nombre
        ORDER BY año DESC";

// Ejecutar la consulta
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los resultados
    echo "<h3>Ventas por Año</h3>";
    echo "<table border='1'>
            <tr>
                <th>Año</th>
                <th>Producto</th>
                <th>Total Ventas</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['año'] . "</td>
                <td>" . $row['producto'] . "</td>
                <td>" . number_format($row['total_ventas'], 2) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron ventas.";
}

// Cerrar la conexión
$conn->close();
?>