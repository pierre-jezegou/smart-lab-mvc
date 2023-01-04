<?php
namespace App\Models;
use App\Models\Prescription;

class Prescriptions
{
    public $prescriptions_data;
    protected $patient_number;



    public function getAllPrescriptions(int $subject_id){
        $pdo = connect_database();
        $query = "SELECT * FROM `prescriptions` JOIN `alerts` ON row_id=prescription_id WHERE subject_id=" . $subject_id .";";
        $datas = $pdo->query($query)->fetchall();

        $prescriptions_for_patient = array();
        foreach($datas as $data){
            $prescription_temp = new Prescription;
            $prescription_temp->setRowId($data["row_id"]);
            $prescription_temp->setSubject($data["subject_id"]);
            $prescription_temp->setStart($data["startdate"]);
            $prescription_temp->setEnd($data["enddate"]);
            $prescription_temp->setDrug($data["drug"]);
            $prescription_temp->setStrenght($data["prod_strength"]);
            $prescription_temp->setDose($data["dose_val_rx"]);
            $prescription_temp->setDoseUnit($data["dose_unit_rx"]);
            $prescription_temp->setFormUnit($data["form_unit_disp"]);
            $prescription_temp->setRoute($data["route"]);
            $prescription_temp->setStatus($data["status"]);
            $prescription_temp->setComment($data["comment"]);
            $prescription_temp->setAlert($data["alert"]);
            array_push($prescriptions_for_patient, $prescription_temp);
        }
        $this->prescriptions_data = $prescriptions_for_patient;
        return $this->$prescriptions_data;
    }


    public function getAllPrescriptionsWithPatientInformations(){
        $pdo = connect_database();
        $query = "SELECT * FROM `prescriptions` JOIN `alerts` ON row_id=prescription_id JOIN `patients` ON patients.subject_id=prescriptions.subject_id WHERE alert=1 LIMIT 20";
        $datas = $pdo->query($query)->fetchall();

        $alerts_array = array();
        foreach($datas as $data){
            $prescription_temp = new Prescription;
            $prescription_temp->setRowId($data["row_id"]);
            $prescription_temp->setSubject($data["subject_id"]);
            $prescription_temp->setStart($data["startdate"]);
            $prescription_temp->setEnd($data["enddate"]);
            $prescription_temp->setDrug($data["drug"]);
            $prescription_temp->setStrenght($data["prod_strength"]);
            $prescription_temp->setDose($data["dose_val_rx"]);
            $prescription_temp->setDoseUnit($data["dose_unit_rx"]);
            $prescription_temp->setFormUnit($data["form_unit_disp"]);
            $prescription_temp->setRoute($data["route"]);
            $prescription_temp->setStatus($data["status"]);
            $prescription_temp->setComment($data["comment"]);
            $prescription_temp->setAlert($data["alert"]);

            $patient_temp = new Patient;
            $patient_temp->setId($data["subject_id"]);
            $patient_temp->setGender($data["gender"]);
            $patient_temp->setDate_of_birth($data["date_of_birth"]);
            $patient_temp->setDate_of_death($data["date_of_death"]);
            $patient_temp->setExpire_flag($data["date_of_death_hosp"]);
            $patient_temp->setName(ucwords($data["name"]));
            $patient_temp->setSurname(ucwords($data["surname"]));
            array_push($alerts_array, array($prescription_temp, $patient_temp));
        }
        $this->prescriptions_data = $alerts_array;
        return $this->$prescriptions_data;
    }
}



