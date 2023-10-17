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
    <?php controllerLibs() ?>
    <link rel="icon" href="imatges/ApartamentsFiguerencs.png" type="image/x-icon">
    
</head>
<body class="p-0 m-0 border-0 bd-example m-0 border-0">
    <!-- Example Code -->
    <?php controllerMenu() ?>
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
