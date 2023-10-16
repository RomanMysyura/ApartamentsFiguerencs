<?php
// Establecer la conexión a la base de datos
$servername = "10.2.5.205";
$username = "root"; 
$password = "1234"; 
$database = "bddapartaments";

$conn = new mysqli('10.2.5.205', 'root', 'tu_contraseña', 'bddapartaments');


// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar los datos del formulario
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

// Consulta SQL para insertar los datos en la tabla "users"
$sql = "INSERT INTO users (name, last_name, telephone, email) VALUES ('$name', '$last_name', '$telephone', '$email')";

if ($conn->query($sql) === TRUE) {
    // Registro exitoso
    echo '<script>alert("Usuario registrado exitosamente");</script>';
    header('Location:index.php');
exit();
} else {
    // Error al registrar
    echo '<script>alert("Error al registrar: ' . $conn->error . '");</script>';
    header('Location:.index.php');
exit();
}


// Cerrar la conexión a la base de datos
$conn->close();
?>
