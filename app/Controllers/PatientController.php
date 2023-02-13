<?php
namespace App\Controllers;


use App\Models\Patient;
use App\Models\Admission;
use App\Models\Prescriptions;
use App\Models\Prescription;
use App\Models\Events;

use Symfony\Component\Routing\RouteCollection;

class PatientController
{
    // Show the patient attributes based on the id.
	public function PrescriptionsAction(int $id, RouteCollection $routes)
	{   
        require_once '../config/redirectionLogin.php';
        $patient = new Patient();
        $patient->read($id);
        $prescriptions = new Prescriptions;
        $prescriptions->getAllPrescriptions($id);
        $lastAdmission = new Admission;
        $lastAdmission->getLastAdmissionById($id);
        $events = new Events();
        $events->getAllEvents($id);
        require_once APP_ROOT . '/views/patient_prescriptions.php';
        require_once APP_ROOT . '/views/patient.php';
	}

    public function PrescriptionAction(int $prescription_id, RouteCollection $routes)
	{   
        require_once '../config/redirectionLogin.php';
        $patient = new Patient();
        $patient->getPatientByPrescription($prescription_id);
        $patient_id = $patient->getPatientId();
        
        $lastAdmission = new Admission;
        $lastAdmission->getLastAdmissionById($patient_id);

        $events = new Events();
        $events->getAllEvents($patient_id);

        $prescription = new Prescription();
        $prescription->getAllData($prescription_id);

        $numero_alerte = $alert_id;
        require_once APP_ROOT . '/views/patient_alert.php';
        require_once APP_ROOT . '/views/patient.php';
	}
}