<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Irish</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="producto.css">
    <link rel="stylesheet" href="styles.css" />
	<link rel="stylesheet" href="boton.css" />
    
</head>
<body>
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
						<h1 class="logo"><a href="index.">Delicious Coffee</a></h1>
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
						<li><a href="index.php">Inicio</a></li>
						<li><a href="moca_helado.php">Moca Helado</a></li>
						<li><a href="expreso.php">Expreso</a></li>
						<li><a href="capuchino.php">Capuchino</a></li>
						<li><a href="mas.php">Más Vendidos</a></li>
						<li><a href="ayuda.php">Ayuda</a></li>
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
    <main>
    <section class="product-info">
    <div class="product-image">
        <img src="img/m1.jpg" alt="Matcha Frappuccino Alto">
    </div>
    <div class="product-details">
        <h1>Cafe Irish</h1>
        <p>El café irlandés es una deliciosa bebida caliente que combina café expreso, whisky irlandés, azúcar y una capa de crema 
			batida en la parte superior. Originario de Irlanda, se sirve tradicionalmente en un vaso resistente al calor, y se 
			disfruta por su equilibrio entre el sabor robusto del café y la suavidad del whisky, complementado por la dulzura del azúcar y la cremosidad de la crema. Es perfecto para disfrutar como un postre o en una tarde fría.</p>
        <span class="price">S/ 15.00</span>
    </div>
</section>
        <section class="customize">
            <div class="size-selection">
                <h2>Elige el tamaño de tu bebida</h2>
                <div class="sizes">
                    <div class="size active">Alto <br> 300 ml <br> S/ 16.00</div>
                    <div class="size">Grande <br> 400 ml</div>
                    <div class="size">Venti <br> 500 ml</div>
                </div>
            </div>
            <div class="custom-options">
                <h2>Personaliza tu bebida</h2>
                <form>
                    <label for="leche">Elige el tipo de leche para tu bebida *</label>
                    <select id="leche">
                        <option value="">Selecciona</option>
                        <option value="entera">Entera</option>
                        <option value="deslactosada">Deslactosada</option>
                        <option value="almendra">Almendra</option>
                    </select>
                    <label for="crema">¿Deseas crema batida en tu bebida?</label>
                    <select id="crema">
                        <option value="">Selecciona</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    <label for="adicionales">¿Deseas agregar como adicional algún jarabe, toppings o chispas?</label>
                    <select id="adicionales">
                        <option value="">Selecciona</option>
                        <option value="chispas">Chispas de chocolate</option>
                        <option value="jarabe">Jarabe de caramelo</option>
                    </select>
                </form>
                <div class="actions">
    <button class="btn decrement">-</button>
    <span id="counter">1</span>
    <button class="btn increment">+</button>
    
    <button class="btn btn-primary">Agregar al carrito</button>
</div>

<script>
    // Seleccionar los elementos
    const decrementButton = document.querySelector('.decrement');
    const incrementButton = document.querySelector('.increment');
    const counterSpan = document.getElementById('counter');

    // Función para actualizar el contador
    function updateCounter(change) {
        let currentValue = parseInt(counterSpan.textContent);
        currentValue += change;
        if (currentValue < 0) currentValue = 0; // Evitar números negativos
        counterSpan.textContent = currentValue;
    }

    // Asignar eventos a los botones
    decrementButton.addEventListener('click', () => updateCounter(-1));
    incrementButton.addEventListener('click', () => updateCounter(1));
</script>
            </div>
        </section>
		<button class="button">Agregar y seguir comprando</button>
    </main>
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
</body>
</html>
