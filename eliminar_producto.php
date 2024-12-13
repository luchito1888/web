<?php
include 'conexion.php';

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$producto = null; // Variable para almacenar los datos del producto
$mensaje = "";

// Manejar la solicitud para buscar un producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buscar'])) {
    // Obtener el ID del producto
    $id_producto = $_POST['id']; // Campo para el ID del producto
    
    // Consulta SQL para buscar el producto por ID
    $sql = "SELECT * FROM productos WHERE id = '$id_producto'";
    $resultado = $conn->query($sql);
    
    // Verificar si se encontró el producto
    if ($resultado->num_rows > 0) {
        $producto = $resultado->fetch_assoc(); // Almacenar los datos del producto
    } else {
        $mensaje = "Producto no encontrado.";
    }
}

// Manejar la solicitud para eliminar el producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminar'])) {
    $id_producto = $_POST['id']; // Obtener el ID del producto
    
    // Consulta SQL para eliminar el producto
    $sql = "DELETE FROM productos WHERE id = '$id_producto'";
    $mensaje = $conn->query($sql) === TRUE ? "Producto eliminado exitosamente" : "Error: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="cajabox.css" />
    <link rel="stylesheet" href="boton.css" />
</head>
<body>
<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
							<span class="number">982924663_975569334</span>
						</div>
					</div>

					<div class="container-logo">
						<i class="fa-solid fa-mug-hot"></i>
						<h1 class="logo"><a href="/">Delicious Coffee</a></h1>
					</div>

					<div class="container-user">
    					<a href="inicio_sesion.php" class="user-icon-link"> <!-- Añadimos el enlace -->
        				<i class="fa-solid fa-user"></i>
    					</a>
    					<i class="fa-solid fa-basket-shopping"></i>
    					<div class="content-shopping-cart">
       						 <span class="text">Carrito</span>
       						 <span class="number">(0)</span>
    					</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
                        <li><a href="agregar_producto.php">agregar producto</a></li>
                        <li><a href="actualizar_producto.php">actualizar producto</a></li>
                        <li><a href="eliminar_producto.php">eliminar producto</a></li>
                        <li><a href="listar_productos.php">listar productos</a></li>
                        <li><a href="listar_usuarios.php">listar usuarios</a></li>
						<li><a href="Ventas_Totales_por_Día.php">Ventas del Dia</a></li>
						<li><a href="Ventas_Totales_por_Mes.php">Ventas del Mes</a></li>
						<li><a href="Ventas_Totales_por_Año.php">Ventas del Año</a></li>
					</ul>
			
					<form class="search-form" method="GET" action="buscar.php">
						<input type="search" name="query" placeholder="Buscar..." required />
						<button class="btn-search" type="submit">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
			    </nav>
			</div>
		</header>

<div class="container-header">
    <div class="containerff">
    <h2>Buscar Producto por ID</h2>
    <?php if ($mensaje): ?>
        <div class="mensaje"><?php echo $mensaje; ?></div>
    <?php endif; ?>
    
    <form action="eliminar_producto.php" method="POST">
        <label for="id">ID del Producto:</label>
        <input type="text" id="id" name="id" value="<?php echo isset($id_producto) ? $id_producto : ''; ?>" required>
        <button type="submit" name="buscar">Buscar Producto</button>
    </form>

    <?php if ($producto): ?>
        <h2>Detalles del Producto</h2>
        <p><strong>ID:</strong> <?php echo $producto['id']; ?></p>
        <p><strong>Nombre:</strong> <?php echo $producto['nombre']; ?></p>
        <p><strong>Descripción:</strong> <?php echo $producto['descripcion']; ?></p>
        <p><strong>Precio:</strong> <?php echo $producto['precio']; ?></p>
        <p><strong>Descuento:</strong> <?php echo $producto['descuento']; ?></p>
        <p><strong>Categoría:</strong> <?php echo $producto['categoria_id']; ?></p>

        <form action="eliminar_producto.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
            <button type="submit" name="eliminar">Eliminar Producto</button>
        </form>
    <?php endif; ?>
    </div>
</div>

<a href="admin_dashboard.php" class="button" >Volver</a>
<footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: jr.cusco 710
							</li>
							<li>Teléfono: 982924663</li>
							<li>Fax: 55555300</li>
							<li>EmaiL: shirley@support.com</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
								<i class="fa-brands fa-facebook-f"></i>
							</span>
							<span class="twitter">
								<i class="fa-brands fa-twitter"></i>
							</span>
							<span class="youtube">
								<i class="fa-brands fa-youtube"></i>
							</span>
							<span class="pinterest">
								<i class="fa-brands fa-pinterest-p"></i>
							</span>
							<span class="instagram">
								<i class="fa-brands fa-instagram"></i>
							</span>
						</div>
					</div>

					<div class="information">
						<p class="title-footer">Información</p>
						<ul>
							<li><a href="#">Acerca de Nosotros</a></li>
							<li><a href="#">Información Delivery</a></li>
							<li><a href="#">Politicas de Privacidad</a></li>
							<li><a href="#">Términos y condiciones</a></li>
							<li><a href="#">Contactános</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="#">Mi cuenta</a></li>
							<li><a href="#">Historial de ordenes</a></li>
							<li><a href="#">Lista de deseos</a></li>
							<li><a href="#">Boletín</a></li>
							<li><a href="#">Reembolsos</a></li>
						</ul>
					</div>

					<div class="newsletter">
						<p class="title-footer">Boletín informativo</p>

						<div class="content">
							<p>
								Suscríbete a nuestros boletines ahora y mantente al
								día con nuevas colecciones y ofertas exclusivas.
							</p>
							<input type="email" placeholder="Ingresa el correo aquí...">
							<button>Suscríbete</button>
						</div>
					</div>
				</div>

				<div class="copyright">
					<p>
						Desarrollado por shirley y Luis &copy; 2022
					</p>

					<img src="img/payment.png" alt="Pagos">
				</div>
			</div>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
</body>
</html>
