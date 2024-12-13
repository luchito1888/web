<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Delicious Coffee</title>
    <link rel="stylesheet" href="styles.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
	
</head>
<body>
<header id="header">
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
                <h1 class="logo"><a href="index.php">Delicious Coffee</a></h1>
            </div>

            <div class="container-user">
                <a href="inicio_sesion.php" class="user-icon-link">
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

        <section class="container specials">
				<h1 class="heading-1">Moca Helado</h1>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product"onclick="window.location='Cafe Irish.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="img/m1.jpg" alt="Cafe Irish" />
							<span class="discount">-10%</span>
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
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">S/15.00 </p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product" onclick="window.location='Moca Helado Clásico.php';" style="cursor: pointer;">
						<div class="container-img">
							<img
								src="img/m7.jpg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<span class="discount">-20%</span>
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
							<h3>Moca Helado Clásico</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$10.50 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product"onclick="window.location='Moca Helado con Caramelo.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="img/m10.jpg" alt="Cafe Viena" />
							<span class="discount">-25%</span>
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
							<h3>Moca Helado con Caramelo</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$14.85 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Moca Helado de Avellana.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="img/m4.jpg" alt="Cafe Liqueurs" />
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
							<h3>Moca Helado de Avellana</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$13.50</p>
						</div>
					</div>
				</div>

                <div class="container-products">
					<!-- Producto 4 -->
					<div class="card-product" onclick="window.location='Moca_Helado_Chocolate_Blanco.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="img/m11.jpg" alt="Cafe Irish" />
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
							<h3>Moca Helado con Chocolate Blanco</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$15.30 </p>
						</div>
					</div>
					<!-- Producto 5 -->
					<div class="card-product" onclick="window.location='Moca Helado con Malvaviscos.php';" style="cursor: pointer;">
						<div class="container-img">
							<img
								src="img/m12.jpg"
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
							<h3>Moca Helado con Malvaviscos</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$15.70 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Moca Helado de Menta.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="img/m13.jpg" alt="Cafe Viena" />

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
							<h3>Moca Helado de Menta</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$13.70</p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Moca Helado con Leche de Almendra.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="img/m14.jpg" alt="Cafe Liqueurs" />
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
							<h3>Moca Helado con Leche de Almendra</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$14.60</p>
						</div>
					</div>
				</div>

                <div class="container-products">
					<!-- Producto 4 -->
					<div class="card-product" onclick="window.location='Moca Helado de Coco.php';" style="cursor: pointer;" >
						<div class="container-img">
							<img src="img/m15.jpg" alt="Cafe Irish" />
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
							<h3>Moca Helado de Coco </h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$22.50</p>
						</div>
					</div>
					<!-- Producto 5 -->
					<div class="card-product" onclick="window.location='Moca_Helado_Vegano.php';" style="cursor: pointer;">
						<div class="container-img">
							<img
								src="img/m16.jpg"
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
							<h3>Moca Helado Vegano</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$18.70 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Moca Helado con Especias de Otoño.php';" style="cursor: pointer;">
						<div class="container-img">
							<img src="img/m17.jpg" alt="Cafe Viena" />
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
							<h3>Moca Helado con Especias de Otoño</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$19.85 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product" onclick="window.location='Moca Helado con Espuma de Leche.php';" style="cursor: pointer;">
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
						<div class="content-card-product" onclick="window.location='Moca Helado con Espuma de Leche.php';" style="cursor: pointer;">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Moca Helado con Espuma de Leche</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$16.60</p>
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
		<script src="sticky.js"></script>
</body>
</html>