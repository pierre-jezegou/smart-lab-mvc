<?php 

namespace App\Controllers;
use Symfony\Component\Routing\RouteCollection;
use App\Models\Prescriptions;

class AlertsController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
        require_once '../config/redirectionLogin.php';
        $prescriptions = new Prescriptions;
        $prescriptions->getAllPrescriptionsWithPatientInformations();
        require_once APP_ROOT . '/views/alerts.php';
	}
}