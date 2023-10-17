<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);


include "../src/controllers/login.php";
include "../src/controllers/index.php";


$r = $_REQUEST["r"] ?? "";

if ($r === "") {
    // Handle the login action
    ctrlIndex();
} elseif ($r == "login") {
    ctrlLogin();
} 