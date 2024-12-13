<?php
// Habilitar la visualización de errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si la imagen ha sido cargada
    if (isset($_FILES['imagen'])) {
        $errors = [];
        $file_name = $_FILES['imagen']['name'];
        $file_size = $_FILES['imagen']['size'];
        $file_tmp = $_FILES['imagen']['tmp_name'];
        $file_type = $_FILES['imagen']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Comprobar si el archivo es demasiado grande
        if ($file_size > 2097152) {  // Limite de 2MB
            $errors[] = 'El archivo es demasiado grande. Debe ser menor a 2 MB.';
        }

        // Comprobar si la extensión de la imagen es válida
        $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($file_ext, $allowed_exts)) {
            $errors[] = 'La imagen debe ser de tipo JPG, JPEG, PNG o GIF.';
        }

        // Si no hay errores, mover el archivo a la carpeta 'imagenes_productos'
        if (empty($errors)) {
            $upload_dir = "imagenes_productos/";  // Carpeta donde se guardará la imagen
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true); // Crear la carpeta si no existe
            }

            $destination = $upload_dir . $file_name;
            if (move_uploaded_file($file_tmp, $destination)) {
                echo "Imagen cargada con éxito.";

                // Obtener el nombre del producto desde el formulario
                $nombre_producto = $_POST['nombre_producto'];

                // Guardar los datos en la base de datos
                $servername = "localhost";  // Ajusta estos valores según tu configuración
                $username = "root";
                $password = "";
                $dbname = "delicious_coffee";  // Nombre de tu base de datos

                // Crear conexión
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Comprobar si la conexión fue exitosa
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Preparar la consulta SQL para insertar el producto y la ruta de la imagen
                $sql = "INSERT INTO productos (nombre, imagen) VALUES ('$nombre_producto', '$destination')";

                if ($conn->query($sql) === TRUE) {
                    echo "Producto agregado exitosamente.";
                } else {
                    echo "Error al agregar el producto: " . $conn->error;
                }

                // Cerrar la conexión a la base de datos
                $conn->close();
            } else {
                echo "Error al subir la imagen.";
            }
        } else {
            // Mostrar los errores si los hay
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }
    } else {
        echo "No se ha recibido ninguna imagen.";
    }
}
?>
