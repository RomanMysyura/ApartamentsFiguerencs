<?php
$host = '10.2.5.205';
$dbname = 'bddapartaments';
$username = 'root';
$password = '1234';

try {
    $db = new PDO("mysql:host=10.2.5.205;dbname=$dbname", $username, $password);
    // Habilitar mensajes de error de PDO
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO users (name, last_name, telephone, email) VALUES (:name, :last_name, :telephone, :email)";

    // Preparar la sentencia
    $stmt = $db->prepare($sql);

    // Vincular los parámetros
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);

    // Ejecutar la consulta
    try {
        $stmt->execute();
        echo "Datos insertados correctamente.";
    } catch (PDOException $e) {
        die("Error al insertar datos: " . $e->getMessage());
    }
}
?>
