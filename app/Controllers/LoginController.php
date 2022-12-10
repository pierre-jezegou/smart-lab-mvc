<?php 

namespace App\Controllers;

use App\Models\Pharmacist;
use Symfony\Component\Routing\RouteCollection;

class LoginController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
        $this->pharmacist = new Pharmacist;
        $this->loginRedirection();
        require_once APP_ROOT . '/views/login.php';
	}



    public function loginRedirection(){
        $result = $this->pharmacist->getLogin();
        if($result===1){
            // $_SESSION["username"]=$this->pharmacist->getUsername();
            $_SESSION["full_name"]=$this->pharmacist->getFullName();
            echo($_SESSION["full_name"]);
        }
        else{
            echo("nok");
            $res = 'bkjsd';
        }
    }

    public function deconnect(){
        session_destroy();
    }
}