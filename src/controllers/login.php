<?php 


function ctrlLogin() {
    header("Location:index.php?r=login");
    include "../src/views/login.php";
}