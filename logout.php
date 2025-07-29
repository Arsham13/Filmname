<?php 

session_start();

if (!isset($_SESSION["user"])) {
    header("location: index.php");
} else{
    unset($_SESSION["user"]);
    header("location: login_page.php");
}


?>