<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";


include "../src/controllers/login.php";
include "../src/controllers/index.php";


$r = $_REQUEST["r"] ?? "";

if ($r === "login") {
    // Handle the login action
    ctrlLogin();
} else {
    // Handle other actions or show the default page
    ctrlIndex();
}