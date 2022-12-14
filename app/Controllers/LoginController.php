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
            header('location: /');
            $_SESSION["username"]=$this->pharmacist->getUsername();
            $_SESSION["full_name"]=$this->pharmacist->getFullName();
            $_SESSION["isLogged"]=true;
            $_SESSION["admin"]=$this->pharmacist->getAdmin();
            echo("connexion ok");
        }
        else{
            $_SESSION["isLogged"]=false;
            echo "connexion nok";
        }
    }

    public function deconnect(){
        session_destroy();
    }
}
