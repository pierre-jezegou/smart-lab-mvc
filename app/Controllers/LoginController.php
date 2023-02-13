<?php 

namespace App\Controllers;

use App\Models\Pharmacist;
use Symfony\Component\Routing\RouteCollection;

class LoginController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/login.php';
	}
    public function logincheck(){
        $this->pharmacist = new Pharmacist;
        $this->loginRedirection();
    }


    public function loginRedirection(){
        $result = $this->pharmacist->getLogin();
        if($result===1){
            header('location: /');
            $_SESSION["username"]=$this->pharmacist->getUsername();
            $_SESSION["full_name"]=$this->pharmacist->getFullName();
            $_SESSION["function"]=$this->pharmacist->getFunction();
            $_SESSION["isLogged"]=true;
            $_SESSION["admin"]=$this->pharmacist->getAdmin();
            $_SESSION["last_connection"]=date("d/m/Y - H:i:s");
        }
        else{
            $_SESSION["isLogged"]=false;
            header("location: /login");
        }
    }

    public function deconnect(){
        session_destroy();
        header("location: /login");
    }
}