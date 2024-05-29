<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Crear tabla de usuarios
$sql = "CREATE TABLE usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(50),
    password VARCHAR(255),
    nombre VARCHAR(50),
    apellido VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla de usuarios creada con éxito";
} else {
    echo "Error al crear la tabla de usuarios: " . $conn->error;
}

$conn->close();
?>