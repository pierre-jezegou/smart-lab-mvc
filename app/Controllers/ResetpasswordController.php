<?php 

namespace App\Controllers;

use App\Models\Pharmacist;
use Symfony\Component\Routing\RouteCollection;

class ResetpasswordController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/reset_password.php';
	}

    public function password_reset(){
        $mail = $_POST["email"];
        require_once APP_ROOT . '/views/reset_password_done.php';
    }
}