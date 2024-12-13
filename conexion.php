<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "delicious_coffee"; // Nombre de la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} //else {
   // echo "Conexión exitosa";
//}
$conn->set_charset("utf8");
?>
