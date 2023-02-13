<?php
namespace App\Controllers;


use App\Models\Patients;
use Symfony\Component\Routing\RouteCollection;

class PatientsController
{
    // Show the patient attributes based on the id.
	public function indexAction(RouteCollection $routes)
	{   
        require_once '../config/redirectionLogin.php';
        $patients = new Patients;
        $patients->getAllPatients();
        require_once APP_ROOT . '/views/patients.php';
	}
}


