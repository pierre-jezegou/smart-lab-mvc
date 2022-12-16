<?php 

namespace App\Controllers;

use App\Models\Pharmacist;
use Symfony\Component\Routing\RouteCollection;

class RegisterController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
        include('../config/redirectionAdmin.php');
        if($_SESSION["function"]==="Administrateur"){
            require_once APP_ROOT . '/views/register.php';
        }
        else{
            require_once APP_ROOT . '/views/home.php';
        }
        
	}

    public function new_account(){
        $pharmacist = new Pharmacist;
        $pharmacist->setName($_POST["name"]);
        $pharmacist->setSurname($_POST["surname"]);
        $pharmacist->setUsername($_POST["name"], $_POST["surname"]);
        $pharmacist->setEmail($_POST["email"]);
        $pharmacist->setPhone($_POST["phone"]);
        $pharmacist->setFunction($_POST["function"]);
        $pharmacist->initOther();
        header("location: /admin");
        $pharmacist->sendMail();
    }
}
