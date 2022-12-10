<?php 

namespace App\Controllers;

use App\Models\Patient;
use Symfony\Component\Routing\RouteCollection;

class PatientController
{
    // Show the patient attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $patient = new Patient();
        $patient->read($id);

        require_once APP_ROOT . '/views/patients.php';
	}
}