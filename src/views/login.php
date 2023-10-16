<?php 
session_start();

$db = new PDO("mysql:host=localhost;dbname=nombre_de_la_base_de_datos", "usuario_db", "contraseña_db");

$usename = $_POST['username'];
$password = $_POST['password'];

$stmt = $db->prepare("SELECT * FROM users WHERE user = ?");
$stmt->execute(['username']);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
  // Autenticación exitosa
  $_SESSION['username'] = $username;
  header("Location: inicio_exitoso.php");
} else {
  // Autenticación fallida
  header("Location: inicio_fallido.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartaments Figuerencs</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="imatges/ApartamentsFiguerencs.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="login.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-10">
<div class="position-absolute top-50 start-50 translate-middle shadow p-3 mb-5 bg-white rounded">
    <!-- Example Code -->
    <form method = "POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom d'usuari</label>
        <input
          type="text"
          class="form-control"
          id="username"
          aria-describedby="emailHelp"
        />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"
          >Contrasenya</label
        >
        <input
          type="password"
          class="form-control"
          id="password"
        />
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        <label class="form-check-label" for="exampleCheck1"
          >Recorda el meu nom d'usuari</label
        >
      </div>
      <button type="submit" class="btn btn-primary">Iniciar sessió</button>
      <div class="mb-3">
        <p>No tens un compte creat? <a href="signup.php">Registrat</a></p>
      </div>
    </form>
</div>
    <!-- End Example Code -->
  </body>
</html>
