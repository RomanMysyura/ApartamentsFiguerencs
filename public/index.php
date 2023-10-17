<?php


<<<<<<< HEAD
error_reporting(E_ERROR | E_WARNING | E_PARSE);
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
>>>>>>> 513540294e2b026acb53485837528610471b9d4c


include "../src/controllers/login.php";
include "../src/controllers/index.php";

$r = isset($_GET['r']) ? $_GET['r'] : '/';

<<<<<<< HEAD
$r = $_REQUEST["r"] ?? "";

if ($r === "") {
    // Handle the login action
    ctrlIndex();
} elseif ($r == "login") {
    ctrlLogin();
} 
=======
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
>>>>>>> 513540294e2b026acb53485837528610471b9d4c
