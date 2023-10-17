<?php
// session_start();
// $db = new PDO("mysql:host=localhost;dbname=nombre_de_la_base_de_datos", "usuario_db", "contraseña_db");

// $username = $_REQUEST['username'];
// $password = $_REQUEST['password'];

// $stmt = $db->prepare("SELECT * FROM usuarios WHERE username = ?");
// $stmt->execute([$username]);
// $user = $stmt->fetch();

// if ($user && password_verify($password, $user['password'])) {
//     $_SESSION['username'] = $username;
//     header("Location: inicio_exitoso.php");
// } else {
//     header("Location: inicio_fallido.php");
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartaments Figuerencs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imatges/ApartamentsFiguerencs.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="login.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-10">
<div class="position-absolute top-50 start-50 translate-middle shadow p-3 mb-5 bg-white rounded">
    <!-- Example Code -->
    <form>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter the username."/>
          </div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="password" class="form-control" id="password" placeholder="Enter the password."/>
          </div>
        </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary">Log In</button>
      <div class="mb-3">
        <p>You don't have an account? <a href="signup.php">Sign In</a></p>
      </div>
    </form>
</div>
</body>
</html>
