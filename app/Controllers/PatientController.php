<?php
namespace App\Controllers;


use App\Models\Patient;
use App\Models\Prescriptions;
use Symfony\Component\Routing\RouteCollection;

class PatientController
{
    // Show the patient attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{   
        require_once '../config/redirectionLogin.php';
        $patient = new Patient();
        $patient->read($id);
        $prescriptions = new Prescriptions;
        $prescriptions->getAllPrescriptions($id);
        require_once APP_ROOT . '/views/patient.php';
	}
}