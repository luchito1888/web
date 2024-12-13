<?php
include 'conexion.php';

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$producto = null; // Variable para almacenar los datos del producto
$mensaje = "";

// Consulta a la base de datos para poblar el select de categorías
$sql_categorias = "SELECT id, nombre FROM categorias";
$result_categorias = $conn->query($sql_categorias);

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

// Manejar la solicitud para actualizar el producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    $id_producto = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $descuento = $_POST['descuento'];
    $categoria_id = $_POST['categoria_id'];

    // Consulta SQL para actualizar datos en la tabla Productos
    $sql = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', descuento='$descuento', categoria_id='$categoria_id' WHERE id='$id_producto'";
    $mensaje = $conn->query($sql) === TRUE ? "Producto actualizado exitosamente" : "Error: " . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
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
    
    <form action="actualizar_producto.php" method="POST">
        <label for="id">ID del Producto:</label>
        <input type="text" id="id" name="id" required>
        <button type="submit" name="buscar">Buscar Producto</button>
    </form>

    <?php if ($producto): ?>
        <h2>Formulario de Actualización</h2>
        <form action="actualizar_producto.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
            
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $producto['nombre']; ?>" required>
            
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required><?php echo $producto['descripcion']; ?></textarea>
            
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" value="<?php echo $producto['precio']; ?>" required>
            
            <label for="descuento">Descuento:</label>
            <input type="number" step="0.01" id="descuento" name="descuento" value="<?php echo $producto['descuento']; ?>">
            
            <label for="categoria_id">Categoría:</label>
            <select id="categoria_id" name="categoria_id" required>
            <option value="">Seleccione una categoría</option>
            <?php
            while($row = $result_categorias->fetch_assoc()) {
                $selected = ($row['id'] == $producto['categoria_id']) ? 'selected' : '';
                echo "<option value='" . $row["id"] . "' $selected>" . $row["nombre"] . "</option>";
            }
            ?>
        </select>
            
            <button type="submit" name="actualizar" >Actualizar Producto</button>
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
