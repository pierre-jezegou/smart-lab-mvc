<?php
if(!isset($_SESSION["isLogged"]) or $_SESSION["isLogged"]!==true){
    header('location: /login');
}