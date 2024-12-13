<?php
include 'conexion.php';
session_start();

$error = false; // Variable para controlar el error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $contraseña = $_POST['contraseña'] ?? '';
    $rol = $_POST['rol'] ?? '';

    // Verificar que los campos no estén vacíos
    if (empty($nombre) || empty($contraseña) || empty($rol)) {
        $error = true; // Hay un error
        $mensajeError = "Por favor, completa todos los campos.";
    } else {
        // Verificar si el usuario existe
        $sql = "SELECT * FROM usuarios WHERE nombre=? AND rol=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $nombre, $rol);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verificar la contraseña
            if (password_verify($contraseña, $row['contraseña'])) {
                // Establecer variables de sesión
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['rol'] = $row['rol'];

                // Redirigir según el rol
                if ($row['rol'] == 'admin') {
                    header("Location: admin_dashboard.php");
                } else {
                    header("Location: user_dashboard.php");
                }
                exit; // Asegúrate de salir después de redirigir
            } else {
                $error = true; // Contraseña incorrecta
                $mensajeError = "Contraseña incorrecta.";
            }
        } else {
            $error = true; // Usuario no encontrado o rol incorrecto
            $mensajeError = "Usuario o rol incorrectos.";
        }

        // Cerrar la declaración
        $stmt->close();
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="sesion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Estilo adicional para el modal de error */
        .error-modal {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffdddd;
            color: #d8000c;
            border: 1px solid #d8000c;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .error-modal button {
            background-color: #d8000c;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="Form login-form">
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="input-box">
                    <label for="nombre">Nombre de Usuario</label>
                    <input type="text" name="nombre" required>
                </div>
                <div class="input-box">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="contraseña" required>
                </div>
                <div class="input-box">
                    <i class='bx bxs-user'></i> <!-- Ícono al costado del ComboBox -->
                    <label for="rol">Elige un Rol</label>
                    <select name="rol" required>
                        <option value="" disabled selected>Selecciona un rol</option>
                        <option value="user">Usuario</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>
                <div class="forgot-section">
                    <span><input type="checkbox" name="" id="checked"> Remember Me</span>
                    <span><a href="#">Forgot Password?</a></span>
                </div>
                <button class="btn" type="submit">Login</button>
            </form>
            <p>Or Sign up using</p>
            <div class="social-media">
                <i class='bx bxl-facebook'></i>
                <i class='bx bxl-google'></i>
                <i class='bx bxl-twitter'></i>
            </div>
            <p class="RegisteBtn RegiBtn"><a href="#">Register Now</a></p><br>
        </div>
        <div class="Form Register-form">
        <h2>Register</h2>
    <form action="registro.php" method="POST">
        <div class="input-box">
            <i class='bx bxs-user'></i>
            <label for="nombre">Username</label>
            <input type="text" name="nombre" placeholder="Enter Your Username*" required>
        </div>
        <div class="input-box">
            <i class='bx bxs-lock'></i>
            <label for="contraseña">Password</label>
            <input type="password" name="contraseña" placeholder="Enter Your Password*" required>
        </div>
        <div class="input-box">
            <i class='bx bxs-lock'></i>
            <label for="confirmar_contraseña">Confirm Password</label>
            <input type="password" name="confirmar_contraseña" placeholder="Confirm Your Password*" required>
        </div>

        <div class="input-box">
            <i class='bx bxs-user'></i>
            <label for="rol">Elige un Rol</label>
            <select name="rol" required>
                <option value="" disabled selected>Selecciona un rol</option>
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn loginBtn">Register</button>
    </form>
    <p>Or Sign up using</p>
    <div class="social-media">
        <i class='bx bxl-facebook'></i>
        <i class='bx bxl-google'></i>
        <i class='bx bxl-twitter'></i>
    </div>
    <p class="LoginBtn"><a href="#">Login Now</a></p>
</body>
    </div>

    <!-- Modal de error -->
    <div class="error-modal" id="errorModal">
        <p id="mensajeError"></p>
        <button onclick="cerrarModal()">Cerrar</button>
    </div>

    <script>
    const container=document.querySelector(".container") ;
    const loginForm=document.querySelector('.login-form')
    const RegisterForm=document.querySelector('.Register-form');
    const RegiBtn=document.querySelector('.RegiBtn');
    const LoginBtn=document.querySelector('.LoginBtn');
    RegiBtn.addEventListener('click',()=>{
        RegisterForm.classList.add('active');
        loginForm.classList.add('active')
    })
    LoginBtn.addEventListener('click',()=>{
        RegisterForm.classList.remove('active');
        loginForm.classList.remove('active')
    })
</script>

    <script>
        const container = document.querySelector(".container");
        const loginForm = document.querySelector('.login-form');

        // Mostrar modal de error si hay un mensaje de error
        function cerrarModal() {
            document.getElementById('errorModal').style.display = 'none';
        }

        <?php if ($error): ?>
            document.getElementById('errorModal').style.display = 'block';
            document.getElementById('mensajeError').innerText = "<?php echo $mensajeError; ?>";
        <?php endif; ?>
    </script>
</body>
</html>
