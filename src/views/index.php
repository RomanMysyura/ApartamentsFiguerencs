<<<<<<< HEAD
<?php

/**
 * @author: Roman Mysyura rmysyura@cendrassos.net Adrià Poncelas aponcelas@cendrassos.net
 **/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartaments Figuerencs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="login.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <header class="bg-primary-subtle">
    <div class="container d-flex justify-content-between align-items-center py-3">
    <div>
        <a href="index.php">
            <img src="imatges/ApartamentsFiguerencs.png" alt="Logo" width="50" height="50">
        </a>

    </div>
    <div>
        <button type="button" class="btn btn-info mx-2" onclick="window.location.href='reservar.php'">Reservar</button>
        <button type="button" class="btn btn-info mx-2">Contactar</button>
        <button type="button" class="btn btn-info mx-2">Ubicació</button>
    </div>
    <div>
        <a href="login.php"><button type="button" class="btnlogin btn btn-primary">Entrar</button></a>
        <button type="button" class="btnlogin btn btn-primary" id="BotonLogin"
            onclick="window.location.href='signup.php'">Registrar</button>
    </div>

</div>
    </header>

    <h1>12345678910</h1>

    <div class="container ">
        <h2 class="titolpagina">Luxe i confort ben a prop teu!</h2>

    </div>
    <div class="input-group divbuscar">
        <input type="search" class="form-control rounded formularibuscar" placeholder="Buscar els meus apartaments"
            aria-label="Search" aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary buttonbuscar">Buscar</button>
    </div>













    <div>

    </div>
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</html>
=======
<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio</title>
    <?php controllerLibs() ?>

</head>
<body>
    <!-- Agrega contenido HTML para la página de inicio -->
    
    <?php controllerMenu() ?>
    <h3>sdgsdg</h3>
   
</body>
</html>
>>>>>>> 513540294e2b026acb53485837528610471b9d4c
