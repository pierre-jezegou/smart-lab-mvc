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
}
