<?php
$servername = "localhost"; // o el nombre del servidor de base de datos
$username = "root"; // tu nombre de usuario
$password = ""; // tu contraseña
$dbname = "totofilebd"; // el nombre de tu base de datos

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conectado exitosamente";

// Cerrar conexión
mysqli_close($conn);
?>