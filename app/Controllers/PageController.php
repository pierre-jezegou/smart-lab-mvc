<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		$routeToPatient = str_replace('{id}', 1, $routes->get('patient')->getPath());

        require_once APP_ROOT . '/views/home.php';
	}
}