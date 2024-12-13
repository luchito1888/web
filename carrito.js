function cargarCarrito() {
    $.ajax({
        url: 'obtener_carrito.php', // Cambié la URL para obtener el carrito
        method: 'GET',
        success: function(data) {
            const response = JSON.parse(data);

            if (response.status === 'success') {
                const carrito = response.carrito;
                let cartHTML = '';
                let total = 0;

                // Crear el HTML para los productos en el carrito
                carrito.forEach(producto => {
                    cartHTML += `
                        <li>${producto.nombre} - $${producto.precio}</li>
                    `;
                    total += parseFloat(producto.precio); // Sumar el total
                });

                // Insertar los productos del carrito en la lista
                document.getElementById('cart-items').innerHTML = cartHTML;
                document.getElementById('cart-count').textContent = `(${carrito.length})`; // Actualizar contador
                document.getElementById('cart-total').textContent = `$${total.toFixed(2)}`; // Actualizar total
            } else {
                document.getElementById('cart-items').innerHTML = '<li>Carrito vacío</li>';
            }
        }
    });
}

// Llamar a la función para cargar el carrito cuando la página se cargue
document.addEventListener('DOMContentLoaded', function() {
    cargarCarrito(); // Cargar el carrito desde la sesión al inicio
});
// Función para agregar un producto al carrito
function agregarAlCarrito(id) {
    $.ajax({
        url: 'agregar_al_carrito.php', // Archivo PHP que agrega el producto al carrito
        method: 'GET',
        data: { id: id }, // Enviar el ID del producto
        success: function(data) {
            const response = JSON.parse(data);
            if (response.status === 'success') {
                // Después de agregar, recargar el carrito para mostrar los productos
                cargarCarrito();
                alert('Producto agregado al carrito');
            } else {
                alert('Error al agregar el producto al carrito');
            }
        }
    });
}

// Cargar el carrito al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    cargarCarrito(); // Cargar el carrito desde la sesión al inicio
});

  