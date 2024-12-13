<?php
session_start();

// Suponiendo que el carrito se guarda en la sesión
if (isset($_SESSION['carrito'])) {
    echo json_encode([
        'status' => 'success',
        'carrito' => $_SESSION['carrito'] // Aquí los productos del carrito
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Carrito vacío'
    ]);
}
?>




