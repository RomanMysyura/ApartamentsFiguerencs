<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartaments Figuerencs</title>
    <?php controllerLibs() ?>
    <link rel="icon" href="imatges/ApartamentsFiguerencs.png" type="image/x-icon">
</head>
<body>
  <?php controllerMenu() ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-4">
          <form>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <div class="input-group w-100"> <!-- Agregamos la clase w-100 aquí -->
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter the username."/>
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group w-100"> <!-- Agregamos la clase w-100 aquí -->
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
      </div>
    </div>
  </div>


</body>
</html>
