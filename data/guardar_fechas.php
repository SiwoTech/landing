<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "u826340212_landingcwo"; // Cambia esto si es necesario
$password = "Cwo9982061148"; // Cambia esto si es necesario
$dbname = "u826340212_landingcwo"; // Cambia esto por el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
    $id=$_POST['id'];
    //$clave=$_POST['clave'];
    //$nombre=$_POST['nombre'];
    //$telefono=$_POST['telefono'];
    $timer=$_POST['timer'];

// Preparar la sentencia SQL para insertar los datos
$sql = "UPDATE users SET timer='$timer'";
        

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Datos guardadas correctamente";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
