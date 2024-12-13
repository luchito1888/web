<?php
session_start();

// Verificar si se recibió el ID del producto
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Verificar si el carrito existe y si el producto está en él
    if (isset($_SESSION['carrito'][$id])) {
        // Eliminar el producto del carrito
        unset($_SESSION['carrito'][$id]);

        // Calcular el nuevo subtotal
        $subtotal = 0;
        foreach ($_SESSION['carrito'] as $item) {
            $subtotal += $item['precio'] * $item['cantidad'];
        }

        // Devolver los productos restantes y el nuevo subtotal
        $productos = $_SESSION['carrito']; // Todos los productos actuales en el carrito
        echo json_encode([
            'success' => true,
            'productos' => $productos,
            'subtotal' => number_format($subtotal, 2)
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Producto no encontrado en el carrito.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'ID no válido.']);
}
?>
