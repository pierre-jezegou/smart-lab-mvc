<?php 

namespace App\Controllers;

use App\Models\Pharmacist;
use Symfony\Component\Routing\RouteCollection;

class RegisterController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
        include('../config/redirectionLogin.php');
        if($_SESSION["admin"]===true){
            require_once APP_ROOT . '/views/register.php';
        }
        else{
            require_once APP_ROOT . '/views/home.php';
        }
        
	}
}
