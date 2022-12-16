<?php
include('redirectionLogin.php');
if(!isset($_SESSION["function"]) or $_SESSION["function"]!=="Administrateur"){
    header('location: /');
}