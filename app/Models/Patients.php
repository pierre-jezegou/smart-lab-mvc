<?php
namespace App\Models;
use App\Models\Patient;

class Patients
{
    public $patients_data;
    protected $patient_number;


    // GET METHODS
    public function getAllPatients(){
        $pdo = connect_database();
        $query = "SELECT * FROM `patients` WHERE subject_id>40000 LIMIT 25;";
        $datas = $pdo->query($query)->fetchall();
        $patients = array();
        foreach($datas as $data){
            $patient_temp = new Patient;
            $patient_temp->setId($data["subject_id"]);
            $patient_temp->setGender($data["gender"]);
            $patient_temp->setDate_of_birth($data["date_of_birth"]);
            $patient_temp->setDate_of_death($data["date_of_death"]);
            $patient_temp->setExpire_flag($data["date_of_death_hosp"]);
            $patient_temp->setName(ucwords($data["name"]));
            $patient_temp->setSurname(ucwords($data["surname"]));
            array_push($patients, $patient_temp);
        }
        $this->patients_data = $patients;
        return $this->patients_data;
    }
}
