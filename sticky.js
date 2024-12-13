// Seleccionar el encabezado
var header = document.getElementById("header");

// Función para hacer que el encabezado se quede fijo al hacer scroll
window.onscroll = function() {
    if (window.scrollY + window.innerHeight >= document.body.offsetHeight) {
        // Cuando el usuario llega al final de la página, fija el encabezado
        header.classList.add("fixed-header");
    } else {
        // Si el usuario no está al final, elimina el efecto de fijación
        header.classList.remove("fixed-header");
    }
};




