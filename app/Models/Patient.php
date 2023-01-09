<?php
namespace App\Models;

class Patient
{
    protected $row_id;
    protected $id;
    protected $name;
    protected $surname;
    protected $gender;
    protected $date_of_birth;
    protected $date_of_death;
    protected $date_of_death_hosp;
    protected $expire_flag;
    protected $followed;
    protected $admission_id;
    protected $weight;
    protected $height;


    // GET METHODS
    public function getPatientId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getFullName(){
        return ucfirst($this->name) . " " . strtoupper($this->surname);
    }

    public function getGender(){
        return $this->gender;
    }

    public function getGenderInfos($gender_letter){
        if($gender_letter==="M"){
            $data = array(
                'color'=>"blue",
                'fullletter'=>"Masculin",
                'icon'=>'male'
            );
        }
        if($gender_letter==="F"){
            $data = array(
                'color'=>"pink",
                'fullletter'=>"Féminin",
                'icon'=>'female'
            );
        }
        return $data;
    }

    public function getDateOfBirth(){
        return $this->date_of_birth;
    }

    public function getDateOfDeath(){
        return $this->date_of_death;
    }

    public function getExpireFlag(){
        return $this->expire_flag;
    }

    public function followed(){
        return $this->followed;
    }

    public function getNumberAlerts(){
        $pdo = connect_database();
        $query = "SELECT COUNT(*) FROM `prescriptions` JOIN `alerts` ON row_id=prescription_id WHERE subject_id=".$this->getPatientId()." AND alert=1";
        $data = $pdo->query($query)->fetch();
        return $data["COUNT(*)"];
    }

    public function getRemainingPrescriptions(){
        $pdo = connect_database();
        $query = "SELECT COUNT(*) FROM `prescriptions` WHERE subject_id=".$this->getPatientId()." AND status=''";
        $data = $pdo->query($query)->fetch();
        return $data["COUNT(*)"];
    }

    public function getLastAdmission(){
        $pdo = connect_database();
        $query = "SELECT COUNT(*) FROM `prescriptions` WHERE subject_id=".$this->getPatientId()." AND status=''";
        $data = $pdo->query($query)->fetch();
    }
    
    public function getWeight(){
        $pdo = connect_database();
        $query = "SELECT value FROM `chartevents` WHERE itemid=224639 AND subject_id=".$this->getPatientId();
        $data = $pdo->query($query)->fetch();
        return $data["value"];
    }

    public function getHeight(){
        $pdo = connect_database();
        $query = "SELECT 'value' FROM `chartevents` WHERE itemid=226730 AND subject_id=".$this->getPatientId();
        $data = $pdo->query($query)->fetch();
        return $data["value"];
    }

    public function read($id){
        // require_once(A'')
        $pdo = connect_database();
        $query = "SELECT * FROM `patients` WHERE subject_id=" . $id .";";
        $data = $pdo->query($query)->fetch();
        $this->row_id = $data["row_id"];
        $this->id = intval($data["subject_id"]);
        $this->name = $data["name"];
        $this->surname = $data["surname"];
        $this->gender = $data["gender"];
        $this->date_of_birth = $data["date_of_birth"];
        $this->date_of_death = $data["date_of_death"];
        $this->expire_flag = $data["date_of_death_hosp"];
        return $this;
    }

    public function getLastCreatinine(){
        $subject_id = $this->getPatientId();
        $pdo = connect_database();
        $query = "SELECT valuenum, valueuom FROM `chartevents` JOIN `d_items` ON chartevents.itemid=d_items.itemid WHERE subject_id=" . $subject_id . " AND label='Creatinine'";
        $data = $pdo->query($query)->fetch();

        return $data["valuenum"] . " " . $data["valueuom"];
    }

    public function getLastHeartRate(){
        $subject_id = $this->getPatientId();
        $pdo = connect_database();
        $query = "SELECT valuenum, valueuom FROM `chartevents` JOIN `d_items` ON chartevents.itemid=d_items.itemid WHERE subject_id=" . $subject_id . " AND label='Heart Rate'";
        $data = $pdo->query($query)->fetch();

        return $data["valuenum"] . " " . $data["valueuom"];
    }

