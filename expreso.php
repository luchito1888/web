<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expreso</title>
    <title>Delicious Coffee</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
	<script src="carrito.js"></script>
    <link rel="stylesheet" href="producto.css">
    <link rel="stylesheet" href="styles.css" />
	<link rel="stylesheet" href="Carrito.css" />

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
    <span id="cart-count" class="number">(0)</span>
    <!-- Dropdown del carrito -->
    <div class="cart-dropdown">
        <ul id="cart-items" class="cart-items"></ul>
        <div class="cart-summary">
            <p>Total: <strong id="cart-total">$0.00</strong></p>
        </div>
        <div class="cart-actions">
            <button onclick="viewCart()">Ver carrito</button>
            <button onclick="checkout()">Verificar</button>
        </div>
    </div>
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

        <section class="container specials">
				<h1 class="heading-1">Expreso</h1>

				<div class="container-products" >
					<!-- Producto 1 -->
					<div class="card-product" onclick="window.location='Espresso_clasico.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="ima/e1.jpeg"  />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Espresso clasico</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$12.50 </p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product" onclick="window.location='Doble Espresso.php';" style="cursor: pointer;">
						<div class="container-img">
							<img
								src="ima/e2.jpeg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Doble Espresso</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$13.00 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Espresso con leche.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="ima/e3.jpeg" alt="Cafe Viena" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Espresso con leche</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$13.50 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Espresso Macchiato.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="ima/e4.jpeg" alt="Cafe Liqueurs" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Espresso Macchiato</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$13.25</p>
						</div>
					</div>
				</div>

                <div class="container-products">
					<!-- Producto 4 -->
					<div class="card-product" onclick="window.location='Espresso con Caramelo.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="ima/e5.jpeg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Espresso con Caramelo</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$13.75 </p>
						</div>
					</div>
					<!-- Producto 5 -->
					<div class="card-product" onclick="window.location='Espresso con chocolate.php';" style="cursor: pointer;">
						<div class="container-img">
							<img
								src="ima/e6.jpeg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Espresso con chocolate</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$10.70 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Espresso ristretto.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="ima/e7.jpeg" alt="Cafe Viena" />

							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Espresso ristretto</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$12.75</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Espresso cortado.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="ima/e8.jpeg" alt="Cafe Liqueurs" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Espresso cortado</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$13.60</p>
						</div>
					</div>
				</div>

                <div class="container-products" >
					<!-- Producto 4 -->
					<div class="card-product" onclick="window.location='Affogato.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="ima/e10.jpeg" alt="Cafe Irish" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Affogato</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$14.00</p>
						</div>
					</div>
					<!-- Producto 5 -->
					<div class="card-product" onclick="window.location='Espresso Tonic.php';" style="cursor: pointer;">
						<div class="container-img">
							<img
								src="ima/e11.jpeg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Espresso Tonic</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$14.25 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Espresso con Leche De Coco.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="ima/e12.jpeg" alt="Cafe Viena" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Espresso con Leche De Coco</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$13.75 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Espresso Frio.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="img/m18.jpg" alt="Cafe Liqueurs" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Espresso Frio</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$14.60</p>
						</div>
					</div>
				</div>
			</section>

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