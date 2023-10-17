<?php

<<<<<<< HEAD
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
    <link rel="icon" href="imatges/ApartamentsFiguerencs.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="login.js"></script>
</head>

<body>
    <header class="bg-primary-subtle">
        <?php include("../src/views/menu.php"); ?>
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

</html>
=======

// Config.php

// Controllers
include '../src/controllers/index.php';
include '../src/controllers/menu.php';
include '../src/controllers/libs.php';
include '../src/controllers/signup.php';
include '../src/controllers/login.php';
include '../src/controllers/reservar.php';
include '../src/controllers/contactar.php';
include '../src/controllers/ubicacio.php';
// Models



$r = isset($_GET['r']) ? $_GET['r'] : '/';

if ($r === '/') {
    controllerindex();
} else if ($r === 'signup'){
    controllerentrar();
} else if ($r === 'login'){
    controllerlogin();
} else if ($r === 'reservar'){
    controllerreservar();
} else if ($r === 'contactar'){
    controllercontactar();
} else if ($r === 'ubicacio'){
    controllerubicacio();
}
>>>>>>> 58c31ee (versio 4)
