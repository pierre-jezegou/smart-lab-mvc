<?php 

namespace App\Controllers;
use Symfony\Component\Routing\RouteCollection;

class MonitoringController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		include('../config/redirectionLogin.php');
		$ping_sillage = random_int(0,10);
        require_once APP_ROOT . '/views/monitoring.php';
	}
}