    public function getLastPressure(){
        $subject_id = $this->getPatientId();
        $pdo = connect_database();
        $query = "SELECT valuenum, valueuom FROM `chartevents` JOIN `d_items` ON chartevents.itemid=d_items.itemid WHERE subject_id=" . $subject_id . " AND label='Non Invasive Blood Pressure systolic'";
        $data = $pdo->query($query)->fetch();

        return $data["valuenum"] . " " . $data["valueuom"];
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setSurname(string $surname){
        $this->surname = $surname;
    }


    public function setDeath(string $death){
        $this->date_of_death = $death;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function setGender(string $gender){
        $this->gender = $gender;
    }

    public function setDate_of_birth(string $DOB){
        $this->date_of_birth = $DOB;
    }

    public function setDate_of_death(string $date_of_death){
        $this->date_of_death = $date_of_death;
    }

    public function setExpire_flag(string $expire_flag){
        $this->expire_flag = $expire_flag;
    }

    public function setAdmissionId(int $admission_id){
        $this->admission_id = $admission_id;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function setHeight($height){
        $this->height = $height;
    }
}




class Admission{
    protected $row_id;
    protected $subject_id;
    protected $admission_id;
    protected $admit_time;
    protected $dischtime;
    protected $death_time;
    protected $admission_type;
    protected $admission_location;
    protected $discharge_location;
    protected $insurance;
    protected $reg_time;
    protected $out_time;
    protected $diagnosis;
    protected $hospital_expire_flag;
    protected $has_charevents_data;

    public function getRowId(){
        return $this->row_id;
    }
    
    public function getSubjectId(){
        return $this->subject_id;
    }
    
    public function getAdmissionId(){
        return $this->admission_id;
    }
    
    public function getAdmitTime(){
        return $this->admit_time;
    }
    
    public function getDischtime(){
        return $this->dischtime;
    }
    
    public function getDeathTime(){
        return $this->death_time;
    }
    
    public function getAdmissionType(){
        return $this->admission_type;
    }
    
    public function getAdmissionLocation(){
        return $this->admission_location;
    }
    
    public function getDischargeLocation(){
        return $this->discharge_location;
    }
    
    public function getInsurance(){
        return $this->insurance;
    }
    
    public function getRegTime(){
        return $this->reg_time;
    }
    
    public function getOutTime(){
        return $this->out_time;
    }
    
    public function getDiagnosis(){
        return $this->diagnosis;
    }
    
    public function getHospitalExpireFlag(){
        return $this->hospital_expire_flag;
    }
    
    public function getHasChareventsData(){
        return $this->has_charevents_data;
    }
    
    
        

    public function setRowId($row_id){
        $this->row_id = $row_id;
    }
    
    public function setSubjectId($subject_id){
        $this->subject_id = $subject_id;
    }
    
    public function setAdmissionId($admission_id){
        $this->admission_id = $admission_id;
    }
    
    public function setAdmitTime($admit_time){
        $this->admit_time = $admit_time;
    }
    
    public function setDischtime($dischtime){
        $this->dischtime = $dischtime;
    }
    
    public function setDeathTime($death_time){
        $this->death_time = $death_time;
    }
    
    public function setAdmissionType($admission_type){
        $this->admission_type = $admission_type;
    }
    
    public function setAdmissionLocation($admission_location){
        $this->admission_location = $admission_location;
    }
    
    public function setDischargeLocation($discharge_location){
        $this->discharge_location = $discharge_location;
    }
    
    public function setInsurance($insurance){
        $this->insurance = $insurance;
    }
    
    public function setRegTime($reg_time){
        $this->reg_time = $reg_time;
    }
    
    public function setOutTime($out_time){
        $this->out_time = $out_time;
    }
    
    public function setDiagnosis($diagnosis){
        $this->diagnosis = $diagnosis;
    }
    
    public function setHospitalExpireFlag($hospital_expire_flag){
        $this->hospital_expire_flag = $hospital_expire_flag;
    }
    
    public function setHasChareventsData($has_charevents_data){
        $this->has_charevents_data = $has_charevents_data;
    }
    

    public function getLastAdmissionById(int $patient_id){
        $pdo = connect_database();
        $query = "SELECT * FROM `admissions` WHERE subject_id=". $patient_id ." ORDER BY admittime DESC LIMIT 1";
        $data = $pdo->query($query)->fetch();
        $this->row_id = $data["row_id"];
        $this->subject_id = $data["subject_id"];
        $this->admission_id = $data["hadm_id"];
        $this->admit_time = $data["admittime"];
        $this->dischtime = $data["dischtime"];
        $this->death_time = $data["deathtime"];
        $this->admission_type = $data["admission_type"];
        $this->admission_location = $data["admission_location"];
        $this->discharge_location = $data["discharge_location"];
        $this->insurance = $data["insurance"];
        $this->reg_time = $data["edregtime"];
        $this->out_time = $data["edouttime"];
        $this->diagnosis = $data["diagnosis"];
        $this->hospital_expire_flag = $data["hospital_expire_flag"];
        $this->has_charevents_data = $data["has_charevents_data"];
        return $this;
    }
    
    
}