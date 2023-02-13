<?php 

namespace App\Controllers;
use Symfony\Component\Routing\RouteCollection;
use App\Models\Pharmacist;

class PageController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		include('../config/redirectionLogin.php');
		$routeToPatient = str_replace('{id}', 1, $routes->get('patient')->getPath());
		$user = new Pharmacist();
		$user->getUserById($_SESSION["user_id"]);
		$remaining_alerts = $user->getRemainingAlerts();
        require_once APP_ROOT . '/views/home.php';
	}
}